<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use App\Models\ServiceSubcategory;

class ServiceController extends Controller
{
    public function index()
    {
        $categories = ServiceCategory::active()
            ->with(['activeSubcategories'])
            ->ordered()
            ->get();

        return view('services', compact('categories'));
    }

    public function show(string $slug)
    {
        $category = ServiceCategory::where('slug', $slug)
            ->active()
            ->with(['activeSubcategories'])
            ->firstOrFail();

        return view('service-show', compact('category'));
    }

    public function showSubservice(string $categorySlug, string $subcategorySlug)
    {
        $category = ServiceCategory::where('slug', $categorySlug)->active()->firstOrFail();

        $subcategory = ServiceSubcategory::where('service_category_id', $category->id)
            ->where('slug', $subcategorySlug)
            ->active()
            ->firstOrFail();

        return view('subservice-show', compact('category', 'subcategory'));
    }
}
