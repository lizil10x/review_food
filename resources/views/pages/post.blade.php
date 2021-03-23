@extends('master')
@section('content')
<div class="post-cnt">
    <h3>Đăng bài viết</h3>
    <div class="form-content">
        <form action="{{route('post')}}"  method="POST" enctype="multipart/form-data">
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
            <label for="img-post">Hình ảnh</label></br>
            <input type="file" name="image" id="img-post"></br>
            <label for="title-post">Tiêu đề</label><br>
            <input type="text" name="title" id="title-post" placeholder="Nhập tiêu đề"><br>
            <label for="content-post">Nội Dung</label><br>
            <textarea name="content" id="ckeditor1" placeholder="Nhập nội dung" style="width: 810px; height: 200px"></textarea><br>
            <input type="submit" value="Đăng bài">
        </form>
    </div>
</div>
@endsection