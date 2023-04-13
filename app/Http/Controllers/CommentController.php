<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function save_comment(Request $request)
    {
        $article_id = $request->article_id;
        $message = $request->message;
        $user_id = auth()->user()->id;
        $data = [
            "article_id" => $article_id,
            "user_id" => $user_id,
            "message" => $message,
        ];
        $comment_obj = Comment::create($data);
        return redirect()->route('article-detail', ['id' => $article_id]);
    }
}