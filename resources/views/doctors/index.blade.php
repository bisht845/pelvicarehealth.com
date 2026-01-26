@extends('layouts.app')

@section('title', 'Our Expert Physiotherapists - Pelvicare')

@section('meta_description', 'Browse our verified women\'s health physiotherapists. Find certified specialists for pelvic health, postpartum care, and sexual pain treatment.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-pink-50 via-white to-pink-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h1 class="text-4xl md:text-5xl font-bold heading-font text-gray-900 mb-4">
                Meet Our Expert Physiotherapists
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Certified specialists dedicated to women's pelvic health. All our physiotherapists are verified, experienced, and committed to providing compassionate care.
            </p>
        </div>
    </div>
</section>

<!-- Filters and Search Section -->
<section class="bg-white border-b border-gray-200 py-6 sticky top-0 z-10 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <form method="GET" action="{{ route('doctors.index') }}" class="flex flex-col md:flex-row gap-4">
            <!-- Search -->
            <div class="flex-1">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="text" name="search" value="{{ request('search') }}" 
                           placeholder="Search by name, specialization, or clinic..." 
                           class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                </div>
            </div>

            <!-- City Filter -->
            <div class="md:w-48">
                <select name="city" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                    <option value="">All Cities</option>
                    @foreach($cities as $city)
                        <option value="{{ $city }}" {{ request('city') == $city ? 'selected' : '' }}>{{ $city }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Specialization Filter -->
            <div class="md:w-56">
                <select name="specialization" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                    <option value="">All Specializations</option>
                    @foreach($allSpecializations as $spec)
                        <option value="{{ $spec }}" {{ request('specialization') == $spec ? 'selected' : '' }}>{{ $spec }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-pink-600 text-white px-6 py-2 rounded-lg hover:bg-pink-700 transition-colors font-semibold">
                Filter
            </button>

            @if(request()->has('search') || request()->has('city') || request()->has('specialization'))
                <a href="{{ route('doctors.index') }}" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300 transition-colors font-semibold">
                    Clear
                </a>
            @endif
        </form>
    </div>
</section>

<!-- Doctors Grid Section -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($doctors->count() > 0)
            <div class="mb-6 text-sm text-gray-600">
                Showing {{ $doctors->firstItem() }} - {{ $doctors->lastItem() }} of {{ $doctors->total() }} specialists
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($doctors as $doctor)
                    @php
                        $profile = $doctor->doctorProfile;
                        $specializations = is_array($profile->specializations) ? $profile->specializations : [];
                        $rating = $profile->rating ?? 4.5;
                        $city = $profile->city ?? 'Multiple Locations';
                        $image = $profile->profile_image ? asset('storage/' . $profile->profile_image) : asset('images/physiotherapist_' . (($loop->index % 3) + 1) . '.png');
                    @endphp
                    <div class="bg-gradient-to-br from-pink-50 to-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-2 border border-pink-100">
                        <div class="relative">
                            <img src="{{ $image }}" alt="{{ $doctor->name }}" class="w-full h-64 object-cover">
                            <div class="absolute top-3 right-3 bg-white rounded-full px-3 py-1 text-xs font-semibold text-pink-600 shadow-md">
                                ⭐ {{ number_format($rating, 1) }}/5
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold heading-font text-gray-900 mb-2">{{ $doctor->name }}</h3>
                            @if(!empty($specializations))
                                <div class="flex flex-wrap gap-1.5 mb-3">
                                    @foreach($specializations as $spec)
                                        <span class="bg-pink-100 text-pink-700 px-2.5 py-1 rounded-full text-xs font-semibold border border-pink-200">
                                            {{ $spec }}
                                        </span>
                                    @endforeach
                                </div>
                            @else
                                <p class="text-sm text-pink-600 font-semibold mb-3">Women's Health Specialist</p>
                            @endif
                            <p class="text-sm text-gray-600 mb-4 line-clamp-2">
                                {{ $profile->years_of_experience ?? 0 }}+ years experience
                                @if($profile->bio)
                                    • {{ Str::limit(strip_tags($profile->bio), 80) }}
                                @endif
                            </p>
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-xs text-gray-500 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 12z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    {{ $city }}
                                </span>
                            </div>
                            <div class="flex gap-2">
                                <a href="{{ route('doctors.show', $doctor->id) }}" class="flex-1 text-center bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700 transition-colors font-semibold text-sm">
                                    View Profile
                                </a>
                                <a href="{{ route('book-appointment', ['doctor_id' => $doctor->id]) }}" class="flex-1 text-center bg-white text-pink-600 border-2 border-pink-600 px-4 py-2 rounded-lg hover:bg-pink-50 transition-colors font-semibold text-sm">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $doctors->links() }}
            </div>
        @else
            <div class="text-center py-16">
                <svg class="w-24 h-24 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <h3 class="text-xl font-bold text-gray-900 mb-2">No doctors found</h3>
                <p class="text-gray-600 mb-6">Try adjusting your search or filters</p>
                <a href="{{ route('doctors.index') }}" class="inline-block bg-pink-600 text-white px-6 py-3 rounded-lg hover:bg-pink-700 transition-colors font-semibold">
                    View All Doctors
                </a>
            </div>
        @endif
    </div>
</section>
@endsection
