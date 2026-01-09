@extends('layouts.admin')

@section('title', 'My Profile')
@section('page-title', 'My Profile')
@section('page-subtitle', 'View and manage your professional information')

@section('content')
<div class="space-y-8">
    <!-- Profile Information Section -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6 border-b border-gray-100 bg-gradient-to-r from-pink-50 to-white">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold heading-font text-gray-900">Professional Information</h3>
                    <p class="text-sm text-gray-600 mt-1">Update your practice details and consultation fees</p>
                </div>
                <div class="p-3 bg-pink-100 rounded-xl">
                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <form action="{{ route('doctor.profile.update') }}" method="POST" class="p-8">
            @csrf
            
            <!-- Bio Section -->
            <div class="mb-8">
                <label class="block text-sm font-semibold text-gray-700 mb-2">Professional Bio</label>
                <textarea name="bio" rows="4" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all shadow-sm resize-none" placeholder="Tell patients about your experience and approach to care...">{{ old('bio', $profile->bio) }}</textarea>
                <p class="text-xs text-gray-500 mt-1">This will be displayed on your public profile</p>
                @error('bio')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Clinic Information -->
            <div class="mb-8">
                <h4 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                    <span class="w-8 h-8 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center mr-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </span>
                    Clinic Details
                </h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Clinic Name</label>
                        <input type="text" name="clinic_name" value="{{ old('clinic_name', $profile->clinic_name) }}" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all shadow-sm" placeholder="Your clinic name">
                        @error('clinic_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Clinic Address</label>
                        <textarea name="clinic_address" rows="2" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all shadow-sm resize-none" placeholder="Full clinic address">{{ old('clinic_address', $profile->clinic_address) }}</textarea>
                        @error('clinic_address')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Consultation Fees -->
            <div class="mb-8">
                <h4 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                    <span class="w-8 h-8 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center mr-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </span>
                    Consultation Fees (₹)
                </h4>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Home Visit Fee</label>
                        <input type="number" name="home_visit_fee" value="{{ old('home_visit_fee', $profile->home_visit_fee) }}" step="0.01" min="0" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all shadow-sm" placeholder="0.00">
                        @error('home_visit_fee')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Clinic Visit Fee</label>
                        <input type="number" name="clinic_visit_fee" value="{{ old('clinic_visit_fee', $profile->clinic_visit_fee) }}" step="0.01" min="0" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all shadow-sm" placeholder="0.00">
                        @error('clinic_visit_fee')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Video Session Fee</label>
                        <input type="number" name="video_session_fee" value="{{ old('video_session_fee', $profile->video_session_fee) }}" step="0.01" min="0" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all shadow-sm" placeholder="0.00">
                        @error('video_session_fee')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Appointment Settings -->
            <div class="mb-8">
                <h4 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                    <span class="w-8 h-8 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mr-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </span>
                    Appointment Settings
                </h4>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Slot Duration (minutes)</label>
                        <input type="number" name="slot_duration" value="{{ old('slot_duration', $profile->slot_duration ?? 30) }}" min="15" max="120" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all shadow-sm" placeholder="30">
                        @error('slot_duration')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Max Patients/Day</label>
                        <input type="number" name="max_patients_per_day" value="{{ old('max_patients_per_day', $profile->max_patients_per_day ?? 10) }}" min="1" max="50" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all shadow-sm" placeholder="10">
                        @error('max_patients_per_day')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Buffer Time (minutes)</label>
                        <input type="number" name="buffer_time" value="{{ old('buffer_time', $profile->buffer_time ?? 10) }}" min="0" max="60" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all shadow-sm" placeholder="10">
                        @error('buffer_time')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" name="same_day_bookings" value="1" {{ old('same_day_bookings', $profile->same_day_bookings) ? 'checked' : '' }} class="w-5 h-5 rounded border-gray-300 text-pink-600 focus:ring-pink-500 transition-colors">
                        <span class="ml-3 text-sm font-medium text-gray-700">Allow same-day bookings</span>
                    </label>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-100">
                <button type="submit" class="bg-gradient-to-r from-pink-500 to-pink-600 text-white px-8 py-3 rounded-xl font-semibold hover:from-pink-600 hover:to-pink-700 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Save Changes
                </button>
            </div>
        </form>
    </div>

    <!-- Documents Section -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6 border-b border-gray-100 bg-gradient-to-r from-indigo-50 to-white">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold heading-font text-gray-900">Verification Documents</h3>
                    <p class="text-sm text-gray-600 mt-1">View the status of your submitted documents</p>
                </div>
                <div class="p-3 bg-indigo-100 rounded-xl">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="p-6">
            @if($documents->count() > 0)
                <div class="space-y-4">
                    @foreach($documents as $document)
                        <div class="border border-gray-200 rounded-xl p-6 hover:shadow-md transition-all">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <div class="flex items-center space-x-3 mb-2">
                                        <h4 class="text-base font-bold text-gray-900 capitalize">{{ str_replace('_', ' ', $document->document_type) }}</h4>
                                        @if($document->status === 'approved')
                                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-700 border border-emerald-200">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 inline-block mr-1"></span>
                                                Approved
                                            </span>
                                        @elseif($document->status === 'rejected')
                                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-700 border border-red-200">
                                                <span class="w-1.5 h-1.5 rounded-full bg-red-500 inline-block mr-1"></span>
                                                Rejected
                                            </span>
                                        @else
                                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-amber-100 text-amber-700 border border-amber-200">
                                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 inline-block mr-1 animate-pulse"></span>
                                                Pending Review
                                            </span>
                                        @endif
                                    </div>
                                    
                                    @if($document->status === 'rejected' && $document->rejection_reason)
                                        <div class="mt-3 bg-red-50 border-l-4 border-red-500 p-4 rounded">
                                            <div class="flex items-start">
                                                <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <div>
                                                    <p class="text-sm font-semibold text-red-800">Rejection Reason:</p>
                                                    <p class="text-sm text-red-700 mt-1">{{ $document->rejection_reason }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="flex items-center space-x-3 ml-4">
                                    @if($document->file_path)
                                        <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank" class="text-indigo-600 hover:text-indigo-800 transition-colors">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                        </a>
                                    @endif
                                    
                                    @if($document->status === 'rejected')
                                        <button type="button" onclick="document.getElementById('reupload-{{ $document->id }}').classList.toggle('hidden')" class="bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700 transition-colors text-sm font-medium">
                                            Re-upload
                                        </button>
                                    @endif
                                </div>
                            </div>

                            @if($document->status === 'rejected')
                                <div id="reupload-{{ $document->id }}" class="hidden mt-4 pt-4 border-t border-gray-200">
                                    <form action="{{ route('doctor.profile.document.reupload', $document->id) }}" method="POST" enctype="multipart/form-data" class="flex items-end space-x-3">
                                        @csrf
                                        <div class="flex-1">
                                            <label class="block text-sm font-semibold text-gray-700 mb-2">Upload New Document</label>
                                            <input type="file" name="document" required accept=".pdf,.jpg,.jpeg,.png" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all">
                                            <p class="text-xs text-gray-500 mt-1">Accepted formats: PDF, JPG, PNG (Max 5MB)</p>
                                        </div>
                                        <button type="submit" class="bg-emerald-600 text-white px-6 py-2.5 rounded-lg hover:bg-emerald-700 transition-colors font-medium">
                                            Upload
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <p class="text-gray-500">No documents submitted yet</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
