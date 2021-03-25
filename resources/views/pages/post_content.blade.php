@extends('master')
@section('content')
<div class="container">

            <div class="content">
                <div class="khung-post">
                <!--Ảnh và ngày post bài-->
                    <!---Noi dung bai post-->
                    <div class="post-content">
                        <span class="title" style="width:500px">
                            <h3>{{$post->title}}</h3>
                            <i class="far fa-calendar-minus"></i> {{$post->created_at}}
                        </span>
                        <div class="img-post">
                           <img src="../upload/img_post/{{$post->image}}" width="450px" height="250px" style="border-radius:5px;">
                        </div>
                    </div>
                </div>
            </div>
        <div class="description">   
            <h3 style="text-align:center;">Mô tả</h3>
            <div class="img-post">
                           <img src="../upload/img_post/{{$post->image}}" width="80%" height="80%" style="border-radius:5px;">
                        </div>
            <span style="white-space: pre-line;">{{$post->content}}</span>
        </div>
        
        <!--<div class="rate-star">-->
        <div class="component_rating" style="width: 85%; margin:0 auto">
            <h4 style="margin-left:45%;">Đánh giá</h4>
                <div class="component_rating_content" style="display:flex; align-items:center; border-radius:5px; border:1px solid #dedede">
                    <div class="rating_item" style="width:20%; position:relative;">
                        <div>
                            <span class="fa fa-star" style="font-size: 70px; color:#ff9705; margin:0 auto; text-align:center;position: absolute; top:50%; left:50%; transform: translateX(-50%) translateY(-50%) "></span>
                                <b style="position: absolute; top:50%; left:50%; transform: translateX(-50%) translateY(-50%);color:white; font-size:20px;">{{$rating}}</b>
                            </div>
                        </div>                      
                        <div class="list_rating" style="width:60%; padding:20px;">
                            
                                @foreach($arrayRatings as $key=>$arrayRatings)   
                                <?php
                                    $percenRate = ($arrayRatings['total'] / $demrating * 100);
                                ?>
                                    <div class="item_rating" style="display:flex; align-items:center; color:#999">   
                                        <div style="width:10%; font-size:14px;">
                                            {{ $key }} <span class="fa fa-star" style="color: #999;"></span>
                                        </div>
                                        <div style="width:70%; margin:0 20px;">
                                            <span style="width: 100%; height: 8px; display:block; border:1px solid #dedede; border-radius:5px; background-color:#dedede;">
                                                <b style="width:{{$percenRate}}%; background-color: #f25800; display:block; height:100%; border-radius:5px;"></b>
                                            </span>
                                        </div>
                                        <div style="width: 20%;">
                                            <a href="" style="color:#999; text-decoration: none;">{{ $arrayRatings['total']}} đánh giá</a>
                                        </div>                    
                                    </div>
                                @endforeach
                           
                    </div>
                    <div style="width:20%">
                        <a role="button" onclick="myFunction()" style="width:200px; background:#288ad6; padding:10px; color:white; border-radius: 5px;">Gửi đánh giá</a>
                    </div>          
        </div> 
        <div id="form_rating" style="display: none;">
            <div style="display: flex; margin-top:15px; font-size:15px;">
                <p style="margin-bottom:0;">Chọn đánh giá của bạn:</p>
                <span name="" class="list_start" style="margin:0 15px;">
                    @for($i = 1; $i <=5; $i++)
                        <i name="" class="fa fa-star" data-key="{{$i}}"></i>
                    @endfor
                </span>
                <span class="list_text" style="">Tốt</span>
                    <input type="hidden" value="" class="number_rating">
            </div>
                <div style="margin-top: 15px;">
                    <textarea name="comment" class="form-control" id="ra_content" cols="150" rows="3"></textarea>
                </div>
                <div style="margin-top: 10px">
                    <a href="{{route('postcomment', $post->id)}}" class="js_rating_post" style="width:120px; background:#288ad6; padding:10px; color:white; border-radius: 5px; text-decoration: none;">Gửi đánh giá</a>
                </div>
        </div>                         
             @foreach($comment as $cmt)
            <div class="content-comment">
                <img src="../upload/avatar/{{$cmt->user->avatar}}" width="60px" height="60px" style="border-radius: 50%;">
                
                <div id="user-name"><p>{{$cmt->user->name}}</p></div>
                <span class="rating" style="padding-left: 15px;">
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fa fa-star {{$i <= $cmt->vote ? 'active' : ''}}" style="color:#999"></i>
                    @endfor
                </span>
                <div id="content-comment">
                    <p>
                        {{$cmt->comment}}
                    </p>
                </div>  
            </div>
            @endforeach
            <div>
                {{$comment->links()}}
            </div>
        </div>
</div>
@endsection