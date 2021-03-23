<!DOCTYPE html>
<html> 
    <head>
        <title>Food Mod |Trang quản trị</title>
        <base href="{{ asset('')}}">
        <!-- Bootstrap -->
        <link href="source/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="source/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="source/assets/styles.css" rel="stylesheet" media="screen">
        <link href="source/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <link href="{{ asset('css/fontawesome-free-5.15.2-web/css/all.css') }}" rel="stylesheet">
        
        
        <script src="source/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        @include('admin.layout.header')

        <div class="container-fluid">
            <div class="row-fluid">
                
                @include('admin.layout.menu')
                <!--/span-->
                <div style="min-height: 540px;">
                @yield('content')
                </div>
            </div>
            <hr>
                @include('footer')
        </div>
        <!--/.fluid-container-->

        <script src="source/vendors/jquery-1.9.1.js"></script>
        <script src="source/bootstrap/js/bootstrap.min.js"></script>
        <script src="source/vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="source/vendors/jquery.uniform.min.js"></script>
        <script src="source/vendors/chosen.jquery.min.js"></script>
        <script src="source/vendors/bootstrap-datepicker.js"></script>
        
        <script src="source/assets/scripts.js"></script>
        <script src="source/ckeditor/ckeditor.js"></script>
        <script src="source/assets/DT_bootstrap.js"></script>

        <!--<script>
      CKEDITOR.replace('ckeditor');
      CKEDITOR.replace('ckeditor1');
  </script>-->
        
        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                    responsive: true
            });
        });
        
        </script>
        
        @yield('script')


    </body>

</html>