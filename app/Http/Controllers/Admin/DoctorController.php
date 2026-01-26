<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\DoctorAvailability;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public function dashboard()
    {
        $doctor = auth()->user();
        
        // Check if registration is complete
        $profile = $doctor->doctorProfile;
        if (!$profile || !$profile->profile_completed) {
            // Redirect to appropriate registration step
            if (!$profile) {
                return redirect()->route('doctor.registration.step2')
                    ->with('info', 'Please complete your registration to access the dashboard.');
            }
            if (!$profile->specializations) {
                return redirect()->route('doctor.registration.step3')
                    ->with('info', 'Please complete your profile to access the dashboard.');
            }
            if (!$profile->home_visit_fee && !$profile->clinic_visit_fee) {
                return redirect()->route('doctor.registration.step4')
                    ->with('info', 'Please complete your registration to access the dashboard.');
            }
        }
        
        $stats = [
            'total_appointments' => Appointment::where('doctor_id', $doctor->id)->count(),
            'pending_appointments' => Appointment::where('doctor_id', $doctor->id)
                ->where('status', 'pending')->count(),
            'confirmed_appointments' => Appointment::where('doctor_id', $doctor->id)
                ->where('status', 'confirmed')->count(),
            'completed_appointments' => Appointment::where('doctor_id', $doctor->id)
                ->where('status', 'completed')->count(),
        ];

        $appointments = Appointment::with('patient')
            ->where('doctor_id', $doctor->id)
            ->latest()
            ->take(10)
            ->get();

        // Pass verification status to view
        $verificationStatus = $profile ? $profile->verification_status : 'pending';

        return view('admin.doctor.dashboard', compact('stats', 'appointments', 'verificationStatus', 'profile'));
    }

    public function appointments()
    {
        $doctor = auth()->user();
        $appointments = Appointment::with('patient')
            ->where('doctor_id', $doctor->id)
            ->latest()
            ->paginate(20);

        return view('admin.doctor.appointments', compact('appointments'));
    }

    public function updateAppointmentStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled',
            'doctor_notes' => 'nullable|string',
        ]);

        $appointment = Appointment::where('doctor_id', auth()->id())->findOrFail($id);
        $appointment->update([
            'status' => $request->status,
            'doctor_notes' => $request->doctor_notes,
        ]);

        return redirect()->back()->with('success', 'Appointment status updated successfully.');
    }

    public function availability()
    {
        $doctor = auth()->user();
        $availabilities = DoctorAvailability::where('doctor_id', $doctor->id)
            ->orderByRaw("FIELD(day_of_week, 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday')")
            ->get();

        return view('admin.doctor.availability', compact('availabilities'));
    }

    public function storeAvailability(Request $request)
    {
        $request->validate([
            'day_of_week' => 'required|in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
        ]);

        DoctorAvailability::updateOrCreate(
            [
                'doctor_id' => auth()->id(),
                'day_of_week' => $request->day_of_week,
            ],
            [
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'is_available' => $request->has('is_available'),
            ]
        );

        return redirect()->back()->with('success', 'Availability updated successfully.');
    }

    public function deleteAvailability($id)
    {
        $availability = DoctorAvailability::where('doctor_id', auth()->id())->findOrFail($id);
        $availability->delete();

        return redirect()->back()->with('success', 'Availability deleted successfully.');
    }

    public function profile()
    {
        $doctor = auth()->user();
        $profile = $doctor->doctorProfile;
        $documents = $doctor->doctorProfile->documents ?? collect();
        
        return view('admin.doctor.profile', compact('profile', 'documents'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'bio' => 'nullable|string|max:1000',
            'clinic_name' => 'nullable|string|max:255',
            'clinic_address' => 'nullable|string|max:500',
            'home_visit_fee' => 'nullable|numeric|min:0',
            'clinic_visit_fee' => 'nullable|numeric|min:0',
            'video_session_fee' => 'nullable|numeric|min:0',
            'slot_duration' => 'nullable|integer|min:15|max:120',
            'max_patients_per_day' => 'nullable|integer|min:1|max:50',
            'buffer_time' => 'nullable|integer|min:0|max:60',
            'same_day_bookings' => 'boolean',
        ]);

        $doctor = auth()->user();
        $profile = $doctor->doctorProfile;
        
        $profile->update([
            'bio' => $request->bio,
            'clinic_name' => $request->clinic_name,
            'clinic_address' => $request->clinic_address,
            'home_visit_fee' => $request->home_visit_fee,
            'clinic_visit_fee' => $request->clinic_visit_fee,
            'video_session_fee' => $request->video_session_fee,
            'slot_duration' => $request->slot_duration ?? 30,
            'max_patients_per_day' => $request->max_patients_per_day ?? 10,
            'buffer_time' => $request->buffer_time ?? 10,
            'same_day_bookings' => $request->has('same_day_bookings'),
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function updateProfilePhoto(Request $request)
    {
        $request->validate([
            'profile_image' => 'nullable|image|mimes:jpeg,jpg,png|max:1024', // 1MB max
            'profile_image_cropped' => 'nullable|string',
        ]);

        $doctor = auth()->user();
        $profile = $doctor->doctorProfile;
        
        if (!$profile) {
            return redirect()->back()->with('error', 'Profile not found.');
        }

        // Handle cropped profile image
        if ($request->has('profile_image_cropped') && $request->profile_image_cropped) {
            $this->saveCroppedProfileImage($doctor, $request->profile_image_cropped);
        } elseif ($request->hasFile('profile_image')) {
            // Fallback: if cropped image not provided, use original
            $file = $request->file('profile_image');
            if ($file->getSize() <= 1024 * 1024) { // 1MB check
                // Delete old profile image if exists
                if ($profile->profile_image) {
                    if (Storage::disk('public')->exists($profile->profile_image)) {
                        Storage::disk('public')->delete($profile->profile_image);
                    }
                }
                
                $path = $file->store('doctor-profiles', 'public');
                $profile->update(['profile_image' => $path]);
            } else {
                return redirect()->back()->with('error', 'Image size must be less than 1MB.');
            }
        } else {
            return redirect()->back()->with('error', 'Please select an image to upload.');
        }

        return redirect()->back()->with('success', 'Profile photo updated successfully.');
    }

    /**
     * Save cropped profile image from base64 string
     */
    private function saveCroppedProfileImage($user, $base64Image)
    {
        // Remove data URL prefix if present
        $base64Image = preg_replace('/^data:image\/\w+;base64,/', '', $base64Image);
        $imageData = base64_decode($base64Image);
        
        if ($imageData === false) {
            return false;
        }
        
        $profile = $user->doctorProfile;
        
        // Delete old profile image if exists
        if ($profile && $profile->profile_image) {
            $oldPath = $profile->profile_image;
            if (Storage::disk('public')->exists($oldPath)) {
                Storage::disk('public')->delete($oldPath);
            }
        }
        
        // Generate unique filename
        $filename = 'profile_' . $user->id . '_' . time() . '.jpg';
        $path = 'doctor-profiles/' . $filename;
        
        // Save new image
        Storage::disk('public')->put($path, $imageData);
        
        // Update profile with image path
        $profile->update(['profile_image' => $path]);
        
        return true;
    }

    public function reuploadDocument(Request $request, $documentId)
    {
        $request->validate([
            'document' => 'required|file|mimes:pdf,jpg,jpeg,png|max:5120',
        ]);

        $doctor = auth()->user();
        $document = $doctor->doctorProfile->documents()->findOrFail($documentId);
        
        // Only allow re-upload if document was rejected
        if ($document->status !== 'rejected') {
            return redirect()->back()->with('error', 'Only rejected documents can be re-uploaded.');
        }

        // Delete old file if it exists
        if ($document->file_path && \Storage::disk('public')->exists($document->file_path)) {
            \Storage::disk('public')->delete($document->file_path);
        }

        // Store new file
        $file = $request->file('document');
        $path = $file->store('doctor-documents', 'public');
        
        // Update document record
        $document->update([
            'file_path' => $path,
            'file_name' => $file->getClientOriginalName(),
            'status' => 'pending',
            'rejection_reason' => null,
        ]);

        return redirect()->back()->with('success', 'Document re-uploaded successfully! Awaiting admin review.');
    }
}

