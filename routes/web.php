<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PhysiotherapistController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/treatments', [HomeController::class, 'treatments'])->name('treatments');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Appointment Booking Routes
Route::get('/book-appointment', [AppointmentController::class, 'showBookingForm'])->name('book-appointment');
Route::post('/book-appointment', [AppointmentController::class, 'store'])->name('appointment.store');

// Physiotherapist Registration Routes (Legacy - redirect to new flow)
Route::get('/register-physiotherapist', function() {
    return redirect()->route('doctor.registration.step1');
})->name('register-physiotherapist');

// Doctor Registration Routes (Multi-step)
Route::prefix('doctor/register')->name('doctor.registration.')->group(function () {
    // Step 1 - Only accessible by guests (new registrations)
    Route::middleware('guest')->group(function () {
        Route::get('/step1', [App\Http\Controllers\Doctor\RegistrationController::class, 'step1'])->name('step1');
        Route::post('/step1', [App\Http\Controllers\Doctor\RegistrationController::class, 'storeStep1'])->name('store.step1');
    });
    
    // Steps 2-4 and Complete - Require authentication
    Route::middleware('auth')->group(function () {
        Route::get('/step2', [App\Http\Controllers\Doctor\RegistrationController::class, 'step2'])->name('step2');
        Route::post('/step2', [App\Http\Controllers\Doctor\RegistrationController::class, 'storeStep2'])->name('store.step2');
        Route::get('/step3', [App\Http\Controllers\Doctor\RegistrationController::class, 'step3'])->name('step3');
        Route::post('/step3', [App\Http\Controllers\Doctor\RegistrationController::class, 'storeStep3'])->name('store.step3');
        Route::get('/step4', [App\Http\Controllers\Doctor\RegistrationController::class, 'step4'])->name('step4');
        Route::post('/step4', [App\Http\Controllers\Doctor\RegistrationController::class, 'storeStep4'])->name('store.step4');
        Route::get('/complete', [App\Http\Controllers\Doctor\RegistrationController::class, 'complete'])->name('complete');
    });
});

// Authentication Routes - Only accessible by guests
Route::middleware('guest')->group(function () {
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
});

// Logout - Requires authentication
Route::middleware('auth')->group(function () {
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});
