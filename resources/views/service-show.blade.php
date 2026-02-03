@extends('layouts.app')

@section('title', $category->meta_title ?? ($category->name . ' - Pelvicare Women\'s Health Physiotherapy'))
@section('meta_description', $category->meta_description ?? Str::limit(strip_tags($category->short_description ?? ''), 160))
@if($category->meta_keywords)
@section('meta_keywords', $category->meta_keywords)
@endif

@section('content')
    <!-- Breadcrumb -->
    <section class="bg-gray-50 border-b border-gray-100 py-3">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-sm text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-pink-600 transition">Home</a>
                <span>/</span>
                <a href="{{ route('services') }}" class="hover:text-pink-600 transition">Services</a>
                <span>/</span>
                <span class="text-gray-900 font-medium">{{ $category->name }}</span>
            </nav>
        </div>
    </section>

    <!-- Hero -->
    <section class="bg-gradient-to-br from-pink-50 via-white to-pink-100 py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:items-center gap-8 lg:gap-12">
                <div class="lg:w-1/2">
                    @if($category->image)
                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="w-full rounded-2xl shadow-xl object-cover max-h-96">
                    @else
                    <img src="{{ asset('images/pelvic_pain_service.png') }}" alt="{{ $category->name }}" class="w-full rounded-2xl shadow-xl object-cover max-h-96">
                    @endif
                </div>
                <div class="lg:w-1/2">
                    <h1 class="text-4xl md:text-5xl font-bold heading-font text-gray-900 mb-4">{{ $category->name }}</h1>
                    @if($category->short_description)
                    <div class="text-xl text-gray-700 mb-6 prose prose-lg max-w-none prose-p:mb-2 prose-headings:font-heading prose-a:text-pink-600 prose-a:no-underline hover:prose-a:underline">
                        {!! $category->short_description !!}
                    </div>
                    @endif
                    <a href="{{ route('book-appointment') }}" class="inline-flex items-center px-6 py-3 bg-pink-600 text-white font-semibold rounded-full hover:bg-pink-700 transition shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        Book Appointment
                    </a>
                </div>
            </div>
        </div>
    </section>

    @if($category->description)
    <!-- Full description (rich text) -->
    <section class="py-12 bg-white border-t border-gray-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg prose-pink max-w-none prose-headings:font-heading prose-headings:text-gray-900 prose-p:text-gray-700 prose-a:text-pink-600 prose-a:no-underline hover:prose-a:underline prose-img:rounded-xl">
                {!! $category->description !!}
            </div>
        </div>
    </section>
    @endif

    <!-- Treatments / Subcategories -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold heading-font text-gray-900 mb-8">Treatments & Conditions</h2>
            @if($category->activeSubcategories->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($category->activeSubcategories as $sub)
                <a href="{{ route('services.subservice', [$category->slug, $sub->slug]) }}" class="group block bg-white rounded-2xl border border-pink-100 p-6 hover:shadow-xl hover:border-pink-200 transition-all duration-300">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-pink-100 flex items-center justify-center text-pink-600 group-hover:bg-pink-500 group-hover:text-white transition-colors mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 group-hover:text-pink-600 transition-colors">{{ $sub->name }}</h3>
                            @if($sub->description)
                            <p class="mt-2 text-gray-600 text-sm line-clamp-2">{{ Str::limit(strip_tags($sub->description), 100) }}</p>
                            @endif
                            <span class="inline-flex items-center mt-3 text-pink-600 font-medium text-sm group-hover:underline">
                                Learn more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            @else
            <p class="text-gray-600">No treatments listed for this category yet. <a href="{{ route('contact') }}" class="text-pink-600 hover:underline">Contact us</a> for more information.</p>
            @endif
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-pink-500 to-pink-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold heading-font text-white mb-6">Ready to Take the Next Step?</h2>
            <p class="text-xl text-pink-100 mb-8">Schedule a consultation to discuss your specific needs.</p>
            <a href="{{ route('book-appointment') }}" class="inline-block bg-white text-pink-600 px-8 py-4 rounded-full font-semibold hover:bg-pink-50 transition-all shadow-xl">Book Appointment</a>
        </div>
    </section>
@endsection
