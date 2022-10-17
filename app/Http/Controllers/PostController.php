<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function addPost()
    {
        $title = 'Add-Post';
        $categories = Category::all();
        return view('posts.add-post', compact('title', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'    => 'required',
            'body'     => 'required',
            'tag'      => 'required',
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

    public function userPost()
    {
        $title = 'Posts';
        $posts = Post::with('categories')->where('user_id', Auth()->user()->id)->orderBy('created_at', 'desc')->paginate(7);
        return view('posts.all-posts', compact('title', 'posts'));
    }

    public function show($id)
    {
        $title = 'Posts';
        $post = Post::where('id', $id)->first();
        $comments = Comment::with('users')->with('reply')->where('post_id', $id)->get();
        return view('posts.single-post', compact('title', 'post', 'comments'));
    }

    public function edit($id)
    {
        $title = 'Edit Post';
        $post = Post::where('id', $id)->first();
        $categories = Category::all();
        return view('posts.edit', compact('title', 'post', 'categories'));
    }

    public function update(Request $request)
    {
        // dd($request);
        
        $request->validate([
            'title'    => 'required',
            'body'   => 'required',
            'tag' => 'required',
            'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
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

    public function destroy($id)
    {     
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('success', 'Post successfully deleted !!');
    }

}
