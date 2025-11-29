<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhoneRequest;
use App\Http\Requests\UpdatePhoneRequest;
use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\Category;
use Illuminate\Support\Str;


class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones = Phone::with('category')
            ->orderBy('id', 'desc')
            ->get();

        return view('phones.index', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('title')->get();

        return view('phones.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhoneRequest $request)
    {
        $validated = $request->validated();

        $validated['is_active'] = $request->boolean('is_active');
        $validated['slug'] = Str::slug($validated['title']);

        // обработка изображения, если грузишь файл
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('phones', 'public');
            $validated['image'] = $path;
        }

        Phone::create($validated);

        return redirect()->route('phones.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $phone = Phone::findOrFail($id);
        $categories = Category::orderBy('title')->get();

        return view('phones.edit', compact('phone', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhoneRequest $request)
    {
        $validated = $request->validated();

        $validated['is_active'] = $request->boolean('is_active');
        $validated['slug'] = Str::slug($validated['title']);

        // обработка изображения, если грузишь файл
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('phones', 'public');
            $validated['image'] = $path;
        }

        Phone::create($validated);

        return redirect()->route('phones.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Phone::destroy($id);
        return redirect()->route('phones.index');
    }
}
