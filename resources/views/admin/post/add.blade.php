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
                    <form action="admin/post/add" class="form-horizontal" method="POST" enctype="multipart/form-data">
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
                          <label class="control-label" for="fileInput">Chọn ảnh(1920x1080)</label>
                          <div class="controls">
                            <input name="image" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>                                             
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Tiêu đề</label>
                          <div class="controls">
                            <input name="title" placeholder="Nhập tiêu đề" type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4">
                          </div>
                        </div>   
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Nội dung</label>
                          <div class="controls">
                            <textarea name="content" id="ckeditor" class="input-xlarge textarea" placeholder="Nhập nội dung" style="width: 810px; height: 200px; white-space: pre;"></textarea>
                          </div>
                        </div> 
                        <div class="form-actions">
                          <button type="submit" class="btn btn-primary">Thêm</button>
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

@section('script')
    <script>    
        $(document).ready(function(){
            $("#Category").change(function(){
                var id_category = $(this).val();
                $.get("dish/"+id_category,function(data){
                    $("#Dish").html(data);  
                });
                // alert(id_theloai);
            });
        }); 
    </script>
    <script>
        function hd() {
            var dh = document.getElementById("guide");
            var bh = document.getElementById("btnh");
            var bu = document.getElementById("btnu");

            if (dh.style.display === "none") {
                dh.style.display = "block";
                bh.style.display = "none";
                bu.style.display = "block";
            }

        }
    </script>
    <script>
        function understand() {
            var dh = document.getElementById("guide");
            var bh = document.getElementById("btnh");
            var bu = document.getElementById("btnu");

            if (dh.style.display === "block") {
                dh.style.display = "none";
                bh.style.display = "block";
                bu.style.display = "none";
            }
        }
    </script>
    <script>
    function myFunction1() {
    var d1 = document.getElementById("myDIV1");
    var b1 = document.getElementById("btn1");
    var b2 = document.getElementById("btn2");


    // if (x.style.display === "none") {
    //   x.style.display = "block";
    //   y.style.display = "none";
    //   z.style.display = "block";
    // } else {
    //   x.style.display = "none";
    // }

    if (d1.style.display === "none") {
      d1.style.display = "block";
      b1.style.display = "none";
      b2.style.display = "block";
    }
  
}
</script>
<script>
    function myFunction2() {
    var d2 = document.getElementById("myDIV2");
    var b2 = document.getElementById("btn2");
    var b3 = document.getElementById("btn3");

    if (d2.style.display === "none") {
      d2.style.display = "block";
      b2.style.display = "none";
      b3.style.display = "block";
    }
  
}
</script>
<script>
    function myFunction3() {
    var d3 = document.getElementById("myDIV3");
    var b3 = document.getElementById("btn3");
    var b4 = document.getElementById("btn4");

    if (d3.style.display === "none") {
      d3.style.display = "block";
      b3.style.display = "none";
      b4.style.display = "block";
    }
  
}
</script>
<script>
    function myFunction4() {
    var d4 = document.getElementById("myDIV4");
    var b4 = document.getElementById("btn4");
    var b5 = document.getElementById("btn5");

    if (d4.style.display === "none") {
      d4.style.display = "block";
      b4.style.display = "none";
      b5.style.display = "block";
    }
  
}
</script>
<script>
    function myFunction5() {
    var d5 = document.getElementById("myDIV5");
    var b5 = document.getElementById("btn5");
    var b6 = document.getElementById("btn6");

    if (d5.style.display === "none") {
      d5.style.display = "block";
      b5.style.display = "none";
      b6.style.display = "block";
    }
  
}
</script>
<script>
    function myFunction6() {
    var d6 = document.getElementById("myDIV6");
    var b6 = document.getElementById("btn6");
    var b7 = document.getElementById("btn7");

    if (d6.style.display === "none") {
      d6.style.display = "block";
      b6.style.display = "none";
      b7.style.display = "block";
    }
  
}
</script>
@endsection