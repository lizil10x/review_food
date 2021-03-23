@extends('master')
@section('content')
<div>
	<div style="margin: 20px 0px 0px 100px">
		<h4>Đăng Nhập</h4>
	</div>
</div>
<div class="container">
	<div id="content">	
		<div class="row">
			<div class="col-sm-3"></div>
            <div class="col-sm-6" style="margin-bottom: 50px">
                <form action="dang-nhap" method="POST">
					@if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{ $err }}
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('messages'))
                        <div class="alert alert-success">{{ Session::get('messages') }}</div>
                    @endif
                    @CSRF     
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">					    
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        
                                
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                        </div>
                </form>		           			
            </div>
        </div>
	</div> 
</div>
@endsection