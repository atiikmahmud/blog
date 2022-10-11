<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CommentController extends Controller
{
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
            $reply = new Reply;
            $reply->reply    = $request->reply;
            $reply->post_id  = $request->post_id;
            $reply->comment_id  = $request->comment_id;
            $reply->user_id = Auth()->user()->id;
            $reply->save();

            return redirect()->back();
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return redirect()->back();
        }
    }
}
