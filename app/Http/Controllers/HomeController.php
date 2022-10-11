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
        }
        
        $title = 'Posts';
        $posts = $query->with('users')->orderBy('created_at', 'desc')->paginate(10);
        $latestPost = Post::orderBy('id', 'desc')->latest()->take(5)->get();
        $tags = Post::select('tag')->distinct()->get();
        $queryData = $request->query();
        return view('blog', compact('title', 'posts', 'latestPost', 'tags', 'queryData'));
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
