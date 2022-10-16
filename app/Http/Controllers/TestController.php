<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $sliders = Post::with('categories')->where('slider', 1)->where('status', 1)->get();
        $latestPosts = Post::with('categories')->where('status',1)->orderBy('id', 'desc')->latest()->take(4)->get();
        $breakingNews = Post::where('status',1)->where('breaking_news', 1)->orderBy('id', 'desc')->latest()->take(3)->get();

        // dd($breakingNews->toArray());
        
        return view('test.index', compact('sliders', 'latestPosts', 'breakingNews'));
    }
}
