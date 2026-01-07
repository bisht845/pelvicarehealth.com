@extends('layouts.app')

@section('title', 'Services - Pelvicare Women\'s Health Physiotherapy')

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-br from-pink-50 via-white to-pink-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold heading-font text-gray-900 text-center mb-4">
                Our Services
            </h1>
            <p class="text-xl text-gray-700 text-center max-w-3xl mx-auto">
                Comprehensive pelvic health solutions for women at every stage of life
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Pelvic Pain -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2 border border-pink-100 overflow-hidden group">
                    <div class="h-48 overflow-hidden relative">
                        <div class="absolute inset-0 bg-pink-900/10 group-hover:bg-pink-900/0 transition-colors z-10"></div>
                        <img src="{{ asset('images/pelvic_pain_service.png') }}" alt="Pelvic Pain Relief" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold heading-font text-gray-900 mb-4 group-hover:text-pink-600 transition-colors">Pelvic Pain</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-pink-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Chronic pelvic pain management</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-pink-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Endometriosis support</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-pink-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Vulvodynia treatment</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-pink-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Dyspareunia care</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Incontinence (Blue -> Rose) -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2 border border-pink-100 overflow-hidden group">
                    <div class="h-48 overflow-hidden relative">
                        <div class="absolute inset-0 bg-rose-900/10 group-hover:bg-rose-900/0 transition-colors z-10"></div>
                        <img src="{{ asset('images/incontinence_service.png') }}" alt="Incontinence Care" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold heading-font text-gray-900 mb-4 group-hover:text-rose-500 transition-colors">Incontinence</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-rose-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Stress incontinence</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-rose-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Urge incontinence</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-rose-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Mixed incontinence</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-rose-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Fecal incontinence</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Pregnancy & Postpartum (Purple -> Lavender/Fuchsia) -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2 border border-pink-100 overflow-hidden group">
                    <div class="h-48 overflow-hidden relative">
                        <div class="absolute inset-0 bg-fuchsia-900/10 group-hover:bg-fuchsia-900/0 transition-colors z-10"></div>
                        <img src="{{ asset('images/pregnancy_service.png') }}" alt="Pregnancy & Postpartum" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold heading-font text-gray-900 mb-4 group-hover:text-fuchsia-500 transition-colors">Pregnancy & Postpartum</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-fuchsia-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Prenatal physiotherapy</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-fuchsia-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Postpartum recovery</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-fuchsia-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Diastasis recti treatment</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-fuchsia-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Pelvic floor rehabilitation</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Prolapse (Green -> Teal/Mint) -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2 border border-pink-100 overflow-hidden group">
                    <div class="h-48 overflow-hidden relative">
                        <div class="absolute inset-0 bg-teal-900/10 group-hover:bg-teal-900/0 transition-colors z-10"></div>
                        <img src="{{ asset('images/wellness_service.png') }}" alt="Prolapse Care" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold heading-font text-gray-900 mb-4 group-hover:text-teal-600 transition-colors">Prolapse</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-teal-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Pelvic organ prolapse</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-teal-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Conservative management</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-teal-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Pessary fitting & care</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Sexual Health (Orange -> Peach/Coral) -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2 border border-pink-100 overflow-hidden group">
                    <div class="h-48 overflow-hidden relative">
                        <div class="absolute inset-0 bg-rose-900/10 group-hover:bg-rose-900/0 transition-colors z-10"></div>
                        <img src="{{ asset('images/wellness_service.png') }}" alt="Sexual Health" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold heading-font text-gray-900 mb-4 group-hover:text-rose-400 transition-colors">Sexual Health</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-rose-300 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Dyspareunia treatment</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-rose-300 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Vaginismus therapy</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-rose-300 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Sexual function improvement</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Menopause Support (Indigo -> Violet/Purple) -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2 border border-pink-100 overflow-hidden group">
                    <div class="h-48 overflow-hidden relative">
                        <div class="absolute inset-0 bg-purple-900/10 group-hover:bg-purple-900/0 transition-colors z-10"></div>
                        <img src="{{ asset('images/wellness_service.png') }}" alt="Menopause Support" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold heading-font text-gray-900 mb-4 group-hover:text-purple-500 transition-colors">Menopause Support</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Hormonal changes support</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Pelvic floor strengthening</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Bone health management</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-pink-500 to-pink-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold heading-font text-white mb-6">
                Ready to Take the Next Step?
            </h2>
            <p class="text-xl text-pink-100 mb-8">
                Contact us today to schedule a consultation and discuss your specific needs.
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-pink-600 px-8 py-4 rounded-full font-semibold hover:bg-pink-50 transition-all shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                Schedule Consultation
            </a>
        </div>
    </section>
@endsection

