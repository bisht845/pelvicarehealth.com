<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Content;
use App\Models\Post;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total_users' => User::count(),
            'total_patients' => User::where('role', 'patient')->count(),
            'total_doctors' => User::where('role', 'admin')->count(),
            'total_appointments' => Appointment::count(),
            'pending_appointments' => Appointment::where('status', 'pending')->count(),
            'total_posts' => Post::count(),
        ];

        $recent_appointments = Appointment::with(['patient', 'doctor'])
            ->latest()
            ->take(10)
            ->get();

        return view('admin.super-admin.dashboard', compact('stats', 'recent_appointments'));
    }

    public function manageUsers()
    {
        $users = User::latest()->paginate(20);
        return view('admin.super-admin.users', compact('users'));
    }

    public function updateUserRole(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|in:super_admin,admin,patient',
        ]);

        $user = User::findOrFail($id);
        $user->update(['role' => $request->role]);

        return redirect()->back()->with('success', 'User role updated successfully.');
    }
}

