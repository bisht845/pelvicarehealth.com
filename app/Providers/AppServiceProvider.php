<?php

namespace App\Providers;

use App\Models\ServiceCategory;
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
        // Share categories for navbar search (doctors filter)
        View::composer('layouts.app', function ($view) {
            $navCategories = ServiceCategory::active()->ordered()->get();
            $view->with('navCategories', $navCategories);
        });
    }
}
