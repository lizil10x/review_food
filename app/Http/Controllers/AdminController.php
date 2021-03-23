<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //get dashboard
    public function getDashboard(){
        return view('admin.dashboard.dashboard');
    }

    //get list user
    public function getListUser(){
        $user= User::all();
    	return view('admin.user.list',['user'=>$user]);
    }

    // add user
    public function getAddUser(){
    	return view('admin.user.add');
    }

    public function postAddUser(Request $request){
    	$this->validate($request,[
    			'name'=>'required|min:3|max:100',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:3|max:32',
                'again_pass'=>'required|same:password',
                'address'=>'required',
                'phone'=>'required|numeric'

	    	],
	    	[
                'email.required'=>'Bạn chưa nhập email',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',
                'email.unique'=>'Email đã tồn tại',
	    		'name.required'=>'Bạn chưa nhập họ tên',
	    		'name.min'=>'Tên phải có độ dài từ 3 đến 32 kí tự',
	    		'name.max'=>'Tên phải có độ dài từ 3 đến 32 kí tự',
                'password.min'=>'Mật khẩu phải có độ dài từ 3 kí tự',
                'password.max'=>'Mật khẩu chỉ có tối đa 32 kí tự',
                'again_pass.required'=>'Bạn chưa nhập lại mật khẩu',
                'again_pass.same'=>'Mật khẩu không khớp',
                'address.required'=>'Vui lòng nhập địa chỉ của bạn',
                'phone.required'=>'Vui lòng nhập số điện thoại của bạn để chúng tôi dễ dàng tư vấn',
                'phone.numeric'=>'Số điện thoại không được chứa kí tự khác ngoài số'
	    ]);

	    $user = new User;
	    $user->name = $request->name;
        $user->gender = $request->gender;
	    $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        if($request->hasFile('avatar')){
            $file = $request-> file('avatar'); 
            $name = $file->getClientOriginalName();
            $file->move("upload/avatar",$name);
            $user->avatar = $file->getClientOriginalName();
        }
	    $user->save();
	    return redirect('admin/user/add')->with('message','Thêm user thành công ');
    }

    //edit user
    public function getEditUser($id){
    	$user = User::find($id);
    	return view('admin/user/edit',['user'=>$user]);
    }

    public function postEditUser(Request $request,$id){
        // return $request;
    	$user=User::find($id);
    	$this->validate($request,[
                'name'=>'required|min:3|max:100',
                'email'=>'required|email',
                'password'=>'required|min:3|max:32',
                'again_pass'=>'required|same:password',
                'address'=>'required',
                'phone'=>'required|numeric'

            ],
            [
                'email.required'=>'Bạn chưa nhập email',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',
                'name.required'=>'Bạn chưa nhập họ tên',
                'name.min'=>'Tên phải có độ dài từ 3 đến 32 kí tự',
                'name.max'=>'Tên phải có độ dài từ 3 đến 32 kí tự',
                'password.min'=>'Mật khẩu phải có độ dài từ 3 kí tự',
                'password.max'=>'Mật khẩu chỉ có tối đa 32 kí tự',
                'again_pass.required'=>'Bạn chưa nhập lại mật khẩu',
                'again_pass.same'=>'Mật khẩu không khớp',
                'address.required'=>'Vui lòng nhập địa chỉ của bạn',
                'phone.required'=>'Vui lòng nhập số điện thoại của bạn để chúng tôi dễ dàng tư vấn',
                'phone.numeric'=>'Số điện thoại không được chứa kí tự khác ngoài số'
        ]);

        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        
       
        if($request->hasFile('avatar')){
            $file = $request-> file('avatar');
            //$duoi = $file -> getClientOriginalExtension();
            //if($duoi != 'jpg' && $duoi !='png'  && $duoi != 'jpeg'){
               // return redirect('admin/user/add')->with('thongbao','Bạn chỉ được chọn file có đuôi jpg,png,jpeg! ');
           // }
            $name = $file->getClientOriginalName();
            $file->move("upload/avatar",$name);
            $user->avatar = $file->getClientOriginalName();
            }

        $user->save();

    	return redirect('admin/user/edit/'.$id)->with('thongbao','Sửa thành công');
    }

    //delete user
    public function getDeleteUser($id){
    	$user = User::find($id);	
    	$user->delete();
    	return redirect('admin/user/list')->with('thongbao','Xóa người dùng thành công');
    }

    //list post
    public function getListPost(){
        $post = Post::orderBy('id','DESC')->get();
        $post = Post::all();
       return view('admin.post.list',['post'=>$post]);
   }
    // get post
    public function getAddPost(){
        return view('admin.post.add');
    }

    // add post
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
        $post->status = 1;
        if($request->hasFile('image')){
            $file = $request-> file('image');
            $name = $file->getClientOriginalName();
            $file->move("upload/img_post",$name);
            $post->image= $file -> getClientOriginalName();     
        }
        $post -> save();
        return redirect()->back()->with('message','Đăng bài thành công');
    }

    //get edit post
    public function getEditPost($id){
    // $comment = Comment::all();
        $post = Post::find($id);
        return view('admin/post/edit',['post'=>$post]);
    }

    //post edit post
    public function postEditPost(Request $request, $id ){
        $post = Post::find($id);

        $this->validate($request,[
            'title'=>'required|min:10',
            'content'=>'required|min:10',
        ],
        [   
            'title.required'=>'Bạn chưa nhập tiêu đề',
            'title.min'=>'Tiêu đề phải lớn hơn 10 kí tự.',
            'content.required'=>'Bạn chưa nhập nội dung',
            'content.min'=>'Nội dung phải lớn hơn 10 ký tự',
        ]);

        $post->title = $request->title;
        $post->content = $request->content;

        if($request->hasFile('image')){
            $file = $request-> file('image');
            $name = $file->getClientOriginalName();
            $file->move("upload/img_post",$name);
            $post->image= $file -> getClientOriginalName();     
        }
        $post->save();
        return redirect('admin/post/edit/'.$id)->with('message','Sửa thành công');
    }
    public function getDuyetPost($id){
        $post = Post::find($id);
        if($post->status == 0){
            $post->status = 1;
        }
        $post->save();
        return redirect('admin/post/list');
    }
    public function Userdelete_post($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}
