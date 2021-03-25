<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $post = Post::where('status',1)->paginate(4);
        return view('pages.trangchu',compact('post'));   
    }

    public function getContentPost($id, Request $request){
        $comment = Comment::where('post_id',$id)->orderBy('id',"DESC")->paginate(5);
        $post = Post::with('user')->where('id', $request->id)->first();
        $rating = Comment::where('post_id',$id)->avg('vote');
        $demrating = Comment::where('post_id',$id)->count('vote');
        $rating = round($rating,2);
        //dd($vote);
        //group rating
        
        $ratingDashboard = Comment::groupBy('vote')
        ->where('post_id',$id)
        ->select(DB::raw('count(vote) as total'))
        ->addSelect('vote')
        ->get()->toArray();
       // dd($ratingDashboard);
        $arrayRatings = [];

        if (!empty($ratingDashboard))
        {
            for($i = 1; $i <= 5; $i++)
            {  
                $arrayRatings[$i] = [
                    "total" => 0,
                    "sum" => 0,
                    "vote" => 0,
                ]; 
                foreach($ratingDashboard as $item)
                {
                    if ( $item['vote'] === $i )
                    {
                        $arrayRatings[$i] = $item;  
                    }
                }
            }
        }
        
        //dd($arrayRatings);
        return view('pages.post_content',compact('post','comment','rating','arrayRatings','demrating'));
    } 
    
    public function getSearch(Request $request){
        $post = Post::where('title','like','%'.$request->key.'%')->get();
        return view('pages.search',compact('post'));
    }
}
