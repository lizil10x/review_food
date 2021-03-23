<header>
        
        <div class="head">
            <h1>FoodMod.vn</h1>
            <div id="search">
                <i class="fa fa-search"></i>
                <input type="search" placeholder="Search"/>
            </div>
            <div class="post">
                <a href="{{route('getpost')}}"><i class="fa fa-plus-circle"> Đăng</i></a>
                <a href="#"><i class="fa fa-bell"> Thông báo</i></a>
                <!--<img src=""width="50px" height="50px" style="border-radius:50%;">  !-->
                @if (Route::has('login'))
                    @auth
                    <div class="dropdown">
                        <img src="../upload/avatar/{{ Auth::user()->avatar }}" width="50px" height="50px" style="border-radius:50%" alt=""> 
                        <div class="dropdown-content">
                        @if(Auth::user()->role == 1)     
                                <a href="{{ route('Dashboard') }}">Quản trị</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                
                                <a href="{{ route('getInfo',Auth::user()->id) }} ">Trang cá nhân</a>
                            @else   
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                
                                <a href="{{ route('getInfo',Auth::user()->id) }}">Trang cá nhân</a>
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
                    <li id="home"><a href="{{ url('/') }}"id="home">Trang chủ</a></li>
                    <li><a href="#">Bài viết</a></li>
                </ul>
            </div>
        </nav>
    </header>