<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
          'tag' => 'required',
          'image'    => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
      ]);

      try{

          if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
          }

          $post = new Post;
          $post->image   = $postImage;
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
          if($request->has('image') && !empty($request->image))
          {

              $image = $request->file('image');
              $destinationPath = 'image/';
              $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move($destinationPath, $postImage);
              $input['image'] = "$postImage";
              $post->image   = $postImage;
          }
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
      $users = User::where('role', 0)->get();
      return view('admin.users', compact('title', 'users'));
    }

    public function userPost($id)
    {
      $user = User::where('id', $id)->first();
      $name = $user->name;
      $title = "$name's posts";
      $posts = Post::with('categories')->where('user_id', $id)->orderBy('created_at', 'desc')->get();
      return view('admin.user-posts', compact('title', 'posts'));
    }

    public function userApproval($id)
    {
      $user = User::find($id);
      if($user->status == 0)
      {
        $user->status = 1;
        $user->save();      
        return redirect()->back()->with('success', 'User activated!');
      }
      else
      {
        $user->status = 0;
        $user->save();      
        return redirect()->back()->with('fail', 'User disable!'); 
      }
    }

    public function addUser()
    {
      $title = 'Add User';
      return view('admin.add-user', compact('title'));
    }

    public function addNewUser(Request $request)
    {
      $request->validate([
        'name'    => 'required',
        'email'   => 'required',
        'role' => 'required',
        'password' => 'required|min:8',
        'c_password' => 'required|min:8'
      ]);

      if($request->password !== $request->c_password)
      {
        return redirect()->back()->with('error', 'The password confirmation does not match..!');
      }
      else
      {
        try
        {
          $user = new User;
          $user->name     = $request->name;
          $user->email    = $request->email;
          $user->role     = $request->role;
          $user->password = Hash::make($request->password);
          $user->save();

          return redirect()->back()->with('success', 'User created successfully !!');
        }
        catch(\Exception $e)
        {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'User not created !!');
        }
      }
    }

    public function makeAdmin($id)
    {
      $user = User::find($id);
      if($user->role == 0)
      {
        $user->role = 1;
        $user->save();      
        return redirect()->back()->with('success', 'Admin access created!');
      }
      else
      {
        $user->role = 0;
        $user->save();      
        return redirect()->back()->with('fail', 'Admin access deleted!'); 
      }
    }

    public function adminUsers()
    {
      $title = 'Admin Users';
      $users = User::where('role', 1)->get();
      return view('admin.admin-users', compact('title', 'users'));
    }

    public function editUser($id)
    {
      $user = User::where('id', $id)->first();
      $name = $user->name;
      $title = "$name's profile";
      return view('admin.edit-user', compact('title', 'user'));

    }

    public function upadteUser(Request $request)
    {
      $request->validate([
        'name'    => 'required',
        'email'   => 'required',
        'role' => 'required'
      ]);

      if($request->password !== $request->c_password)
      {
        return redirect()->back()->with('error', 'The password confirmation does not match..!');
      }
      else
      {

        try{
            $user = User::find($request->id);
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->role     = $request->role;
            if($request->password){
              $user->password = Hash::make($request->password);
            }
            $user->save();

            return redirect()->back()->with('success', 'Profile updated successfully !!');
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Profile not update !!');
        }
      }
    }

    public function deleteUser($id)
    {
      $reply = Reply::where('user_id', $id);
      $reply->delete();

      $comments = Comment::where('user_id', $id);
      $comments->delete();

      $posts = Post::where('user_id', $id);
      $posts->delete();

      $user = User::find($id);
      $user->delete();

      return redirect()->back()->with('success', 'User successfully deleted !!');
    }
}
