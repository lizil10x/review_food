<!DOCTYPE html>
<html> 
    <head>
        <title>Food Mod |Trang quản trị</title>
        <base href="<?php echo e(asset('')); ?>">
        <!-- Bootstrap -->
        <link href="source/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="source/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="source/assets/styles.css" rel="stylesheet" media="screen">
        <link href="source/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php echo e(asset('css/fontawesome-free-5.15.2-web/css/all.css')); ?>" rel="stylesheet">
        
        
        <script src="source/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <?php echo $__env->make('admin.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container-fluid">
            <div class="row-fluid">
                
                <?php echo $__env->make('admin.layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--/span-->
                <div style="min-height: 540px;">
                <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
            <hr>
                <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        
        <?php echo $__env->yieldContent('script'); ?>


    </body>

</html><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/layout/index.blade.php ENDPATH**/ ?>