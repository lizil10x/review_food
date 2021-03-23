<?php $__env->startSection('content'); ?>
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
	<div class="block">
	    <div class="navbar navbar-inner block-header">
	        <div class="muted pull-left">Bài viết -> Danh sách</div>
			<div class="pull-right"><span class="badge badge-info">Số công thức là <?php echo e(count($post)); ?></span>
			</div>
	    </div>
	    <div class="block-content collapse in">
	        <div class="span12">
	           <div class="table-toolbar">
	              <div class="btn-group">
	                 <a href="<?php echo e(route('addPost')); ?>"><button class="btn btn-success">Thêm mới <i class="icon-plus icon-white"></i></button></a>
	              </div>
	           </div>
	            
	            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
	                <thead>
	                    <tr>
	                        <th>ID</th>
							<th style="width: 80px">User đăng</th>
	                        <th >Tiêu đề</th>
							<th style="width: 600px;">Nội dung</th>
	                        <th style="width: 60px">Trạng thái</th>
	                        <th style="width: 50px">Thao tác</th>
	                    </tr>
	                </thead>
	                <tbody>
						<?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr class="odd gradeX">
								<td><?php echo e($p->id); ?></td>
								<td><?php echo e($p->user->name); ?></td>
								<td><?php echo e($p->title); ?></td>
								<td><?php echo e($p->content); ?></td>                       	                        	                        	                        	                        	                        	                        
								<?php if($p->status == 1): ?>
									<td style="color: green">Đã duyệt</td>
								<?php else: ?>
									<td style="color: red">Chưa duyệt</td>
								<?php endif; ?>
								<td class="center">
									<?php if($p->status == 0): ?>
										<button class="btn btn-default btn-danger">
											<a href="admin/post/duyet/<?php echo e($p->id); ?>">Duyệt bài</a>
											
										</button><br>
										<button class="btn btn-default"><a href="admin/post/delete/<?php echo e($p->id); ?>">Xóa</a></button>
									<?php elseif($p->status == 1): ?>
										<button class="btn btn-default"><a href="admin/post/edit/<?php echo e($p->id); ?>">Sửa</a></button><br>
										<button class="btn btn-default"><a href="admin/post/delete/<?php echo e($p->id); ?>">Xóa</a></button>
									<?php endif; ?>
									
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
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/post/list.blade.php ENDPATH**/ ?>