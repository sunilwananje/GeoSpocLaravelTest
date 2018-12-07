<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->comment = $request->get('comment');
        $comment->owner()->associate($request->user());
        $post = Profile::find($request->get('profile_id'));
        $post->comments()->save($comment);

        return back();
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->comment = $request->get('comment');
        $reply->owner()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $post = Profile::find($request->get('profile_id'));

        $post->comments()->save($reply);

        return back();

    }
}
