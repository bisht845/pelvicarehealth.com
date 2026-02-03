<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share specializations for navbar search (doctors filter)
        View::composer('layouts.app', function ($view) {
            $allSpecializations = User::where('role', 'admin')
                ->whereHas('doctorProfile', function ($q) {
                    $q->where('verification_status', 'approved')
                      ->where('profile_completed', true)
                      ->whereNotNull('specializations');
                })
                ->with('doctorProfile')
                ->get()
                ->pluck('doctorProfile.specializations')
                ->flatten()
                ->filter()
                ->unique()
                ->sort()
                ->values();
            $view->with('navSpecializations', $allSpecializations);
        });
    }
}
