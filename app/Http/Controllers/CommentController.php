<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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
}
