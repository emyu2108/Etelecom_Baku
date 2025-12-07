<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Phone;

class FrontController extends Controller
{
    // Главная страница
    public function index()
    {
        $categories = Category::where('is_active', true)->get();

        $phones = Phone::where('is_active', true)
            ->orderBy('id', 'desc')
            ->limit(8)
            ->get();

        return view('front.index', compact('categories', 'phones'));
    }

    // Страница товара
    public function show($slug)
    {
        $phone = Phone::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('front.product', compact('phone'));
    }

    // Страница категории
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $phones = Phone::where('category_id', $category->id)
            ->where('is_active', true)
            ->orderBy('id', 'desc')
            ->paginate(12);

        return view('front.category', compact('category', 'phones'));
    }

    public function products()
    {
        $products = \App\Models\Phone::where('is_active', true)
            ->orderBy('id', 'desc')
            ->paginate(12); // 12 товаров на страницу

        return view('front.products', compact('products'));
    }


}
