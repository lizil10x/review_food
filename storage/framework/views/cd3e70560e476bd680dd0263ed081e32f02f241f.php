<?php $__env->startSection('content'); ?>
<?php echo $__env->make('search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="img-content">
                        <a href="<?php echo e(route('chi-tiet',$p->id)); ?>"> <img src="upload/img_post/<?php echo e($p->image); ?>" class="anh"/>
                            <strong style="font-size: 25px; text-align:center"><?php echo e($p->title); ?></strong>
                        </a><br>
                        
                            <i class="far fa-calendar-minus"></i> <?php echo e($p->created_at); ?>   

                        
                                                           
                    </div>
                        <div style="width: 700px;">
                        <article>
                            <span class="p-content"><?php echo e($p->content); ?></span>
                        </article>
                        
                        
                        <hr>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <div>
        <?php echo e($post -> links()); ?>

    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/pages/trangchu.blade.php ENDPATH**/ ?>