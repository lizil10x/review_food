
<div class="span3" id="sidebar"> 
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li>
            <a href="admin/dashboard"><i class="icon-chevron-right"></i>Dashboard</a>
        </li>
        <li>
            <a href="admin/user/list"><i class="icon-chevron-right"></i>Quản lý user</a>
        </li>
        <li>
            <a href="admin/post/list"><i class="icon-chevron-right"></i>Quản lý bài viết</a>
        </li>
        <li>
            <a href="<?php echo e(route('getInfo',Auth::user()->id)); ?>"><i class="icon-chevron-right"></i>Thông tin cá nhân</a>
        </li> 
        <li>
            <a href="<?php echo e(route('trang-chu')); ?>"><i class="icon-chevron-right"></i>Thoát</a>
        </li>     
    </ul>
</div><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/layout/menu.blade.php ENDPATH**/ ?>