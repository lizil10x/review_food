@extends('master')
@section('content')
<div class="post-cnt">
    <h3>Đăng bài viết</h3>
    <div class="form-content">
        <form action="{{ route('Edit-Post', $post->id) }}"  method="POST" enctype="multipart/form-data">
            @if(count($errors)>0)   
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{ $err }}<br>
                    @endforeach
                </div>            
            @endif
            @CSRF  
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <label for="">Hình ảnh</label></br>
            <img src="../upload/img_post/{{ $post->image }}" width="200px"><br>
            <label for="img-post">Chọn hình ảnh</label></br>
            <input type="file" name="image" id="img-post"></br>
            <label for="title-post">Tiêu đề</label><br>
            <input type="text" name="title" id="title-post" placeholder="Nhập tiêu đề" value="{{$post->title}}"><br>
            <label for="content-post">Nội Dung</label><br>
            <textarea name="content" id="ckeditor1" placeholder="Nhập nội dung" style="width: 810px; height: 200px">{{$post->content}}</textarea><br>
            <input type="submit" value="Sửa">
        </form>
    </div>
</div>   
@endsection