<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{    
    public function index()
    {
      $title = 'Dashboard';  
      return view('admin.dashboard', compact('title'));
    }

    public function profile()
    {
      $title = 'Profile';
      return view('admin.profile', compact('title'));
    }
}
