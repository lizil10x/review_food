@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
	<div class="block">
	    <div class="navbar navbar-inner block-header">
	        <div class="muted pull-left">Bài viết -> Danh sách</div>
			<div class="pull-right"><span class="badge badge-info">Số công thức là {{ count($post) }}</span>
			</div>
	    </div>
	    <div class="block-content collapse in">
	        <div class="span12">
	           <div class="table-toolbar">
	              <div class="btn-group">
	                 <a href="{{route('addPost')}}"><button class="btn btn-success">Thêm mới <i class="icon-plus icon-white"></i></button></a>
	              </div>
	           </div>
	            
	            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
	                <thead>
	                    <tr>
	                        <th>ID</th>
							<th style="width: 80px">User đăng</th>
	                        <th >Tiêu đề</th>
							<th style="width: 600px;">Nội dung</th>
	                        <th style="width: 60px">Trạng thái</th>
	                        <th style="width: 50px">Thao tác</th>
	                    </tr>
	                </thead>
	                <tbody>
						@foreach($post as $p)
							<tr class="odd gradeX">
								<td>{{ $p->id }}</td>
								<td>{{ $p->user->name }}</td>
								<td>{{ $p->title }}</td>
								<td>{{$p->content}}</td>                       	                        	                        	                        	                        	                        	                        
								@if($p->status == 1)
									<td style="color: green">Đã duyệt</td>
								@else
									<td style="color: red">Chưa duyệt</td>
								@endif
								<td class="center">
									@if($p->status == 0)
										<button class="btn btn-default btn-danger">
											<a href="admin/post/duyet/{{ $p->id }}">Duyệt bài</a>
											
										</button><br>
										<button class="btn btn-default"><a href="admin/post/delete/{{ $p->id }}">Xóa</a></button>
									@elseif($p->status == 1)
										<button class="btn btn-default"><a href="admin/post/edit/{{ $p->id }}">Sửa</a></button><br>
										<button class="btn btn-default"><a href="admin/post/delete/{{ $p->id }}">Xóa</a></button>
									@endif
									
								</td>      
							</tr>
	                 	@endforeach
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
        <!-- /block -->
    </div>		
</div>
@endsection