<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CommentController extends Controller
{
    public function index()
    {
      $title = 'Comments';
      $comments = Comment::with('users')->with('posts')->get();
      return view('admin.comments', compact('title', 'comments'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'post_id'    => 'required',
            'comment'    => 'required'
        ]);

        try{
            $comment = new Comment;
            $comment->text    = $request->comment;
            $comment->post_id = $request->post_id;
            $comment->user_id = Auth()->user()->id;
            $comment->save();

            return redirect()->back();
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function replyStore(Request $request)
    {
        $request->validate([
            'post_id'    => 'required',
            'comment_id' => 'required',
            'reply'      => 'required'
        ]);

        try{
            $reply = new Comment;
            $reply->text    = $request->reply;
            $reply->post_id  = $request->post_id;
            $reply->parent_id  = $request->comment_id;
            $reply->user_id = Auth()->user()->id;
            $reply->save();

            return redirect()->back();
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id)
    {     
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back()->with('success', 'Comment successfully deleted !!');
    }
}
