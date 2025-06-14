<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('welcome', [
            'isAuth' => auth()->check(),
            'user' => auth()->user()
        ]);
    }

    public function menu()
    {
        return view('menu');
    }

    public function about()
    {
        return view('about');
    }

    public function cart()
    {
        return view('cart');
    }
    public function cart_empty()
    {
        return view('cart_empty');
    }

    public function profile()
    {
        return view('profile');
    }

    public function reviews()
    {
        return view('reviews');
    }

    public function contacts()
    {
        return view('contacts');
    }
    public function adminPanel()
    {
        return view('adminPanel');
    }
}
