<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $sliders = Post::with('categories')->where('slider', 1)->where('status', 1)->get();
        // dd($sliders->toArray());
        $latestPosts = Post::with('categories')->with('users')->where('status',1)->orderBy('id', 'desc')->latest()->take(4)->get();
        $breakingNews = Post::where('status',1)->where('breaking_news', 1)->orderBy('id', 'desc')->latest()->take(3)->get();
        $featurePosts = Post::with('categories')->where('feature_news', 1)->where('status',1)->orderBy('id', 'desc')->latest()->take(5)->get();
        $all_posts = Post::with('categories')->where('status', 1)->orderBy('id', 'desc')->latest()->take(14)->get();

        $trandingPosts = Post::with('categories')->where('tranding_news', 1)->where('status',1)->orderBy('id', 'desc')->latest()->take(5)->get();

        $tags = Post::select('tag')->distinct()->where('status', 1)->get();
        
        return view('test.index', compact('sliders', 'latestPosts', 'breakingNews', 'featurePosts', 'all_posts', 'tags', 'trandingPosts'));


    }
}
