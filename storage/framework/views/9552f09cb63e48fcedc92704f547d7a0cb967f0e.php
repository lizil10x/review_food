<?php $__env->startSection('content'); ?>
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Công thức</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="admin/post/edit/<?php echo e($post->id); ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
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
                      <fieldset>
                        <legend>Thêm bài viết</legend>
                        
                          <div class="control-group">
                            <label class="control-label" for="fileInput">Chọn ảnh(1920x1080) </label>
                            <div class="controls">
                              <p>
                                <img src="upload/img_post/<?php echo e($post->image); ?>" width="200px">
                              </p>
                              <input  name="image" class="input-file uniform_on" id="fileInput" type="file">
                            </div>
                          </div> 

                          <div class="control-group">
                            <label class="control-label" for="typeahead">Tiêu đề</label>
                            <div class="controls">
                              <input name="title" placeholder="Nhập tiêu đề" type="text" class="span6" id="typeahead" value="<?php echo e($post->title); ?>">
                            </div>
                          </div>

                          <div class="control-group">
                            <label class="control-label" for="typeahead">Nội dung</label>
                            <div class="controls">
                              <textarea name="content" class="input-xlarge textarea" placeholder="Nhập nội dung" style="width: 810px; height: 200px"><?php echo e($post->content); ?></textarea>
                            </div>
                          </div> 

                          <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Edit</button>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/post/edit.blade.php ENDPATH**/ ?>