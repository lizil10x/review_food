<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getPost(){
        return view('pages.post');
    }
    public function getUserEditPost($id){
        $post = Post::find($id);
        return view('pages.edit_post',compact('post'))->with('message','Sửa bài thành công');
    }
    public function post(Request $request){
        $this->validate($request,[
            'title'=>'required|min:10',
            'image'=>'required',
            'content'=>'required|min:10',
        ],
        [   
            'title.required'=>'Bạn chưa nhập tiêu đề',
            'title.min'=>'Tiêu đề phải lớn hơn 10 kí tự.',
            'image.required'=>'Bạn chưa chọn ảnh',
            'content.required'=>'Bạn chưa nhập nội dung',
            'content.min'=>'Nội dung phải lớn hơn 10 ký tự'
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = Auth::user()->id;
        $post->status = 0;
        if($request->hasFile('image')){
            $file = $request-> file('image');
            $name = $file->getClientOriginalName();
            $file->move("upload/img_post",$name);
            $post->image= $file -> getClientOriginalName();;      
        }
        $post -> save();
        return redirect()->back()->with('message','Đăng bài thành công, vui lòng đợi Admin duyệt');
    }
}