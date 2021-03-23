<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <!-- Bootstrap -->
   <link href="{{ asset('bootstrap/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css') }}" rel="stylesheet">
   
   <!-- Font awesome -->
   <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
   <link href="{{ asset('css/fontawesome-free-5.15.2-web/css/all.css') }}" rel="stylesheet">
   
   <!--script-->
   <script src="../js/app.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   



    <title>Food Mod</title>
</head>
</body>

<!-- Start header section -->

@include('header')
  <!-- End header section -->
 
<div style="min-height: 540px;">
@yield('content')
</div>
  <!-- Start Footer -->
@include('footer')
  <!-- End Footer -->

  <!--script-->
  <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(function(){
      let listStart = $(".list_start .fa");

      listRatingText = {
                1 : "Không thích",
                2 : "Tạm được",
                3 : "Bình thường",
                4 : "Rất tốt",
                5 : "Tuyệt vời",
      }
            
      listStart.mouseover( function(){
        let $this = $(this);
        let number = $this.attr('data-key');
        listStart.removeClass('rating_active');
        $(".number_rating").val(number);

        $.each(listStart, function(key, value){
          if(key + 1<= number)
          {
            $(this).addClass('rating_active')
          }
        });
        $(".list_text").text('').text(listRatingText[$this.attr('data-key')]).show();
        
      });

      
      $(".js_rating_post").click(function(){
          event.preventDefault();
          let content = $("#ra_content").val();
          let number = $(".number_rating").val();
          let url = $(this).attr('href');

          if(content && number)
          {
            $.ajax({
              url: url,
              type : 'POST',
              data : {
                number : number,
                content : content
              }
            }).done(function(result) {
              if(result.code == 1)
              {
                alert("Bình Luận Thành Công")
                location.reload();
              }
            });
          }
      });
      
    });
  </script>
  <script>
function myFunction() {
  var x = document.getElementById("form_rating");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</body>

</html>