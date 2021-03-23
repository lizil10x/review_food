<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    //register
    public function getRegister(){
        return view('pages.register');
    }
    public function postRegister(Request $request)
    {
        $this->validate($request,[

            'email'=>'required|email|unique:Users,email',
            'password'=>'required|min:6|max:32',
            're_password'=>'required|same:password'
        ],[
            'email.required'=>'Vui lòng nhập email.',
            'email.email'=>'Không đúng định dạng email.',
            'email.unique'=>'Email này đã có người sử dụng.',
            'password.required'=>'Vui lòng nhập password.',
            'password.min'=>'Mật khẩu phải nhiều hơn 6 kí tự.',
            'password.max'=>'Mật khẩu phải ít hơn 32 kí tự.',
            're_password.same'=>'Mật khẩu không trùng khớp.',
            're_password.required'=>'Bạn chưa nhập lại mật khẩu.',
        ]);

        $user = new User();
        $user->name = $request->name;      
        $user->email = $request->email;     
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->avatar = 'default.png';
        $user->role = 0;
        $user->save();
        return redirect()->back()->with('messages','Đăng ký thành công');
    }

    //login
    public function getLogin(){
        return view('pages.login');
    }
    public function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:3|max:32'
        ],[
            'email.required'=>'Bạn chưa nhập Email',
            'password.required'=>'Bạn chưa nhập Password',
            'password.min'=>'Password không được nhỏ hơn 3 kí tự',
            'password.max'=>'Passwordư không được quá 32 kí tự'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('trang-chu');
            
        }else {
            Auth::logout();
            return back()->with('messages', 'Tên tài khoản hoặc mật khẩu không chính xác. Vui lòng kiểm tra lại');
        }
    }
    
    //info
    public function getInfo($id){
        $user = User::find($id);
        $post = Post::where('user_id',Auth::id())->paginate(4);
        return view('pages.info',compact('post','user'));
        
    }

    public function postInfo(Request $request,$id){
        $user = User::find($id);
        $user -> email = $request -> email;
        $user -> name = $request -> name;
        $user->gender = $request->gender;
        $user -> date_of_birth = $request -> date_of_birth;
        $user -> address = $request -> address;
        $user -> phone = $request -> phone; 
        if($request->hasFile('avatar')){
            $file = $request-> file('avatar');
            $name = $file->getClientOriginalName();
            $file->move("upload/avatar",$name);
          $user->avatar= $file -> getClientOriginalName();;
                
        }
        $user -> save();
        return redirect() -> back();
    }
 //dang xuat   
    public function getLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }

    
}