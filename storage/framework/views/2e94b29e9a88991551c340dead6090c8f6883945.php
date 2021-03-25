<?php $__env->startSection('content'); ?>
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
	<div class="block">
	    <div class="navbar navbar-inner block-header">
	        <div class="muted pull-left">Comment/Danh sách</div>
			<div class="pull-right"><span class="badge badge-info">Số comment là <?php echo e(count($comment)); ?></span>
			</div>
	    </div>
	    <div class="block-content collapse in">
	        <div class="span12">
	            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
	                <thead>
	                    <tr>
	                        <th>ID</th>
	                        <th>Name</th>
                            <th>ID Post</th>	                                                   
	                        <th>Comment</th>
	                        <th>Thao tác</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	<?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo e($cmt->id); ?></td>
                        <td><?php echo e($cmt->user->name); ?></td>
                        <td><?php echo e($cmt->post->id); ?></td>
                        <td><?php echo e($cmt->comment); ?></td>
                        
                       
                        <td class="center"> 
                            <button class="btn btn-info btn-action">
                            <i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/delete/<?php echo e($cmt->id); ?>"> Xóa</a></button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>          
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
        <!-- /block -->
    </div>		
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/comment/list.blade.php ENDPATH**/ ?>