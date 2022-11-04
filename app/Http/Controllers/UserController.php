<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{    
    public function profile()
    {
        $title = 'Profile';
        $category = Category::withCount('posts')->get();
        return view('users.profile', compact('title','category'));
    }
}
