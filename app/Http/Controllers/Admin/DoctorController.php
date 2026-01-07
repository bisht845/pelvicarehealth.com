<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\DoctorAvailability;
use App\Models\Report;
use Illuminate\Http\Request;

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
            'is_available' => 'boolean',
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
}

