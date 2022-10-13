<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
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
      $posts = Post::with('categories')->with('users')->get();
      return view('admin.posts', compact('title', 'posts'));
    }

    public function approvalPost()
    {
      $title = 'Posts';
      $posts = Post::where('status',0)->with('categories')->with('users')->get();
      return view('admin.approval-posts', compact('title', 'posts'));
    }

    public function showPost($id)
    {
        $title = 'Posts';
        $post = Post::where('id', $id)->first();
        $comments = Comment::with('users')->with('reply')->where('post_id', $id)->get();
        return view('admin.single-post', compact('title', 'post', 'comments'));
    }

    public function postApproval($id)
    {
      $post = Post::find($id);
      if($post->status == 0)
      {
        $post->status = 1;
        $post->save();      
        return redirect()->back()->with('success', 'Post approved!');
      }
      else
      {
        $post->status = 0;
        $post->save();      
        return redirect()->back()->with('fail', 'Post pending!'); 
      }
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
