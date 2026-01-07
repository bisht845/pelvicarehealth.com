@extends('layouts.admin')

@section('title', 'My Profile')
@section('page-title', 'My Profile')

@section('content')
<div class="space-y-6">
    <!-- Medical Information -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold mb-4">Medical Information</h3>
        <form action="{{ route('patient.profile.update') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Medical History</label>
                <textarea name="medical_history" rows="4" class="w-full border-gray-300 rounded-md">{{ old('medical_history', $profile->medical_history ?? '') }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Allergies</label>
                <textarea name="allergies" rows="2" class="w-full border-gray-300 rounded-md">{{ old('allergies', $profile->allergies ?? '') }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Current Medications</label>
                <textarea name="current_medications" rows="3" class="w-full border-gray-300 rounded-md">{{ old('current_medications', $profile->current_medications ?? '') }}</textarea>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Emergency Contact Name</label>
                    <input type="text" name="emergency_contact_name" value="{{ old('emergency_contact_name', $profile->emergency_contact_name ?? '') }}" class="w-full border-gray-300 rounded-md">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Emergency Contact Phone</label>
                    <input type="tel" name="emergency_contact_phone" value="{{ old('emergency_contact_phone', $profile->emergency_contact_phone ?? '') }}" class="w-full border-gray-300 rounded-md">
                </div>
            </div>
            <button type="submit" class="bg-pink-600 text-white px-6 py-2 rounded-md hover:bg-pink-700">Save Medical Info</button>
        </form>
    </div>

    <!-- Address Information -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold mb-4">Address Information</h3>
        <form action="{{ route('patient.profile.update') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                <textarea name="address" rows="3" class="w-full border-gray-300 rounded-md">{{ old('address', $profile->address ?? '') }}</textarea>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">City</label>
                    <input type="text" name="city" value="{{ old('city', $profile->city ?? '') }}" class="w-full border-gray-300 rounded-md">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">State</label>
                    <input type="text" name="state" value="{{ old('state', $profile->state ?? '') }}" class="w-full border-gray-300 rounded-md">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Pincode</label>
                    <input type="text" name="pincode" value="{{ old('pincode', $profile->pincode ?? '') }}" class="w-full border-gray-300 rounded-md">
                </div>
            </div>
            <button type="submit" class="bg-pink-600 text-white px-6 py-2 rounded-md hover:bg-pink-700">Save Address</button>
        </form>
    </div>

    <!-- Documents -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold">My Documents</h3>
            <button onclick="document.getElementById('uploadModal').classList.remove('hidden')" class="bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-700 text-sm">
                Upload Document
            </button>
        </div>
        <div class="space-y-4">
            @forelse(auth()->user()->patientDocuments as $document)
            <div class="border rounded-lg p-4 flex items-center justify-between">
                <div>
                    <h4 class="font-semibold">{{ $document->title }}</h4>
                    <p class="text-sm text-gray-600">{{ ucfirst($document->document_type) }}</p>
                    @if($document->document_date)
                    <p class="text-xs text-gray-500">{{ $document->document_date->format('M d, Y') }}</p>
                    @endif
                </div>
                <div class="flex space-x-2">
                    <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank" class="text-blue-600 hover:text-blue-900 text-sm">View</a>
                    <form action="{{ route('patient.documents.delete', $document->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900 text-sm">Delete</button>
                    </form>
                </div>
            </div>
            @empty
            <p class="text-gray-500 text-center py-8">No documents uploaded yet</p>
            @endforelse
        </div>
    </div>
</div>

<!-- Upload Modal -->
<div id="uploadModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg p-6 max-w-md w-full">
        <h3 class="text-lg font-semibold mb-4">Upload Document</h3>
        <form action="{{ route('patient.documents.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Document Type *</label>
                    <select name="document_type" required class="w-full border-gray-300 rounded-md">
                        <option value="mri">MRI</option>
                        <option value="xray">X-Ray</option>
                        <option value="prescription">Prescription</option>
                        <option value="lab_report">Lab Report</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Title *</label>
                    <input type="text" name="title" required class="w-full border-gray-300 rounded-md">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">File *</label>
                    <input type="file" name="file" required accept=".pdf,.jpg,.jpeg,.png" class="w-full border-gray-300 rounded-md">
                    <p class="text-xs text-gray-500 mt-1">Supported: PDF, JPG, PNG (Max 5MB)</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea name="description" rows="3" class="w-full border-gray-300 rounded-md"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Document Date</label>
                    <input type="date" name="document_date" class="w-full border-gray-300 rounded-md">
                </div>
            </div>
            <div class="flex justify-end space-x-2 mt-6">
                <button type="button" onclick="document.getElementById('uploadModal').classList.add('hidden')" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md">Cancel</button>
                <button type="submit" class="bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-700">Upload</button>
            </div>
        </form>
    </div>
</div>
@endsection

