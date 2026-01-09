@extends('layouts.app')

@section('title', 'Doctor Registration - Step 2')
@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto">
        @if(session('success'))
            <div class="mb-6 bg-green-50 border-l-4 border-green-400 p-4 rounded-lg">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-green-700">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Progress Header -->
            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h2 class="text-2xl font-bold text-white heading-font">Verify Your Identity</h2>
                        <p class="text-blue-100 text-sm mt-1">Upload your professional documents</p>
                    </div>
                    <div class="bg-white text-black bg-opacity-20 rounded-full px-4 py-2">
                        <span class="text-black font-semibold">Step 2 of 4</span>
                    </div>
                </div>
                <div class="w-full bg-white bg-opacity-20 rounded-full h-2">
                    <div class="bg-white h-2 rounded-full transition-all duration-300" style="width: 50%"></div>
                </div>
            </div>

            <!-- Form Content -->
            <div class="p-8">
                <div class="mb-6 bg-blue-50 border-l-4 border-blue-400 p-4 rounded">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-blue-700">
                                <strong>Verification Process:</strong> Our medical team will review your documents. Verification usually takes 24-48 hours. You'll receive an email once your profile is approved.
                            </p>
                        </div>
                    </div>
                </div>

                <form action="{{ route('doctor.registration.store.step2') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <!-- Required Documents -->
                    <div class="space-y-5">
                        @php
                            $uploadedDocs = [];
                            if (isset($documents)) {
                                foreach ($documents as $doc) {
                                    $uploadedDocs[$doc->document_type] = $doc;
                                }
                            }
                        @endphp
                        <div class="border-2 border-dashed {{ isset($uploadedDocs['degree_certificate']) ? 'border-green-400 bg-green-50' : 'border-gray-300' }} rounded-lg p-6 hover:border-blue-400 transition">
                            <label class="block">
                                <div class="flex items-center justify-between mb-2">
                                    <div>
                                        <span class="block text-sm font-semibold text-gray-900">Degree Certificate (BPT/MPT)</span>
                                        <span class="text-xs text-gray-500">Required document</span>
                                        @if(isset($uploadedDocs['degree_certificate']))
                                            <span class="text-xs text-green-600 font-medium block mt-1">✓ Uploaded: {{ $uploadedDocs['degree_certificate']->file_name }}</span>
                                        @endif
                                    </div>
                                    <span class="px-2 py-1 text-xs font-semibold bg-red-100 text-red-800 rounded">Required</span>
                                </div>
                                <p class="text-xs text-gray-500 mb-3">Supported: PDF, JPG, PNG (Max 5MB)</p>
                                <input type="file" name="degree_certificate" {{ !isset($uploadedDocs['degree_certificate']) ? 'required' : '' }} accept=".pdf,.jpg,.jpeg,.png" 
                                       class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('degree_certificate') border-red-500 @enderror">
                                @if(isset($uploadedDocs['degree_certificate']))
                                    <p class="text-xs text-gray-600 mt-2">Leave empty to keep current file, or upload a new one to replace.</p>
                                @endif
                                @error('degree_certificate')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </label>
                        </div>

                        <div class="border-2 border-dashed {{ isset($uploadedDocs['council_registration']) ? 'border-green-400 bg-green-50' : 'border-gray-300' }} rounded-lg p-6 hover:border-blue-400 transition">
                            <label class="block">
                                <div class="flex items-center justify-between mb-2">
                                    <div>
                                        <span class="block text-sm font-semibold text-gray-900">Council Registration</span>
                                        <span class="text-xs text-gray-500">Required document</span>
                                        @if(isset($uploadedDocs['council_registration']))
                                            <span class="text-xs text-green-600 font-medium block mt-1">✓ Uploaded: {{ $uploadedDocs['council_registration']->file_name }}</span>
                                        @endif
                                    </div>
                                    <span class="px-2 py-1 text-xs font-semibold bg-red-100 text-red-800 rounded">Required</span>
                                </div>
                                <p class="text-xs text-gray-500 mb-3">Supported: PDF, JPG, PNG (Max 5MB)</p>
                                <input type="file" name="council_registration" {{ !isset($uploadedDocs['council_registration']) ? 'required' : '' }} accept=".pdf,.jpg,.jpeg,.png" 
                                       class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('council_registration') border-red-500 @enderror">
                                @if(isset($uploadedDocs['council_registration']))
                                    <p class="text-xs text-gray-600 mt-2">Leave empty to keep current file, or upload a new one to replace.</p>
                                @endif
                                @error('council_registration')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </label>
                        </div>

                        <div class="border-2 border-dashed {{ isset($uploadedDocs['government_id']) ? 'border-green-400 bg-green-50' : 'border-gray-300' }} rounded-lg p-6 hover:border-blue-400 transition">
                            <label class="block">
                                <div class="flex items-center justify-between mb-2">
                                    <div>
                                        <span class="block text-sm font-semibold text-gray-900">Government ID (Aadhaar/PAN)</span>
                                        <span class="text-xs text-gray-500">Required document</span>
                                        @if(isset($uploadedDocs['government_id']))
                                            <span class="text-xs text-green-600 font-medium block mt-1">✓ Uploaded: {{ $uploadedDocs['government_id']->file_name }}</span>
                                        @endif
                                    </div>
                                    <span class="px-2 py-1 text-xs font-semibold bg-red-100 text-red-800 rounded">Required</span>
                                </div>
                                <p class="text-xs text-gray-500 mb-3">Supported: PDF, JPG, PNG (Max 5MB)</p>
                                <input type="file" name="government_id" {{ !isset($uploadedDocs['government_id']) ? 'required' : '' }} accept=".pdf,.jpg,.jpeg,.png" 
                                       class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('government_id') border-red-500 @enderror">
                                @if(isset($uploadedDocs['government_id']))
                                    <p class="text-xs text-gray-600 mt-2">Leave empty to keep current file, or upload a new one to replace.</p>
                                @endif
                                @error('government_id')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </label>
                        </div>

                        <div class="border-2 border-dashed {{ isset($uploadedDocs['iap_membership']) ? 'border-green-400 bg-green-50' : 'border-gray-300' }} rounded-lg p-6 hover:border-blue-400 transition">
                            <label class="block">
                                <div class="flex items-center justify-between mb-2">
                                    <div>
                                        <span class="block text-sm font-semibold text-gray-900">IAP Membership</span>
                                        <span class="text-xs text-gray-500">Optional document</span>
                                        @if(isset($uploadedDocs['iap_membership']))
                                            <span class="text-xs text-green-600 font-medium block mt-1">✓ Uploaded: {{ $uploadedDocs['iap_membership']->file_name }}</span>
                                        @endif
                                    </div>
                                    <span class="px-2 py-1 text-xs font-semibold bg-gray-100 text-gray-800 rounded">Optional</span>
                                </div>
                                <p class="text-xs text-gray-500 mb-3">Supported: PDF, JPG, PNG (Max 5MB)</p>
                                <input type="file" name="iap_membership" accept=".pdf,.jpg,.jpeg,.png" 
                                       class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                                @if(isset($uploadedDocs['iap_membership']))
                                    <p class="text-xs text-gray-600 mt-2">Leave empty to keep current file, or upload a new one to replace.</p>
                                @endif
                            </label>
                        </div>

                        <div class="border-2 border-dashed {{ isset($uploadedDocs['clinic_proof']) ? 'border-green-400 bg-green-50' : 'border-gray-300' }} rounded-lg p-6 hover:border-blue-400 transition">
                            <label class="block">
                                <div class="flex items-center justify-between mb-2">
                                    <div>
                                        <span class="block text-sm font-semibold text-gray-900">Clinic Proof</span>
                                        <span class="text-xs text-gray-500">Optional document</span>
                                        @if(isset($uploadedDocs['clinic_proof']))
                                            <span class="text-xs text-green-600 font-medium block mt-1">✓ Uploaded: {{ $uploadedDocs['clinic_proof']->file_name }}</span>
                                        @endif
                                    </div>
                                    <span class="px-2 py-1 text-xs font-semibold bg-gray-100 text-gray-800 rounded">Optional</span>
                                </div>
                                <p class="text-xs text-gray-500 mb-3">Supported: PDF, JPG, PNG (Max 5MB)</p>
                                <input type="file" name="clinic_proof" accept=".pdf,.jpg,.jpeg,.png" 
                                       class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                                @if(isset($uploadedDocs['clinic_proof']))
                                    <p class="text-xs text-gray-600 mt-2">Leave empty to keep current file, or upload a new one to replace.</p>
                                @endif
                            </label>
                        </div>
                    </div>

                    <!-- Confirmation Checkbox -->
                    <div class="bg-gray-50 border-2 border-gray-200 rounded-lg p-4">
                        <label class="flex items-start">
                            <input type="checkbox" name="confirm" required class="mt-1 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-3 text-sm text-gray-700">
                                <strong>I confirm</strong> that all information provided is correct and all documents are authentic. I understand that providing false information may result in account termination.
                            </span>
                        </label>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex justify-between items-center pt-4">
                        <a href="{{ route('doctor.registration.step1') }}" class="text-gray-600 hover:text-gray-900 font-medium flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Back
                        </a>
                        <button type="submit" 
                                class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-8 py-3 rounded-lg hover:from-blue-600 hover:to-indigo-700 font-semibold shadow-lg transform hover:scale-[1.02] transition-all">
                            Next: Build Profile →
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

