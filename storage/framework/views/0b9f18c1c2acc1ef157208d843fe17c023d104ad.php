<?php $__env->startSection('content'); ?>
<div id="ed-infomation">
    <div id="bg-nenedit">
            
    </div>
    <div id="edit-infomation">
        <h4 style="  text-align:center;">Chỉnh sửa thông tin</h4>
        <form action="<?php echo e(route('postInfo',$user->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
            <div class="edit-user">
                <div id="edit-img">
                    <img src="../upload/avatar/<?php echo e(Auth::user()->avatar); ?>" id="img-avatar"width="130px" height="130px" style="border-radius:50%;"><br/><br/>
                    <input type="file" name="avatar" id="file-avatar"style="width:200px;"/>
                </div>
                <div id="info-edit">
                <i class="fa fa-envelope"></i><input type="email" name="email" placeholder="Email" value="<?php echo e(Auth::user()->email); ?>" readonly/><br/>
                        <i class="fas fa-user"></i><input type="text" name="name" placeholder="Name" value="<?php echo e(Auth::user()->name); ?>"/><br/>
                        <!--<input type="text" name="full_name" placeholder="Full Name" value="<?php echo e(Auth::user()->full_name); ?>"/><br/> !-->
                        <i class="fas fa-calendar-week"></i><input type="date" name="date_of_birth" value="<?php echo e(Auth::user()->date_of_birth); ?>" maxlength="10"/><br/>
                        <i class="fas fa-venus-mars"></i>
                        <input name="gender" value="1" checked=""
                            <?php if(Auth::user()->gender == 1): ?>
                                <?php echo e("checked"); ?>

                            <?php endif; ?>  
                            type="radio">Nam
                            <input name="gender" value="2"
                            <?php if( Auth::user()->gender == 2): ?>
                                <?php echo e("checked"); ?>

                            <?php endif; ?>
                            type="radio">Nữ </br>
                        <i class="fa fa-map-marker-alt"></i><input type="text" name="address" placeholder="Addrress" value="<?php echo e(Auth::user()->address); ?>"/><br/>
                        <i class="fas fa-phone-alt"></i><input type="number" name="phone" placeholder="Phone" value="<?php echo e(Auth::user()->phone); ?>"/><br/>
                    <div>
                        <button id="huy" onclick="closeinfomation()">Hủy</button>
                        <input type="submit" id="btn-luu" value="Lưu">
                    </div>
                </div>
            </div>
        </form>    
    </div>
</div>
<!--ẢNh bìa-->
<div class="avatar">
            <p> <i class="fa fa-image"></i>Thêm ảnh bìa</p>
        </div>
        <!--THanh cá nhân-->
        <div class="username">
            <!--Tên và ảnh của user-->
            <div id="username">
                <img src="../upload/avatar/<?php echo e(Auth::user()->avatar); ?>" width="130px"  height="130px" style="margin-right:20px;border-radius:50%;"/>
                <h4><?php echo e(Auth::user()->name); ?></h4>
            </div>
            <!--Nút sửa thông tin và btn Login out-->
            <div id="edit-info">
                <button id="btn-edit" onclick="edinfo()">Sửa thông tin</button>
                <button id="btn-loginout"><a href="login.html"> <i class="fa fa-sign-out-alt"></i></a></button>
            </div>
            <!-- Nút đăn bài viết-->
            <div id="post">
                <button id="btn-post"><i class="fa fa-plus-circle"></i>Đăng</button>
            </div>
        </div>
        <!--Thông tin cá nhân user-->
        <div class="content-section">
            <div id="info">
                <div class="gender"><i class="fas fa-venus-mars" style="padding-right:4%;"></i>
                    <span>
                        <?php if(Auth::user()->gender == 1): ?>
                           <?php echo e("Nam"); ?>

                        <?php else: ?>
                           <?php echo e("Nữ"); ?>

                        <?php endif; ?>
                </span>
            </div>
                <div class="place"><i class="fa fa-map-marker-alt"style="padding-right:7%;"></i><span><?php echo e(Auth::user()->address); ?></span></div>
                <div class="phone"><i class="fas fa-phone-alt"></i><span><?php echo e(Auth::user()->phone); ?></span></div>
                <div class="email"><i class="fa fa-envelope"></i><span><?php echo e(Auth::user()->email); ?></span></div>
                <div class="date"><i class="fas fa-calendar-week"></i><span><?php echo e(Auth::user()->date_of_birth); ?>(YY/MM/DD)</span></div>
            </div>
            <!--Bài Post-->
            <div class="content">
                <div class="khung-post">
                <!--Ảnh và ngày post bài-->
                    <div class="grid-content">
                        <div id="img-user">
                            <img src="../img/content.jpg" width="70px" height="70px" style="border-radius:50%;">
                        </div>
                        <div id="first-name">
                            <h6 id="first-name">User</h6>
                        </div>
                        <div id="last-name">
                            <h6 id="last-name">Name</h6>
                        </div>
                        <div id="date">
                            DD/MM/YYYY
                        </div>
                    </div>
                    <!--Nút sửa xóa bài viết-->
                    <div class="add">
                        <i class="fa fa-ellipsis-h"></i>
                        <div class="edit-del">
                            <div id="edit">
                                <i class="fa fa-edit"> Edit</i>
                            </div>
                            <div id="del">
                                <i class="fa fa-trash"> Delete</i>
                            </div>
                        </div>
                    </div>
                    <!---Noi dung bai post-->
                    <div class="content-post">
                        <div class="img-post">
                            <a href="#"><img src="../img/content-post.jpg" width="300px" height="200px" style="border-radius:5px;"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h2>ABC</h2></a>
                        </div>
                        <div class="danhgia">
                            gia sao
                        </div>
                        <div class="place">
                            <i class="fa fa-map-marker-alt"></i><span class="span-post">ABCDHFLK</span>
                        </div>
                        <div class="phone">
                            <i class="fas fa-phone-alt"></i><span class="span-post">ABCDHFLK</span>
                        </div>
                        <div class="time">
                            <i class="fa fa-clock"></i><span class="span-post">ABCDHFLK</span>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/info.blade.php ENDPATH**/ ?>