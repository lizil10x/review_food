<header>
        
        <div class="head">
            <h1>FoodMod.vn</h1>
            <div id="search">
                <i class="fa fa-search"></i>
                <input type="search" placeholder="Search"/>
            </div>
            <div class="post">
                <a href="<?php echo e(route('getpost')); ?>"><i class="fa fa-plus-circle"> Đăng</i></a>
                <a href="#"><i class="fa fa-bell"> Thông báo</i></a>
                <!--<img src=""width="50px" height="50px" style="border-radius:50%;">  !-->
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                    <div class="dropdown">
                        <img src="../upload/avatar/<?php echo e(Auth::user()->avatar); ?>" width="50px" height="50px" style="border-radius:50%" alt=""> 
                        <div class="dropdown-content">
                        <?php if(Auth::user()->role == 1): ?>     
                                <a href="<?php echo e(route('Dashboard')); ?>">Quản trị</a>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                                
                                <a href="<?php echo e(route('getInfo',Auth::user()->id)); ?> ">Trang cá nhân</a>
                            <?php else: ?>   
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                                
                                <a href="<?php echo e(route('getInfo',Auth::user()->id)); ?>">Trang cá nhân</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <nav>
            <div id="menu">
                <ul>
                    <li id="home"><a href="<?php echo e(url('/')); ?>"id="home">Trang chủ</a></li>
                    <li><a href="#">Bài viết</a></li>
                </ul>
            </div>
        </nav>
    </header><?php /**PATH C:\xampp\htdocs\blog\resources\views/header.blade.php ENDPATH**/ ?>