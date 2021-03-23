<?php $__env->startSection('content'); ?>
<div>
	<div style="margin: 20px 0px 0px 100px">
		<h4>Đăng Nhập</h4>
	</div>
</div>
<div class="container">
	<div id="content">	
		<div class="row">
			<div class="col-sm-3"></div>
            <div class="col-sm-6" style="margin-bottom: 50px">
                <form action="dang-nhap" method="POST">
					<?php if(count($errors)>0): ?>
                        <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($err); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('messages')): ?>
                        <div class="alert alert-success"><?php echo e(Session::get('messages')); ?></div>
                    <?php endif; ?>
                    <?php echo csrf_field(); ?>     
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">					    
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        
                                
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                        </div>
                </form>		           			
            </div>
        </div>
	</div> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/pages/login.blade.php ENDPATH**/ ?>