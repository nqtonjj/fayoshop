<header>
    <div class="top_nav" id="top_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_nav_left">Miễn phí vận chuyển trong thành phố</div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="top_nav_right">
                        <div class="dropdown show">
                            <a class="btn dropdown-toggle line-h-2" style="color: white;" href="#" role="button"
                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tài khoản
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                    <a class="dropdown-item" href="#">Đăng Kí</a>
                            <a class="dropdown-item" href="{{route('dang-nhap')}}">Đăng Nhập</a>

                            </div>
                        </div>
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
                                <a >Loại Sản phẩm</a>
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
                                        <a href="#">{{$item->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('contact')}}">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="icons" >
                    <a class="icons-btn d-inline-block">
                        <span>
                        <form  method="GET" action="{{route('search')}}">
                            <div class="searchBox">
                                <input type="text" class="searchInput" name="key" placeholder="Tìm kiếm"  style="z-index: 99; background-color:#f8f2f2">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                           </form>
                        </span>
                    </a>
                    <a class="icons-btn d-inline-block bag">
                        <span onclick="openNav()" class="nav-cart">
                            <p class="nav_cart--count">
                                3
                            </p>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </span>
                        <div id="mySidebar" class="sidebar">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                                X
                            </a>
                            <span>Giỏ Hàng</span>
                            <div class="list-item">
                                <div class="item checkout-item border-0">
                                    <div class="cart_image" style=" width:60px;">
                                        <img src="images/product_4.png" alt="" />
                                    </div>
                                    <div class="cart_description cart_description2">
                                        <span style="font-size: 11px;">Common Projects</span>
                                        <span style="font-size: 11px;">x 3</span>
                                        <span style="font-size: 11px;">White</span>
                                    </div>
                                    <div class="cart_total-price text-right" style="width: 30%;">
                                        <p style="font-size: 14px;">
                                            150.000 đ
                                        </p>
                                    </div>
                                </div>
                                <div class="item checkout-item border-0">
                                    <div class="cart_image" style=" width:60px;">
                                        <img src="images/product_4.png" alt="" />
                                    </div>
                                    <div class="cart_description cart_description2">
                                        <span style="font-size: 11px;">Common Projects</span>
                                        <span style="font-size: 11px;">x 3</span>
                                        <span style="font-size: 11px;">White</span>
                                    </div>
                                    <div class="cart_total-price text-right" style="width: 30%;">
                                        <p style="font-size: 14px;">
                                            11.150.000 đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="cart.html" class="p-0 d-inline">
                                <button class="btn-hover h-10">Đến giỏ hàng </button>
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
