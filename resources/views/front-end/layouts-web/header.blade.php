<header>
    <div class="top_nav" id="top_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_nav_left">Miễn phí vận chuyển trong thành phố</div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="top_nav_right">
                        @guest
                        <div class="dropdown show">
                            <a class="btn dropdown-toggle line-h-2" style="color: white;" href="#" role="button"
                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tài khoản
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                <a class="dropdown-item" href="{{route('dang-ky')}}">Đăng Kí</a>
                                <a class="dropdown-item" href="{{route('dang-nhap')}}">Đăng Nhập</a>
                            </div>
                        </div>
                        @else
                        <li class="nav-item dropdown" style="line-height: 13px">
                            <a style="color: #fff;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Chào
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-navbar bg-white py-2">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <div class="site-logo">
                        <a href="{{ route('trang-chu') }}" class="js-logo-clone">
                            <img src="images/logo.svg" alt="" style="width: 70px;height: 70px;">
                        </a>
                    </div>
                </div>
                <div class="main-nav">
                    <nav class="site-navigation text-right text-md-center" role="navigation">
                        <input type="checkbox" id="check">
                        <label for="check" class="checkbtn">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </label>
                        <ul class="site-menu d-lg-block">
                            <li class="active"><a href="{{route('trang-chu')}}">Trang Chủ</a></li>
                            <li class="collap">
                                <a class="btn" data-toggle="collapse" href="#collapseExample" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    Danh Mục
                                </a>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body border-top-0 border-bottom-0">
                                        <ul>
                                            @foreach ($categories as $item)
                                            <li class="has-children">
                                                <a href="">{{$item->name}}</a>
                                            </li>
                                            @endforeach
                                        </ul>

                                    </div>
                                </div>
                            </li>
                            <li class="has-children hide">
                                <a>Loại Sản phẩm</a>
                                <ul class="dropdown">
                                    @foreach ($categories as $item)
                                    <li class="has-children">
                                        <a href="{{route('san-pham', $item->id)}}">{{$item->name}}</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="has-children hide">
                                <a href="#">Thương hiệu</a>
                                <ul class="dropdown">
                                    @foreach ($brands as $item)
                                    <li class="has-children">
                                    <a href="{{route('thuong-hieu', $item->id)}}">{{$item->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('contact')}}">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="icons">
                    <a class="icons-btn d-inline-block">
                        <span>
                            <form method="GET" action="{{route('search')}}">
                                <div class="searchBox">
                                    <input type="text" class="searchInput" name="key" placeholder="Tìm kiếm"
                                        style="z-index: 99; background-color:#f8f2f2">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </form>
                        </span>
                    </a>
                    <a class="icons-btn d-inline-block bag">
                        <span onclick="openNav()" class="nav-cart">
                            @if (!empty(Session::get('cart')))
                            <p class="nav_cart--count" id="countcart">
                                {{count(Session::get('cart'))}}
                            </p>
                            @else
                            <p class="nav_cart--count" id="countcart">
                                0
                            </p>
                            @endif

                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </span>
                        <div id="mySidebar" class="sidebar" >
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                                X
                            </a>
                            <span>Giỏ Hàng</span>
                            <div class="list-item" id="showCartHeader">
                                @if (!empty(Session::get('cart')))
                                @foreach (Session::get('cart') as $cart)
                                <div class="item checkout-item border-0">
                                    <div class="cart_image" style=" width:60px;">
                                        <img src="{{ $cart['image_id'] }}" alt="" />
                                    </div>
                                    <div class="cart_description cart_description2">
                                    <span style="font-size: 11px;">{{$cart['name']}}</span>
                                        <span style="font-size: 11px;">x {{$cart['qty']}}</span>
                                    </div>
                                    <div class="cart_total-price text-right" style="width: 30%;">
                                        <p style="font-size: 14px;">
                                            {{$cart['total']}} đ
                                        </p>
                                    </div>

                                </div>
                                @endforeach

                            @else
                            <div class="item checkout-item border-0">
                              <p>Chưa có sản phẩm nào trong giỏ hàng</p>
                            </div>
                            @endif
                            </div>
                            <a href="/cart/delete" style="font-size:16px">Xoá</a>
                            <a href="/gio-hang" class="p-0 d-inline">
                                <button class="btn-hover h-10">Đến giỏ hàng </button>
                            </a>
                        @guest
                        <a href="{{route('dang-nhap')}}" class="p-0 d-inline">
                            <button class="btn-hover h-10">Thanh toán </button>
                        </a>
                        @else
                        <a href="{{route('thanh-toán')}}" class="p-0 d-inline">
                            <button class="btn-hover h-10">Thanh toán </button>
                        </a>
                        @endguest
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
