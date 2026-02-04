@extends('layouts.app')

@section('title', 'Our Expert Physiotherapists - Pelvicare')
@section('meta_description', 'Browse our verified women\'s health physiotherapists. Find certified specialists for pelvic health, postpartum care, and sexual pain treatment.')

@section('content')
{{-- Hero: calm, authoritative --}}
<section class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="max-w-2xl">
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold heading-font text-gray-900 tracking-tight leading-tight mb-3">
                Find a specialist
            </h1>
            <p class="text-base text-gray-600 leading-relaxed">
                Verified women's health physiotherapists. Book a consultation or explore profiles to find the right fit for you.
            </p>
        </div>
    </div>
</section>

{{-- Filters: clean bar, single row on desktop --}}
<section class="sticky top-0 z-20 bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <form method="GET" action="{{ route('doctors.index') }}" class="flex flex-col lg:flex-row lg:items-end gap-4">
            <div class="flex-1 min-w-0">
                <label for="search" class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1.5">Search</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </span>
                    <input type="text" name="search" id="search" value="{{ request('search') }}"
                           placeholder="Name, specialization or clinic"
                           class="block w-full pl-10 pr-4 py-2.5 text-gray-900 placeholder-gray-400 border border-gray-300 rounded-lg focus:ring-2 focus:ring-offset-0 focus:ring-pink-500 focus:border-pink-500 bg-white">
                </div>
            </div>
            <div class="grid grid-cols-2 lg:flex lg:flex-nowrap gap-4">
                <div class="lg:w-44">
                    <label for="city" class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1.5">City</label>
                    <select name="city" id="city" class="block w-full px-4 py-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-2 focus:ring-offset-0 focus:ring-pink-500 focus:border-pink-500 bg-white">
                        <option value="">All cities</option>
                        @foreach($cities as $city)
                            <option value="{{ $city }}" {{ request('city') == $city ? 'selected' : '' }}>{{ $city }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="lg:w-52">
                    <label for="specialization" class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1.5">Specialization</label>
                    <select name="specialization" id="specialization" class="block w-full px-4 py-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-2 focus:ring-offset-0 focus:ring-pink-500 focus:border-pink-500 bg-white">
                        <option value="">All specializations</option>
                        @foreach($allSpecializations as $spec)
                            <option value="{{ $spec }}" {{ request('specialization') == $spec ? 'selected' : '' }}>{{ $spec }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-2 lg:col-span-1 flex gap-2 lg:flex-shrink-0">
                    <button type="submit" class="flex-1 lg:flex-none px-5 py-2.5 bg-gray-900 text-white text-sm font-medium rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors">
                        Apply filters
                    </button>
                    @if(request()->has('search') || request()->has('city') || request()->has('specialization'))
                        <a href="{{ route('doctors.index') }}" class="flex-1 lg:flex-none px-5 py-2.5 text-gray-600 text-sm font-medium rounded-lg border border-gray-300 bg-white hover:bg-gray-50 text-center transition-colors">
                            Clear
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</section>

{{-- Results --}}
<section class="bg-gray-50 min-h-[50vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-10">
        @if($doctors->count() > 0)
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 mb-6">
                <p class="text-sm text-gray-500">
                    <span class="font-medium text-gray-700">{{ $doctors->total() }}</span> specialist{{ $doctors->total() === 1 ? '' : 's' }}
                    @if(request()->has('search') || request()->has('city') || request()->has('specialization'))
                        <span class="text-gray-400">(filtered)</span>
                    @endif
                </p>
                @if($doctors->total() > $doctors->count())
                    <p class="text-sm text-gray-500">
                        Showing {{ $doctors->firstItem() }}–{{ $doctors->lastItem() }}
                    </p>
                @endif
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">
                @foreach($doctors as $doctor)
                    @php
                        $profile = $doctor->doctorProfile;
                        $specializations = is_array($profile->specializations) ? $profile->specializations : [];
                        $rating = $profile->rating ?? null;
                        $hasMeaningfulRating = $rating !== null && (float)$rating > 0;
                        $city = $profile->city ?? null;
                        $years = (int)($profile->years_of_experience ?? 0);
                        $image = $profile->profile_image ? asset('storage/' . $profile->profile_image) : asset('images/physiotherapist_' . (($loop->index % 3) + 1) . '.png');
                    @endphp
                    <article class="bg-white rounded-lg border border-gray-200 overflow-hidden flex flex-col h-full hover:border-gray-300 hover:shadow-md transition-all duration-200">
                        <a href="{{ route('doctors.show', $profile->slug) }}" class="block focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-inset rounded-t-lg">
                            <div class="relative aspect-[4/3] bg-gray-100">
                                <img src="{{ $image }}" alt="{{ $doctor->name }}" class="w-full h-full object-cover object-top">
                                @if($hasMeaningfulRating)
                                    <div class="absolute top-3 right-3 flex items-center gap-1 bg-white rounded-md px-2 py-1 text-xs font-medium text-gray-700 shadow-sm border border-gray-100">
                                        <svg class="w-4 h-4 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        {{ number_format((float)$rating, 1) }}
                                    </div>
                                @endif
                            </div>
                        </a>
                        <div class="p-5 flex flex-col flex-1">
                            <div class="flex items-start justify-between gap-2 mb-1">
                                <h2 class="text-base font-semibold text-gray-900 leading-snug">
                                    <a href="{{ route('doctors.show', $profile->slug) }}" class="hover:text-pink-600 transition-colors">{{ $doctor->name }}</a>
                                </h2>
                                <span class="shrink-0 text-[10px] font-medium text-gray-500 uppercase tracking-wider" title="Verified by Pelvicare">Verified</span>
                            </div>
                            <p class="text-sm text-gray-500 mb-3">Women's health physiotherapist</p>

                            @if(!empty($specializations))
                                <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                                    {{ implode(', ', array_slice($specializations, 0, 3)) }}{{ count($specializations) > 3 ? '…' : '' }}
                                </p>
                            @endif

                            <ul class="space-y-1.5 mb-4 text-sm text-gray-500">
                                <li>{{ $years }}+ years experience</li>
                                @if($city)
                                    <li class="flex items-center gap-1.5">
                                        <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 12z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        {{ $city }}
                                    </li>
                                @endif
                            </ul>

                            <div class="mt-auto pt-4 border-t border-gray-100 space-y-2">
                                <a href="{{ route('doctors.show', $profile->slug) }}" class="block w-full text-center py-3 px-4 bg-gray-900 text-white text-sm font-medium rounded-lg hover:bg-gray-800 transition-colors">
                                    View profile
                                </a>
                                <a href="{{ route('book-appointment', ['doctor_id' => $doctor->id]) }}" class="block w-full text-center py-3 px-4 text-gray-700 text-sm font-medium rounded-lg border border-gray-300 bg-white hover:bg-gray-50 transition-colors">
                                    Book appointment
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            @if($doctors->hasPages())
                <div class="mt-10 pt-6 border-t border-gray-200">
                    {{ $doctors->links() }}
                </div>
            @endif
        @else
            <div class="text-center py-16 px-4">
                <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <h2 class="text-lg font-semibold text-gray-900 mb-2">No specialists match your filters</h2>
                <p class="text-sm text-gray-600 max-w-sm mx-auto mb-6">Try changing your search or filter criteria, or clear filters to see all specialists.</p>
                <a href="{{ route('doctors.index') }}" class="inline-flex items-center justify-center px-5 py-2.5 bg-gray-900 text-white text-sm font-medium rounded-lg hover:bg-gray-800 transition-colors">
                    View all specialists
                </a>
            </div>
        @endif
    </div>
</section>
@endsection
