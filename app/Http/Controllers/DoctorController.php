<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of all verified doctors
     */
    public function index(Request $request)
    {
        $query = User::where('role', 'admin')
            ->whereHas('doctorProfile', function($q) {
                $q->where('verification_status', 'approved')
                  ->where('profile_completed', true);
            })
            ->with('doctorProfile');

        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhereHas('doctorProfile', function($profileQuery) use ($search) {
                      $profileQuery->where('bio', 'like', "%{$search}%")
                                   ->orWhere('clinic_name', 'like', "%{$search}%")
                                   ->orWhere('clinic_address', 'like', "%{$search}%");
                  });
            });
        }

        // Filter by state/UT
        if ($request->has('state') && $request->state) {
            $query->whereHas('doctorProfile', function($q) use ($request) {
                $q->where(function ($sub) use ($request) {
                    $sub->where('state', $request->state)
                        ->orWhere('city', $request->state);
                });
            });
        }

        // Filter by specialization
        if ($request->has('specialization') && $request->specialization) {
            $query->whereHas('doctorProfile', function($q) use ($request) {
                $q->whereJsonContains('specializations', $request->specialization);
            });
        }

        $doctors = $query->paginate(9);

        // States/UTs: use config locations (single source of truth)
        $cities = collect(array_keys(config('pelvicare.locations', [])));

        $allSpecializations = User::where('role', 'admin')
            ->whereHas('doctorProfile', function($q) {
                $q->where('verification_status', 'approved')
                  ->where('profile_completed', true)
                  ->whereNotNull('specializations');
            })
            ->with('doctorProfile')
            ->get()
            ->pluck('doctorProfile.specializations')
            ->flatten()
            ->filter()
            ->unique()
            ->sort()
            ->values();

        return view('doctors.index', compact('doctors', 'cities', 'allSpecializations'));
    }

    /**
     * Display the specified doctor's profile (by slug)
     */
    public function show(string $slug)
    {
        $doctor = User::where('role', 'admin')
            ->whereHas('doctorProfile', function($q) use ($slug) {
                $q->where('verification_status', 'approved')
                  ->where('profile_completed', true)
                  ->where('slug', $slug);
            })
            ->with(['doctorProfile.faqs', 'doctorProfile.photos', 'availabilities'])
            ->firstOrFail();

        return view('doctors.show', compact('doctor'));
    }
}
