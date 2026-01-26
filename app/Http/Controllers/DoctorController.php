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

        // Filter by city
        if ($request->has('city') && $request->city) {
            $query->whereHas('doctorProfile', function($q) use ($request) {
                $q->where('city', 'like', "%{$request->city}%");
            });
        }

        // Filter by specialization
        if ($request->has('specialization') && $request->specialization) {
            $query->whereHas('doctorProfile', function($q) use ($request) {
                $q->whereJsonContains('specializations', $request->specialization);
            });
        }

        $doctors = $query->paginate(9);

        // Get unique cities and specializations for filters
        $cities = User::where('role', 'admin')
            ->whereHas('doctorProfile', function($q) {
                $q->where('verification_status', 'approved')
                  ->where('profile_completed', true)
                  ->whereNotNull('city');
            })
            ->with('doctorProfile')
            ->get()
            ->pluck('doctorProfile.city')
            ->filter()
            ->unique()
            ->sort()
            ->values();

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
     * Display the specified doctor's profile
     */
    public function show($id)
    {
        $doctor = User::where('role', 'admin')
            ->whereHas('doctorProfile', function($q) {
                $q->where('verification_status', 'approved')
                  ->where('profile_completed', true);
            })
            ->with(['doctorProfile', 'availabilities'])
            ->findOrFail($id);

        return view('doctors.show', compact('doctor'));
    }
}
