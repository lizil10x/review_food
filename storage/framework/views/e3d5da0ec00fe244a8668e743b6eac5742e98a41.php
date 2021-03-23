<?php $__env->startSection('content'); ?>
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
	<div class="block">
	    <div class="navbar navbar-inner block-header">
	        <div class="muted pull-left">User -> Danh sách</div>
			<div class="pull-right"><span class="badge badge-info">Số user là <?php echo e(count($user)); ?></span>
			</div>
	    </div>
	    <div class="block-content collapse in">
	        <div class="span12">
	           <div class="table-toolbar">
	              <div class="btn-group">
	                 <a href="<?php echo e(route('addUser')); ?>"><button class="btn btn-success">Thêm mới <i class="icon-plus icon-white"></i></button></a>
	              </div>
	              
	           </div>
	            
	            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
	                <thead>
	                    <tr>
	                        <th>ID</th>
	                        <th>Avatar</th>
	                        <th>Name</th>
	                        <th>Giới tính</th>
	                        <th>Email</th>
	                        <th>Role</th>
	                        <th>Địa chỉ</th>
	                        <th>Số điện thoại</th>
	                        <th>Thao tác</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo e($u->id); ?></td>
                        <td>
                        <img width="100px" height="100px" src="upload/avatar/<?php echo e($u->avatar); ?>">
                           </td>
                        <td><?php echo e($u->name); ?></td>
                        <td>
                            <?php if($u->gender == 1): ?>
                                <?php echo e("Nam"); ?>

                            <?php else: ?>
                                <?php echo e("Nữ"); ?>

                            <?php endif; ?>
                        </td>
                        
                        
                        <td><?php echo e($u->email); ?></td>
                        
                        <td>
                            <?php if($u->role == 1): ?>
                            <?php echo e("Admin"); ?>

                            <?php else: ?>
                            <?php echo e("Thành viên"); ?>

                            <?php endif; ?>
                        </td>
                        <td><?php echo e($u->address); ?></td>
                        <td><?php echo e($u->phone); ?></td>
                        <td class="center">
                            <?php if($u->role!=1): ?>
                            <button class="btn btn-info btn-action">
                            <i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/delete/<?php echo e($u->id); ?>"> Xóa</a></button> <br>
                            <button class="btn btn-default btn-success">
                            <i class="fa fa-pencil fa-fw"></i> <a href="admin/user/edit/<?php echo e($u->id); ?>"> Sửa</a></button>
                            <?php else: ?>
                            <button class="btn btn-default btn-success">
                            <i class="fa fa-pencil fa-fw"></i> <a href="admin/user/edit/<?php echo e($u->id); ?>"> Sửa</a>
                            </button>
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
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/user/list.blade.php ENDPATH**/ ?>