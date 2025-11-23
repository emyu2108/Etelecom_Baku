<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function home() {
        return view('home');
    }
    public function about() {
        return view('about');
    }
// fdgfdfd
    public function review() {
        return view('review');
    }

    // тест для гита
    public function review_check(Request $request)
    {
        $request->validate([
            'email' => 'required|email|min:4|max:100',
            'subject' => 'required|min:3|max:200',
            'message' => 'required|min:10|max:500',
        ]);

        Contact::create([
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Отзыв отправлен!');
    }
}
