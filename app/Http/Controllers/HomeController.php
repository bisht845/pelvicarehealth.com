<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        return view('home', compact('featuredDoctors'));
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
}

