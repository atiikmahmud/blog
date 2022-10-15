<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{    
    public function profile()
    {
        $title = 'Profile';
        return view('users.profile', compact('title'));
    }
}
