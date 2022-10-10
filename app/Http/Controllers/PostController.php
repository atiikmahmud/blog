<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost()
    {
        $title = 'Add-Post';
        return view('posts.add-post', compact('title'));
    }

    public function store(Request $request)
    {
        //
    }

    public function userPost()
    {
        $title = 'Posts';
        return view('posts.all-posts', compact('title'));
    }
}
