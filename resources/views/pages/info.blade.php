@extends('master')
@section('content')
<div id="ed-infomation">
    <div id="bg-nenedit">
            
    </div>
    <div id="edit-infomation">
        <h4 style="  text-align:center;">Chỉnh sửa thông tin</h4>
        <form action="{{route('postInfo',$user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="edit-user">
                <div id="edit-img">
                    <img src="../upload/avatar/{{ Auth::user()->avatar }}" id="img-avatar"width="130px" height="130px" style="border-radius:50%;"><br/><br/>
                    <input type="file" name="avatar" id="file-avatar"style="width:200px;"/>
                </div>
                <div id="info-edit">
                <i class="fa fa-envelope"></i><input type="email" name="email" placeholder="Email" value="{{ Auth::user()->email }}" readonly/><br/>
                        <i class="fas fa-user"></i><input type="text" name="name" placeholder="Name" value="{{ Auth::user()->name }}"/><br/>
                        <!--<input type="text" name="full_name" placeholder="Full Name" value="{{ Auth::user()->full_name }}"/><br/> !-->
                        <i class="fas fa-calendar-week"></i><input type="date" name="date_of_birth" value="{{ Auth::user()->date_of_birth }}" maxlength="10"/><br/>
                        <i class="fas fa-venus-mars"></i>
                        <input name="gender" value="1" checked=""
                            @if(Auth::user()->gender == 1)
                                {{"checked"}}
                            @endif  
                            type="radio">Nam
                            <input name="gender" value="2"
                            @if( Auth::user()->gender == 2)
                                {{"checked"}}
                            @endif
                            type="radio">Nữ </br>
                        <i class="fa fa-map-marker-alt"></i><input type="text" name="address" placeholder="Addrress" value="{{ Auth::user()->address }}"/><br/>
                        <i class="fas fa-phone-alt"></i><input type="number" name="phone" placeholder="Phone" value="{{ Auth::user()->phone }}"/><br/>
                    <div>
                        <button type="button"><a href="{{ route('getInfo',Auth::user()->id)}}">Hủy</a></button>
                        <input type="submit" id="btn-luu" value="Lưu">
                    </div>
                </div>
            </div>
        </form>    
    </div>
</div>
        <!--ẢNh bìa-->
        <div class="avatar">
            <p> <i class="fa fa-image"></i>Thêm ảnh bìa</p>
        </div>
        <!--THanh cá nhân-->
        <div class="username">
            <!--Tên và ảnh của user-->
            <div id="username">
                <img src="../upload/avatar/{{ Auth::user()->avatar }}" width="130px"  height="130px" style="margin-right:20px;border-radius:50%;"/>
                <h4>{{ Auth::user()->name }}</h4>
            </div>
            <!--Nút sửa thông tin và btn Login out-->
            <div id="edit-info">
                <button id="btn-edit" onclick="edinfo()">Sửa thông tin</button>
                <button id="btn-loginout"><a href="{{ route('trang-chu') }}"> <i class="fa fa-sign-out-alt"></i></a></button>
            </div>
            <!-- Nút đăn bài viết-->
            <div id="post">
                <button id="btn-post"><i class="fa fa-plus-circle"></i><a href="{{route('getpost')}}">Đăng</a></button>
            </div>
        </div>
        <!--Thông tin cá nhân user-->
        <div class="content-section">
            <div id="info">
                <div class="gender"><i class="fas fa-venus-mars" style="padding-right:4%;"></i>
                    <span>
                        @if(Auth::user()->gender == 1)
                           {{ "Nam" }}
                        @else
                           {{ "Nữ" }}
                        @endif
                    </span>
                </div>
                <div class="place"><i class="fa fa-map-marker-alt"style="padding-right:7%;"></i><span>{{Auth::user()->address}}</span></div>
                <div class="phone"><i class="fas fa-phone-alt"></i><span>{{Auth::user()->phone}}</span></div>
                <div class="email"><i class="fa fa-envelope"></i><span>{{Auth::user()->email}}</span></div>
                <div class="date"><i class="fas fa-calendar-week"></i><span>{{Auth::user()->date_of_birth}}(YY/MM/DD)</span></div>
            </div>
            <!--Bài Post-->
            <div class="content">
                    <!--Nút sửa xóa bài viết-->
                    @foreach($post as $p)
                        <div class="add">
                            <i class="fa fa-ellipsis-h"></i>
                            <div class="edit-del">
                                <div id="edit">
                                    <a href="{{route('Edit-Post', $p->id)}}" role="button"><i class="fa fa-edit">Edit</i></a>
                                </div>
                                <div id="del">
                                    <a href="{{route('deletepost',$p->id)}}" role="button"><i class="fa fa-trash"> Delete</i></a>
                                </div>
                            </div>
                        </div>
                        <!---Noi dung bai post-->
                        <div class="content-post">
                            <div class="img-post">
                                <a href="{{ route('chi-tiet',$p->id) }}"><img src="../upload/img_post/{{$p->image}}" width="300px" height="200px" style="border-radius:5px;"></a>                               
                            </div>
                            <div class="title" style="width: 500px;">
                                <a href="{{ route('chi-tiet',$p->id) }}"><h2>{{$p->title}}</h2></a>
                                <p><i class="fas fa-calendar-week"></i>{{$p->created_at}}</p>                               
                            </div>                   
                        </div>
                        <hr>
                    @endforeach   
            </div>
        </div>
        <div class="page">
                {{$post->links()}}
        </div>          
@endsection