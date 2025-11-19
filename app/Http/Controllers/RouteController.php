<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function review() {
        return view('review');
    }

    public function review_check(request $request) {
        $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required',
            'message' => 'required|min:10|max:500',
        ]);
    }
}
