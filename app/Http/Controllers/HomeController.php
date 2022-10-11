<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
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

    public function blog(Request $request)
    {
        $query = Post::query();
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
        
        $title = 'Posts';
        $posts = $query->with('users')->with('categories')->orderBy('created_at', 'desc')->paginate(10);
        $latestPost = Post::orderBy('id', 'desc')->latest()->take(5)->get();
        $category = Category::all();
        $tags = Post::select('tag')->distinct()->get();
        $queryData = $request->query();
        return view('blog', compact('title', 'posts', 'latestPost', 'category', 'tags', 'queryData'));
    }

    public function show($id)
    {
        $title = 'Posts';
        $post = Post::with('users')->where('id', $id)->first();
        $comments = Comment::with('users')->where('post_id', $id)->get();
        return view('single-post', compact('title', 'post', 'comments'));
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
