<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\DoctorProfile;
use App\Models\DoctorDocument;
use Illuminate\Http\Request;

class DoctorVerificationController extends Controller
{
    public function index()
    {
        $doctors = User::where('role', 'admin')
            ->with(['doctorProfile', 'doctorDocuments'])
            ->where(function($query) {
                $query->whereHas('doctorProfile', function($q) {
                    $q->whereIn('verification_status', ['pending', 'rejected']);
                })->orDoesntHave('doctorProfile');
            })
            ->latest()
            ->paginate(20);

        return view('admin.super-admin.doctor-verification', compact('doctors'));
    }

    public function show($id)
    {
        $doctor = User::with(['doctorProfile', 'doctorDocuments'])->findOrFail($id);
        
        if (!$doctor->isAdmin()) {
            abort(404);
        }

        return view('admin.super-admin.doctor-detail', compact('doctor'));
    }

    public function approveDoctor($id)
    {
        $doctor = User::findOrFail($id);
        
        if (!$doctor->isAdmin()) {
            abort(404);
        }

        $profile = $doctor->doctorProfile;
        
        if ($profile) {
            $profile->update([
                'verification_status' => 'approved',
                'verified_by' => auth()->id(),
                'verified_at' => now(),
            ]);

            // Approve all documents
            $doctor->doctorDocuments()->update([
                'status' => 'approved',
                'verified_by' => auth()->id(),
                'verified_at' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Doctor approved successfully!');
    }

    public function rejectDoctor(Request $request, $id)
    {
        $request->validate([
            'rejection_reason' => 'required|string',
        ]);

        $doctor = User::findOrFail($id);
        
        if (!$doctor->isAdmin()) {
            abort(404);
        }

        $profile = $doctor->doctorProfile;
        
        if ($profile) {
            $profile->update([
                'verification_status' => 'rejected',
                'rejection_reason' => $request->rejection_reason,
                'verified_by' => auth()->id(),
                'verified_at' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Doctor rejected.');
    }

    public function approveDocument($documentId)
    {
        $document = DoctorDocument::findOrFail($documentId);
        
        $document->update([
            'status' => 'approved',
            'verified_by' => auth()->id(),
            'verified_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Document approved!');
    }

    public function rejectDocument(Request $request, $documentId)
    {
        $request->validate([
            'rejection_reason' => 'required|string',
        ]);

        $document = DoctorDocument::findOrFail($documentId);
        
        $document->update([
            'status' => 'rejected',
            'rejection_reason' => $request->rejection_reason,
            'verified_by' => auth()->id(),
            'verified_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Document rejected.');
    }
}

