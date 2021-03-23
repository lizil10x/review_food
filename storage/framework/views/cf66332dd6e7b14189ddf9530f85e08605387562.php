<?php $__env->startSection('content'); ?>
<div class="post-cnt">
    <h3>Đăng bài viết</h3>
    <div class="form-content">
        <form action="<?php echo e(route('post')); ?>"  method="POST" enctype="multipart/form-data">
            <?php if(count($errors)>0): ?>   
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($err); ?><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>            
            <?php endif; ?>
            <?php echo csrf_field(); ?>  
            <?php if(session('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>
            <label for="img-post">Hình ảnh</label></br>
            <input type="file" name="image" id="img-post"></br>
            <label for="title-post">Tiêu đề</label><br>
            <input type="text" name="title" id="title-post" placeholder="Nhập tiêu đề"><br>
            <label for="content-post">Nội Dung</label><br>
            <textarea name="content" id="ckeditor1" placeholder="Nhập nội dung" style="width: 810px; height: 200px"></textarea><br>
            <input type="submit" value="Đăng bài">
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/pages/post.blade.php ENDPATH**/ ?>