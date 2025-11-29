<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Phone;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_active', true)->get();

        $phones = Phone::where('is_active', true)
            ->orderBy('id', 'desc')
            ->limit(8)
            ->get();

        return view('front.index', compact('categories', 'phones'));
    }

    public function show($slug)
    {
        $phone = Phone::with('category')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('front.show', compact('phone'));
    }
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $phones = Phone::where('category_id', $category->id)
            ->where('is_active', true)
            ->orderBy('id', 'desc')
            ->get();

        return view('front.category', compact('category', 'phones'));
    }
}
