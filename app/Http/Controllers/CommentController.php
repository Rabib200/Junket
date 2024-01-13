<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function runningCommentCreate(Request $request){
        $comment = new Comment();
        $comment->tour_type = 'Running';
        $comment->user_id = auth()->user()->id;
        $comment->plan_id = $request->plan_id;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->back();
    }
    public function upcommingCommentCreate(Request $request){
        $comment = new Comment();
        $comment->tour_type = 'Upcomming';
        $comment->user_id = auth()->user()->id;
        $comment->plan_id = $request->plan_id;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->back();
    }
}