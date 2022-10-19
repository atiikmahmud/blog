<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index()
    {
        $title = 'Home';
        $sliders = Post::with('categories')->where('slider', 1)->where('status', 1)->get();
        $latestPosts = Post::with('categories')->with('users')->where('status',1)->orderBy('id', 'desc')->latest()->take(4)->get();
        // dd($sliders->toArray());
        return view('user-panel.index', compact('title','sliders','latestPosts'));
    }
}
