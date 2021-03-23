<?php $__env->startSection('content'); ?>
<div>
    <?php if(Auth::user()->role == 1): ?>
        chao mung admin
    
    <?php else: ?>
      ban khong co quyen vao trang nay
    
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin.blade.php ENDPATH**/ ?>