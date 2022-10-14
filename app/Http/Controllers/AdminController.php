<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{    
    public function index()
    {
      $title = 'Dashboard';
      $users = User::where('status', 1)->count();
      $posts = Post::where('status',1)->count();
      $approvalPost = Post::where('status', 0)->count();
      $unreadMessage = Contact::where('status', 1)->count(); 
      return view('admin.dashboard', compact('title', 'users', 'posts', 'approvalPost', 'unreadMessage'));
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
      $categories = Category::all();
      return view('admin.add-post', compact('title', 'categories'));
    }

    public function addNewPost(Request $request)
    {
      $request->validate([
          'title'    => 'required',
          'body'   => 'required',
          'tag' => 'required'
      ]);

      try{
          $post = new Post;
          $post->title   = $request->title;
          $post->body    = $request->body;
          $post->tag     = $request->tag;
          $post->user_id = Auth()->user()->id;
          $post->category_id = $request->category;
          $post->save();

          return redirect()->back()->with('success', 'Post created successfully !!');
      }
      catch(\Exception $e){
          Log::error($e->getMessage());
          return redirect()->back()->with('error', 'Post not created !!');
      }
    }

    public function editPost($id)
    {
      $title = 'Edit Post';
      $post = Post::where('id', $id)->first();
      $categories = Category::all();
      return view('admin.edit-post', compact('title', 'post', 'categories'));
    }

    public function updatePost(Request $request)
    {
      $request->validate([
        'title'    => 'required',
        'body'   => 'required',
        'tag' => 'required'
      ]);

      try{
          $post = Post::find($request->id);
          $post->title   = $request->title;
          $post->body    = $request->body;
          $post->tag     = $request->tag;
          $post->user_id = Auth()->user()->id;
          $post->category_id = $request->category;
          $post->save();

          return redirect()->back()->with('success', 'Post updated successfully !!');
      }
      catch(\Exception $e){
          Log::error($e->getMessage());
          return redirect()->back()->with('error', 'Post not update !!');
      }
    }

    public function postDestroy($id)
    {     
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('success', 'Post successfully deleted !!');
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
