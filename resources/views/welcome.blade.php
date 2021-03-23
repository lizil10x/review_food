<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="{{ asset('bootstrap/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css') }}" rel="stylesheet">

   <!-- CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <!-- Font awesome -->
    <link href="{{ asset('css/fontawesome-free-5.15.2-web/css/all.css') }}" rel="stylesheet">
   

   <!--script-->
   <script src="../js/app.js"></script>

    <title>Food Mod</title>
</head>
<body>
    
    <header>
        
        <div class="head">
            <h1>FoodMod.vn</h1>
            <div id="search">
                <i class="fa fa-search"></i>
                <input type="search" placeholder="Search"/>
            </div>
            <div class="post">
                <a href="{{ url('dang-bai-viet') }}"><i class="fa fa-plus-circle"> Đăng</i></a>
                <a href="#"><i class="fa fa-bell"> Thông báo</i></a>
                <!--<img src=""width="50px" height="50px" style="border-radius:50%;">  !-->
                @if (Route::has('login'))
                    @auth
                    <div class="dropdown">
                    <img src="../upload/avatar/{{ Auth::user()->avatar }}" width="50px" height="50px" style="border-radius:50%" alt="">
                        <button onclick="myFunction()" class="dropbtn">
                            {{ Auth::user()->name }} <i class="fa fa-angle-down"></i>
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            @if(Auth::user()->role == 1)     
                                <a href="{{ ('admin') }}">Quản trị</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                
                                <a href="{{ url('trang-ca-nhan') }} ">Trang cá nhân</a>
                            @else   
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                
                                <a href="{{ url('trang-ca-nhan') }}">Trang cá nhân</a>
                            @endif
                        </div>
                    </div>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
        <nav>
            <div id="menu">
                <ul>
                    <li id="home"><a href="#" id="home">Trang chủ</a></li>
                    <li><a href="#">Bài viết</a></li>
                    
                </ul>
            </div>
        </nav>
        <div class="bgsearch">
           <div id="bgsearch-add">
                <h2>Tìm nhà hàng hoàn hảo của bạn</h2>
                <form method="get" action="">
                    <div id="bgsearch-search">
                        <i class="fa fa-search"></i>
                        <input type="search" placeholder="Tên nhà hàng"/>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <section>
        <div class="content">
            <div id="img-like" style="margin:30px 35px;">
                <img src="../img/like.jpg">
            </div>
            <div class="content-view">
            <div class="container">
                <div class="filter">
                    <!--<span id="deal">HOT</span>
                    <p id="span-text">ƯU ĐÃI ĐẶC BIỆT</p>-->
                    <select><option disabled="disabled" selected="selected">---> Sắp xếp</option>
                        <option value="decrease"> Đánh giá cao </option>
                        <option value="ascending"> Đánh giá thấp </option></select>
                </div>
                <div class="slide-gift">
                    <div class="img-content">
                        <a href="#"> <img src="../img/content.jpg" class="anh"width="100%"/>
                        <h5 id="name-restaurant">Phở HÀ NỘI</h5></a>
                            <span id="danhgia">5 sao</span><span id="number-danhgia">30000 đánh giá</span>
                            <p id="place">Hà Nội, Việt Nam</p>
                    </div>
    <!--Test-->
                    <div class="img-content">
                        <a href="#"> <img src="../img/content.jpg"class="anh"  width="100%"/>
                        <h5 id="name-restaurant">Phở HÀ NỘI</h5>
                            <span id="danhgia">5 sao</span><span id="number-danhgia">30000 đánh giá</span>
                            <p id="place">Hà Nội, Việt Nam</p>
                    </div>
                    <div class="img-content">
                        <a href="#"> <img src="../img/content.jpg" class="anh" width="100%"/>
                        <h5 id="name-restaurant">Phở HÀ NỘI</h5>
                            <span id="danhgia">5 sao</span><span id="number-danhgia">30000 đánh giá</span>
                            <p id="place">Hà Nội, Việt Nam</p>
                    </div>
                    <div class="img-content">
                        <a href="#"> <img src="../img/content.jpg" class="anh" width="100%"/>
                        <h5 id="name-restaurant">Phở HÀ NỘI</h5>
                        <span id="danhgia">5 sao</span><span id="number-danhgia">30000 đánh giá</span>
                        <p id="place">Hà Nội, Việt Nam</p>
                        
                    </div>
                    <div class="img-content">
                        <a href="#"> <img src="../img/content.jpg" class="anh" width="100%"/>
                        <h5 id="name-restaurant">Phở HÀ NỘI</h5>
                        <span id="danhgia">5 sao</span><span id="number-danhgia">30000 đánh giá</span>
                        <p id="place">Hà Nội, Việt Nam</p>
                        
                    </div>
                    <div class="img-content">
                        <a href="#"> <img src="../img/content.jpg"class="anh"  width="100%"/>
                        <h5 id="name-restaurant">Phở HÀ NỘI</h5>
                        <span id="danhgia">5 sao</span><span id="number-danhgia">30000 đánh giá</span>
                        <p id="place">Hà Nội, Việt Nam</p>
                        
                    </div>
                    <div class="img-content">
                        <a href="#"> <img src="../img/content.jpg"class="anh"  width="100%"/>
                        <h5 id="name-restaurant">Phở HÀ NỘI</h3>
                        <span id="danhgia">5 sao</span><span id="number-danhgia">30000 đánh giá</span>
                        <p id="place">Hà Nội, Việt Nam</p>
                        
                    </div>
                    <div class="img-content">
                        <a href="#"> <img src="../img/content.jpg"class="anh"  width="100%"/>
                        <h5 id="name-restaurant">Phở HÀ NỘI</h3>
                        <span id="danhgia">5 sao</span><span id="number-danhgia">30000 đánh giá</span>
                        <p id="place">Hà Nội, Việt Nam</p>
                    </div>
                    <div class="img-content">
                        <a href="#"> <img src="../img/content.jpg"class="anh"  width="100%"/>
                        <h5 id="name-restaurant">Phở HÀ NỘI</h3>
                        <span id="danhgia">5 sao</span><span id="number-danhgia">30000 đánh giá</span>
                        <p id="place">Hà Nội, Việt Nam</p>
                    </div>
                    <div class="img-content">
                        <a href="#"> <img src="../img/content.jpg" class="anh" width="100%"/>
                        <h5 id="name-restaurant">Phở HÀ NỘI</h3>
                        <span id="danhgia">5 sao</span><span id="number-danhgia">30000 đánh giá</span>
                        <p id="place">Hà Nội, Việt Nam</p>
                    </div>
                    <div class="img-content">
                        <a href="#"> <img src="../img/content.jpg"class="anh"  width="100%"/>
                        <h5 id="name-restaurant">Phở HÀ NỘI</h3>
                        <span id="danhgia">5 sao</span><span id="number-danhgia">30000 đánh giá</span>
                        <p id="place">Hà Nội, Việt Nam</p>
                    </div>
                    <div class="img-content">
                        <a href="#"> <img src="../img/content.jpg" class="anh" width="100%"/>
                        <h5 id="name-restaurant">Phở HÀ NỘI</h3>
                        <span id="danhgia">5 sao</span><span id="number-danhgia">30000 đánh giá</span>
                        <p id="place">Hà Nội, Việt Nam</p>
                    </div>
                    <!--End test-->
                </div>
            </div>
            </div>
            <div class="container">
                <div class="row">
                    <ul class="pagination">
                        <li><a href="#" class="page-link">&laquo;</a></li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li><a href="#" class="page-link">2</a></li>
                        <li><a href="#" class="page-link">3</a></li>
                        <li><a href="#" class="page-link">4</a></li>
                        <li><a href="#" class="page-link">5</a></li>
                        <li><a href="#" class="page-link">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </section>
    <footer>
        <div class="detail">
            <h1 >FoodMod.vn</h1>
            <p >&copy; Nhóm 8 - LTMT2 K10</p>
            <p ><i class="fab fa-facebook"></i>
                <i class="fa fa-envelope"></i>
                <i class="fab fa-linkedin"></i></p>
        </div>
    </footer>

    
</body>
</html>