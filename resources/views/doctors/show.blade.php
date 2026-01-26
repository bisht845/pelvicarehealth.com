@extends('layouts.app')

@section('title', $doctor->name . ' - Expert Physiotherapist | Pelvicare')

@section('meta_description', $doctor->doctorProfile->bio ? Str::limit(strip_tags($doctor->doctorProfile->bio), 160) : 'Expert women\'s health physiotherapist at Pelvicare.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-pink-50 via-white to-pink-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-6">
            <a href="{{ route('doctors.index') }}" class="text-pink-600 hover:text-pink-700 font-semibold flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to All Specialists
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Doctor Info Card -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-pink-100 sticky top-6">
                    <div class="relative">
                        @php
                            $profile = $doctor->doctorProfile;
                            $image = $profile->profile_image ? asset('storage/' . $profile->profile_image) : asset('images/physiotherapist_1.png');
                            $rating = $profile->rating ?? 4.5;
                        @endphp
                        <img src="{{ $image }}" alt="{{ $doctor->name }}" class="w-full h-80 object-cover">
                        <div class="z-10 absolute top-0 right-0 bg-white rounded-full px-4 py-2 text-sm font-semibold text-pink-600 shadow-lg">
                            ⭐ {{ number_format($rating, 1) }}/5
                        </div>
                    </div>
                    <div class="p-6">
                        <h1 class="text-2xl font-bold heading-font text-gray-900 mb-2">{{ $doctor->name }}</h1>
                        @if($profile->specializations && is_array($profile->specializations))
                            <p class="text-pink-600 font-semibold mb-4">{{ implode(', ', $profile->specializations) }}</p>
                        @endif
                        
                        <div class="space-y-3 mb-6">
                            @if($profile->years_of_experience)
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-5 h-5 text-pink-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>{{ $profile->years_of_experience }}+ years of experience</span>
                                </div>
                            @endif
                            
                            @if($profile->city)
                                <div class="flex items-center text-gray-700">
                                    <svg class="w-5 h-5 text-pink-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 12z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>{{ $profile->city }}</span>
                                </div>
                            @endif
                            
                            @if($profile->languages && is_array($profile->languages))
                                <div class="flex items-start text-gray-700">
                                    <svg class="w-5 h-5 text-pink-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                                    </svg>
                                    <span>{{ implode(', ', $profile->languages) }}</span>
                                </div>
                            @endif
                        </div>

                        <!-- Fees -->
                        @if($profile->clinic_visit_fee || $profile->home_visit_fee || $profile->video_session_fee)
                            <div class="border-t border-gray-200 pt-4 mb-6">
                                <h3 class="font-semibold text-gray-900 mb-3">Consultation Fees</h3>
                                <div class="space-y-2 text-sm">
                                    @if($profile->clinic_visit_fee)
                                        <div class="flex justify-between">
                                            <span class="text-gray-600">Clinic Visit:</span>
                                            <span class="font-semibold text-gray-900">₹{{ number_format($profile->clinic_visit_fee, 0) }}</span>
                                        </div>
                                    @endif
                                    @if($profile->home_visit_fee)
                                        <div class="flex justify-between">
                                            <span class="text-gray-600">Home Visit:</span>
                                            <span class="font-semibold text-gray-900">₹{{ number_format($profile->home_visit_fee, 0) }}</span>
                                        </div>
                                    @endif
                                    @if($profile->video_session_fee)
                                        <div class="flex justify-between">
                                            <span class="text-gray-600">Video Consultation:</span>
                                            <span class="font-semibold text-gray-900">₹{{ number_format($profile->video_session_fee, 0) }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <!-- CTA Buttons -->
                        <div class="space-y-3">
                            <a href="{{ route('book-appointment', ['doctor_id' => $doctor->id]) }}" class="block w-full bg-gradient-to-r from-pink-500 to-pink-600 text-white text-center px-6 py-3 rounded-lg hover:from-pink-600 hover:to-pink-700 transition-all font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                Book Appointment
                            </a>
                            @if($profile->clinic_address)
                                <a href="https://maps.google.com/?q={{ urlencode($profile->clinic_address) }}" target="_blank" class="block w-full bg-white text-pink-600 border-2 border-pink-600 text-center px-6 py-3 rounded-lg hover:bg-pink-50 transition-all font-semibold">
                                    View Location
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Details -->
            <div class="lg:col-span-2 space-y-6">
                <!-- About Section -->
                @if($profile->bio)
                    <div class="bg-white rounded-2xl shadow-lg p-8 border border-pink-100">
                        <h2 class="text-2xl font-bold heading-font text-gray-900 mb-4">About Dr. {{ $doctor->name }}</h2>
                        <div class="prose max-w-none text-gray-700">
                            {!! nl2br(e($profile->bio)) !!}
                        </div>
                    </div>
                @endif

                <!-- Specializations -->
                @if($profile->specializations && is_array($profile->specializations) && count($profile->specializations) > 0)
                    <div class="bg-white rounded-2xl shadow-lg p-8 border border-pink-100">
                        <h2 class="text-2xl font-bold heading-font text-gray-900 mb-4">Specializations</h2>
                        <div class="flex flex-wrap gap-3">
                            @foreach($profile->specializations as $spec)
                                <span class="bg-pink-50 text-pink-700 px-4 py-2 rounded-full text-sm font-semibold border border-pink-200">
                                    {{ $spec }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Clinic Information -->
                @if($profile->clinic_name || $profile->clinic_address)
                    <div class="bg-white rounded-2xl shadow-lg p-8 border border-pink-100">
                        <h2 class="text-2xl font-bold heading-font text-gray-900 mb-4">Clinic Information</h2>
                        <div class="space-y-3">
                            @if($profile->clinic_name)
                                <div>
                                    <span class="font-semibold text-gray-900">Clinic Name:</span>
                                    <span class="text-gray-700 ml-2">{{ $profile->clinic_name }}</span>
                                </div>
                            @endif
                            @if($profile->clinic_address)
                                <div>
                                    <span class="font-semibold text-gray-900">Address:</span>
                                    <p class="text-gray-700 mt-1">{{ $profile->clinic_address }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif

                <!-- Experience & Qualifications -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-pink-100">
                    <h2 class="text-2xl font-bold heading-font text-gray-900 mb-4">Experience & Qualifications</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-pink-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900">Years of Experience</h3>
                                <p class="text-gray-700">{{ $profile->years_of_experience ?? 0 }}+ years of dedicated practice in women's health physiotherapy</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-pink-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900">Verification Status</h3>
                                <p class="text-gray-700">Verified and approved by Pelvicare Health Care</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
