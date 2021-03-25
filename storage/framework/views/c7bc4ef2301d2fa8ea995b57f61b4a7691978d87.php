<?php $__env->startSection('content'); ?>
<?php echo $__env->make('search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="content">
    <div class="content-view">
        <div class="container">
            <div class="filter">
                        <!--<span id="deal">HOT</span>
                        <p id="span-text">ƯU ĐÃI ĐẶC BIỆT</p>-->
                <h4>Tìm thấy <?php echo e(count($post)); ?> bài viết</h4>
            </div>
            <div class="slide-gift">
                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="img-content">
                        <a href="<?php echo e(route('chi-tiet',$p->id)); ?>"> <img src="upload/img_post/<?php echo e($p->image); ?>" class="anh"/>
                            <strong style="font-size: 25px; text-align:center"><?php echo e($p->title); ?></strong>
                        </a><br>
                        <span class="rating">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <i class="fa fa-star" style="color:#999"></i>
                            <?php endfor; ?>
                        </span>                                              
                    </div>
                        <div style="width: 700px;">
                        <article>
                            <span class="p-content"><?php echo e($p->content); ?></span>
                        </article>
                        <p><?php echo e($p->created_at); ?></p>
                        
                        <hr>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/pages/search.blade.php ENDPATH**/ ?>