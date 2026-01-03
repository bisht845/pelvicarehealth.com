@extends('layouts.app')

@section('title', 'Treatments - Pelvicare Women\'s Health Physiotherapy')

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-br from-pink-50 via-blue-50 to-pink-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold heading-font text-gray-900 text-center mb-4">
                Our Treatment Methods
            </h1>
            <p class="text-xl text-gray-700 text-center max-w-3xl mx-auto">
                Evidence-based approaches to pelvic health and rehabilitation
            </p>
        </div>
    </section>

    <!-- Treatments Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                
                <!-- Manual Therapy -->
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold heading-font text-gray-900 mb-4">Manual Therapy</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Hands-on techniques including soft tissue mobilization, myofascial release, and joint mobilization to address muscle tension, scar tissue, and restrictions in the pelvic region.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <span class="text-pink-500 mr-2">•</span>
                                <span>Soft tissue mobilization</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-pink-500 mr-2">•</span>
                                <span>Myofascial release</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-pink-500 mr-2">•</span>
                                <span>Joint mobilization</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Pelvic Floor Exercises -->
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold heading-font text-gray-900 mb-4">Pelvic Floor Exercises</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Targeted exercises to strengthen, relax, or coordinate pelvic floor muscles. Includes Kegel exercises, biofeedback training, and progressive muscle training programs.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <span class="text-blue-500 mr-2">•</span>
                                <span>Kegel exercises</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-500 mr-2">•</span>
                                <span>Biofeedback training</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-500 mr-2">•</span>
                                <span>Progressive muscle training</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Biofeedback -->
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold heading-font text-gray-900 mb-4">Biofeedback</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Real-time monitoring of pelvic floor muscle activity using sensors to help you understand and improve muscle function through visual or auditory feedback.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <span class="text-purple-500 mr-2">•</span>
                                <span>Real-time muscle monitoring</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-500 mr-2">•</span>
                                <span>Visual feedback systems</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-500 mr-2">•</span>
                                <span>Muscle coordination training</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Education & Lifestyle -->
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold heading-font text-gray-900 mb-4">Education & Lifestyle</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Comprehensive education about pelvic anatomy, function, and healthy habits. Includes bladder training, bowel management, and ergonomic advice.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">•</span>
                                <span>Bladder training</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">•</span>
                                <span>Bowel management</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">•</span>
                                <span>Ergonomic advice</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Core Strengthening -->
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold heading-font text-gray-900 mb-4">Core Strengthening</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Exercises to strengthen the deep core muscles that support the pelvic floor, including transverse abdominis, multifidus, and diaphragm coordination.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Deep core activation</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Postural training</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Functional movement patterns</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Pain Management -->
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold heading-font text-gray-900 mb-4">Pain Management</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Techniques to reduce pelvic pain including relaxation exercises, breathing techniques, and pain neuroscience education to help manage chronic pain conditions.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <span class="text-indigo-500 mr-2">•</span>
                                <span>Relaxation techniques</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-indigo-500 mr-2">•</span>
                                <span>Breathing exercises</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-indigo-500 mr-2">•</span>
                                <span>Pain neuroscience education</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Treatment Process -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold heading-font text-gray-900 mb-4">
                    Our Treatment Process
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold">1</div>
                    <h3 class="font-semibold text-lg mb-2">Initial Assessment</h3>
                    <p class="text-gray-600 text-sm">Comprehensive evaluation of your condition and needs</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold">2</div>
                    <h3 class="font-semibold text-lg mb-2">Treatment Plan</h3>
                    <p class="text-gray-600 text-sm">Personalized plan tailored to your specific goals</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold">3</div>
                    <h3 class="font-semibold text-lg mb-2">Active Treatment</h3>
                    <p class="text-gray-600 text-sm">Regular sessions with hands-on therapy and exercises</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold">4</div>
                    <h3 class="font-semibold text-lg mb-2">Ongoing Support</h3>
                    <p class="text-gray-600 text-sm">Continued guidance and progress monitoring</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-pink-500 to-pink-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold heading-font text-white mb-6">
                Ready to Begin Treatment?
            </h2>
            <p class="text-xl text-pink-100 mb-8">
                Schedule a consultation to discuss which treatment approach is right for you.
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-pink-600 px-8 py-4 rounded-full font-semibold hover:bg-pink-50 transition-all shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                Book Consultation
            </a>
        </div>
    </section>
@endsection

