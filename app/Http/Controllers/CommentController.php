<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use PhpParser\ErrorHandler\Collecting;
use Illuminate\Support\Collection;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
public function postComment($id, Request $request){

        $post_id = $id;
        $comment = new Comment();
        $comment->post_id = $post_id;
        $comment->user_id = Auth::user()->id;
        $comment->vote = $request->number;
        $comment->comment = $request->content;
        $comment->save();
        
        return response()->json(['code' => '1'],);
    }

    /*public function saveRating(Request $request, $id){
        if($request -> ajax())
        {
            Comment::insert([
                'user_id' => Auth::user(),
                'post_id' => $id,
                'vote' => $request->number,
                'comment' => $request->content,
            ]);
        }
        
        $post = Post::find($id);
        $post->save();
        return response()->json(['code' => '']);
    }*/
}