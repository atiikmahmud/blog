<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index()
    {
        $title = 'Home';
        $sliders = Post::with('categories')->where('slider', 1)->where('status', 1)->get();
        $latestPosts = Post::with('categories')->with('users')->where('status',1)->orderBy('id', 'desc')->latest()->take(4)->get();
        $featurePosts = Post::with('categories')->where('feature_news', 1)->where('status',1)->orderBy('id', 'desc')->latest()->take(5)->get();
        $all_posts = Post::with('categories')->where('status', 1)->orderBy('id', 'desc')->latest()->take(9)->get();
        $all_categories = Category::withCount('posts')->get();
        $trandingPosts = Post::with('categories')->where('tranding_news', 1)->where('status',1)->orderBy('id', 'desc')->latest()->take(5)->get();
        $singleCat = Category::with('last_post')->get();
        $breakingNews = Post::with('categories')->where('status',1)->where('breaking_news', 1)->orderBy('id', 'desc')->latest()->take(3)->get();
        $tags = Post::select('tag')->distinct()->where('status', 1)->take(7)->get();
        // dd($singleCat->toArray());

        return view('user-panel.index', compact('title','sliders','latestPosts','featurePosts','all_posts','all_categories','trandingPosts','singleCat','breakingNews','tags'));
    }
}
