<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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

    public function posts()
    {
      $title = 'Posts';
      return view('admin.posts', compact('title'));
    }

    public function addPost()
    {
      $title = 'Add Post';
      return view('admin.add-post', compact('title'));
    }

    public function comments()
    {
      $title = 'Comments';
      return view('admin.comments', compact('title'));
    }

    public function users()
    {
      $title = 'Users';
      return view('admin.users', compact('title'));
    }

    public function addUser()
    {
      $title = 'Add User';
      return view('admin.add-user', compact('title'));
    }

    public function adminUsers()
    {
      $title = 'Admin Users';
      return view('admin.admin-users', compact('title'));
    }

    public function addAdminUser()
    {
      $title = 'Add Admin User';
      return view('admin.add-admin-user', compact('title'));
    }
}
