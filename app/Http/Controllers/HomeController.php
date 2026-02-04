<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch only featured/premium verified doctors (limit to 10 for home page swiper)
        $featuredDoctors = User::where('role', 'admin')
            ->whereHas('doctorProfile', function($q) {
                $q->where('verification_status', 'approved')
                  ->where('profile_completed', true)
                  ->where('is_featured', true);
            })
            ->with('doctorProfile')
            ->inRandomOrder()
            ->limit(10)
            ->get();

        // Service categories for dynamic "Search Your Symptoms" / services section (limit 6 for home)
        $serviceCategories = ServiceCategory::active()
            ->with(['activeSubcategories'])
            ->ordered()
            ->limit(6)
            ->get();

        return view('home', compact('featuredDoctors', 'serviceCategories'));
    }
    
    public function services()
    {
        return view('services');
    }
    
    public function treatments()
    {
        return view('treatments');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function contact()
    {
        return view('contact');
    }

    public function faq()
    {
        return view('faq');
    }
}

