<?php $__env->startSection('content'); ?>
<div class="post-cnt">
    <h3>Đăng bài viết</h3>
    <div class="form-content">
        <form action="<?php echo e(route('postEdit', $post->id)); ?>"  method="POST" enctype="multipart/form-data">
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
            <label for="">Hình ảnh</label></br>
            <img src="../upload/img_post/<?php echo e($post->image); ?>" width="200px"><br>
            <label for="img-post">Chọn hình ảnh</label></br>
            <input type="file" name="image" id="img-post"></br>
            <label for="title-post">Tiêu đề</label><br>
            <input type="text" name="title" id="title-post" placeholder="Nhập tiêu đề" value="<?php echo e($post->title); ?>"><br>
            <label for="content-post">Nội Dung</label><br>
            <textarea name="content" id="ckeditor1" placeholder="Nhập nội dung" style="width: 810px; height: 200px"><?php echo e($post->content); ?></textarea><br>
            <input type="submit" value="Sửa">
        </form>
    </div>
</div>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/pages/edit_post.blade.php ENDPATH**/ ?>