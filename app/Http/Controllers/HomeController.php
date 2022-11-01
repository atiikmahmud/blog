<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Home';
        $query = Post::query()->where('status', 1);
        if(count($request->all()) > 0)
        {
            if(!empty($request->search))
            {
                $query->where('title','like','%'.$request->search.'%')->orWhere('tag','like','%'.$request->search.'%');
            }
            elseif(!empty($request->tag))
            {
                $query->where('tag', $request->tag);
            }
            elseif(!empty($request->category_id))
            {
                $query->where('category_id', $request->category_id);
            }
        }
        
        $posts = $query->where('status', 1)->with('users')->with('categories')->orderBy('created_at', 'desc')->paginate(6);
        $sliders = Post::with('categories')->where('slider', 1)->where('status', 1)->take(3)->get();
        $featurePosts = Post::with('categories')->where('feature_news', 1)->where('status',1)->orderBy('id', 'desc')->latest()->take(4)->get();
        $trandingPosts = Post::with('categories')->where('tranding_news', 1)->where('status',1)->orderBy('id', 'desc')->latest()->take(5)->get();
        $breakingNews = Post::where('breaking_news', 1)->where('status',1)->orderBy('id', 'desc')->latest()->take(3)->get();
        $category = Category::withCount('posts')->get();
        $tags = Post::select('tag')->distinct()->where('status', 1)->take(15)->get();
        $queryData = $request->query();
        return view('home', compact('title', 'posts', 'trandingPosts', 'category', 'tags', 'queryData','sliders','featurePosts','breakingNews'));
    }

    public function show($id)
    {
        $title = 'Posts';
        $category = Category::withCount('posts')->get();
        $post = Post::with('users')->where('id', $id)->first();
        $comments = Comment::with('users', 'replies', 'replies.users')->where('post_id', $id)->where('parent_id', null)->get();
        return view('single-post', compact('title', 'post', 'category', 'comments'));
    }

    public function aboutUs()
    {
        $title = 'About Us';
        $category = Category::withCount('posts')->get();
        return view('about-us', compact('title','category'));
    }

    public function contacts()
    {
        $title = 'Contacts';
        $category = Category::withCount('posts')->get();
        return view('contacts', compact('title','category'));
    }

    public function register()
    {
        if (Auth::user()){
            $title = 'Home';
            $category = Category::withCount('posts')->get();
            return view('home', compact('title','category'));
        }else{
            $title = 'Register';
            $category = Category::withCount('posts')->get();
            return view('register', compact('title','category'));
        }
    }

    public function login()
    {
        if (Auth::user()){
            $title = 'Home';
            $category = Category::withCount('posts')->get();
            return view('home', compact('title','category'));
        }else{
            $title = 'Login';
            $category = Category::withCount('posts')->get();
            return view('login', compact('title','category'));
        }
    }
}
