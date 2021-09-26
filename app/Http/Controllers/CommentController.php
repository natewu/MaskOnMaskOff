<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\CommentResource;

use App\Models\Comments;

use Carbon\Carbon;

class CommentController extends Controller
{
    public function getComments($code) {
        $comments = Comments::where('profilecode', $code)->orderBy('date_sent', 'desc')->get();
        return CommentResource::collection($comments);
    }

    public function sendcomment(Request $request) {
        $comment = new Comments;
        $time = Carbon::now();
        $comment->text = $request->comment;
        $comment->profilecode = $request->comment_profile;
        $comment->date_sent = $time;
        $comment->save();
    }
}
