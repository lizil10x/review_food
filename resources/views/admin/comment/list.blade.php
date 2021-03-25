@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
	<div class="block">
	    <div class="navbar navbar-inner block-header">
	        <div class="muted pull-left">Comment/Danh sách</div>
			<div class="pull-right"><span class="badge badge-info">Số comment là {{ count($comment) }}</span>
			</div>
	    </div>
	    <div class="block-content collapse in">
	        <div class="span12">
	            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
	                <thead>
	                    <tr>
	                        <th>ID</th>
	                        <th>Name</th>
                            <th>ID Post</th>	                                                   
	                        <th>Comment</th>
	                        <th>Thao tác</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach($comment as $cmt)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $cmt->id }}</td>
                        <td>{{ $cmt->user->name }}</td>
                        <td>{{ $cmt->post->id }}</td>
                        <td>{{ $cmt->comment }}</td>
                        
                       
                        <td class="center"> 
                            <button class="btn btn-info btn-action">
                            <i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/delete/{{$cmt->id}}"> Xóa</a></button>
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