<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $posts = Post::with('users')->get();
        return view('blog', compact('title', 'posts'));
    }

    public function show($id)
    {
        $title = 'Posts';
        $post = Post::where('id', $id)->first();
        return view('single-post', compact('title', 'post'));
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
        if (Auth::user()){
            $title = 'Home';
            return view('home', compact('title'));
        }else{
            $title = 'Register';
            return view('register', compact('title'));
        }
    }

    public function login()
    {
        if (Auth::user()){
            $title = 'Home';
            return view('home', compact('title'));
        }else{
            $title = 'Login';
            return view('login', compact('title'));
        }
    }
}
