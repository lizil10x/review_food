@extends('master')
@section('content')
@include('search')
<div class="content">
    <div id="img-like" style="margin:30px 35px;">
        <img src="../img/like.jpg">
    </div>
    <div class="content-view">
        <div class="container">
            <div class="filter">
                        <!--<span id="deal">HOT</span>
                        <p id="span-text">ƯU ĐÃI ĐẶC BIỆT</p>-->
                <select>
                    <option disabled="disabled" selected="selected">---> Sắp xếp</option>
                    <option value="decrease"> Đánh giá cao </option>
                    <option value="ascending"> Đánh giá thấp </option>
                </select>
            </div>
            <div class="slide-gift">
                @foreach($post as $p)
                    <div class="img-content">
                        <a href="{{ route('chi-tiet',$p->id) }}"> <img src="upload/img_post/{{$p->image}}" class="anh"/>
                            <strong style="font-size: 25px; text-align:center">{{$p->title}}</strong>
                        </a><br>
                        
                            <i class="far fa-calendar-minus"></i> {{$p->created_at}}   

                        
                                                           
                    </div>
                        <div style="width: 700px;">
                        <article>
                            <span class="p-content">{{$p->content}}</span>
                        </article>
                        
                        
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div>
        {{$post -> links()}}
    </div>
    
</div>
@endsection