<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view('home', compact('title'));
    }

    public function blog()
    {
        $title = 'Posts';
        return view('blog', compact('title'));
    }

    public function aboutUs()
    {
        $title = 'About Us';
        return view('about-us', compact('title'));
    }

    public function contacts()
    {
        $title = 'Contacts';
        return view('contacts', compact('title'));
    }

    public function register()
    {
        $title = 'Register';
        return view('register', compact('title'));
    }

    public function login()
    {
        $title = 'Login';
        return view('login', compact('title'));
    }
}
