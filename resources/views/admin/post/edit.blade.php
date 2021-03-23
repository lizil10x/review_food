@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Công thức</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="admin/post/edit/{{$post->id}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
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
                      <fieldset>
                        <legend>Thêm bài viết</legend>
                        
                          <div class="control-group">
                            <label class="control-label" for="fileInput">Chọn ảnh(1920x1080) </label>
                            <div class="controls">
                              <p>
                                <img src="upload/img_post/{{ $post->image }}" width="200px">
                              </p>
                              <input  name="image" class="input-file uniform_on" id="fileInput" type="file">
                            </div>
                          </div> 

                          <div class="control-group">
                            <label class="control-label" for="typeahead">Tiêu đề</label>
                            <div class="controls">
                              <input name="title" placeholder="Nhập tiêu đề" type="text" class="span6" id="typeahead" value="{{$post->title}}">
                            </div>
                          </div>

                          <div class="control-group">
                            <label class="control-label" for="typeahead">Nội dung</label>
                            <div class="controls">
                              <textarea name="content" class="input-xlarge textarea" placeholder="Nhập nội dung" style="width: 810px; height: 200px">{{$post->content}}</textarea>
                            </div>
                          </div> 

                          <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <button type="reset" class="btn">Cancel</button>
                          </div>
                     
                      </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!-- /block -->
    </div>    
</div>
@endsection