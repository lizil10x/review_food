@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
	<div class="block">
	    <div class="navbar navbar-inner block-header">
	        <div class="muted pull-left">User -> Danh sách</div>
			<div class="pull-right"><span class="badge badge-info">Số user là {{ count($user) }}</span>
			</div>
	    </div>
	    <div class="block-content collapse in">
	        <div class="span12">
	           <div class="table-toolbar">
	              <div class="btn-group">
	                 <a href="{{route('addUser')}}"><button class="btn btn-success">Thêm mới <i class="icon-plus icon-white"></i></button></a>
	              </div>
	              
	           </div>
	            
	            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
	                <thead>
	                    <tr>
	                        <th>ID</th>
	                        <th>Avatar</th>
	                        <th>Name</th>
	                        <th>Giới tính</th>
	                        <th>Email</th>
	                        <th>Role</th>
	                        <th>Địa chỉ</th>
	                        <th>Số điện thoại</th>
	                        <th>Thao tác</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach($user as $u)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $u->id }}</td>
                        <td>
                        <img width="100px" height="100px" src="upload/avatar/{{$u->avatar}}">
                           </td>
                        <td>{{ $u->name }}</td>
                        <td>
                            @if($u->gender == 1)
                                {{ "Nam" }}
                            @else
                                {{ "Nữ" }}
                            @endif
                        </td>
                        
                        
                        <td>{{ $u->email }}</td>
                        {{-- <td>{{ bcrypt($u->password) }}</td> --}}
                        <td>{{-- {{ $u->role }} --}}
                            @if($u->role == 1)
                            {{ "Admin" }}
                            @else
                            {{ "Thành viên" }}
                            @endif
                        </td>
                        <td>{{ $u->address }}</td>
                        <td>{{ $u->phone }}</td>
                        <td class="center">
                            @if($u->role!=1)
                            <button class="btn btn-info btn-action">
                            <i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/delete/{{$u->id}}"> Xóa</a></button> <br>
                            <button class="btn btn-default btn-success">
                            <i class="fa fa-pencil fa-fw"></i> <a href="admin/user/edit/{{$u->id}}"> Sửa</a></button>
                            @else
                            <button class="btn btn-default btn-success">
                            <i class="fa fa-pencil fa-fw"></i> <a href="admin/user/edit/{{$u->id}}"> Sửa</a>
                            </button>
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