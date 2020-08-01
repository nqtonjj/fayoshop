@extends('front-end.master')
@section('title', 'Trang chủ')
@section('content')
<section id="banner-header" class="header-banner">
    <div class="banner_carousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="banner">
                    <img src="./images/slider_2.png" alt="banner header" />
                    <div class="caption-car">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 caption">
                                    <h1>Fayo Shop - Cùng bạn đồng hành</h1>
                                    <span class="caption-itr">Chúng tôi luôn luôn lắng nghe mọi người để làm ra
                                        những
                                        bộ đồ tốt nhất, đẹp nhất.
                                    </span>
                                    <div class="caption-button">
                                        <a href="#">MUA NGAY</a>
                                        <a href="#">XEM THÊM</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 caption-animation">
                                    <div class="caption-images">
                                        <div class="caption-image">
                                            <div class="caption-items">
                                                <div class="caption-item">
                                                    <img src="./images/product_4.png" alt="Super Omega 3" />
                                                </div>
                                                <div class="caption-item caption-item-content">
                                                    <img src="./images/product_2.png" alt="Super Omega 3" />
                                                </div>
                                                <div class="caption-item">
                                                    <img src="./images/product_8.png" alt="Ảnh này để gì thì để" />
                                                </div>
                                            </div>
                                            <div class="loader-caption"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner">
                    <img src="./images/slider_1.jpg" alt="banner header" class="home__img-trans" />
                    <div class="caption-car">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 caption">
                                </div>
                                <div class="col-lg-6 col-md-6 caption-animation">
                                    <div class="caption-images">
                                        <div class="caption-image">
                                            <div class="caption-items">
                                                <div class="caption-item">
                                                    <span>Giảm 20%</span>
                                                    <img src="./images/product_1.png" alt="" />
                                                </div>
                                                <div class="caption-item caption-item-content">
                                                    <span>Xu hướng</span>
                                                    <img src="./images/product_3.png" alt="" />
                                                </div>
                                                <div class="caption-item">
                                                    <span>Sưu tầm</span>
                                                    <img src="./images/product_7.png" alt="" />
                                                </div>
                                            </div>
                                            <div class="loader-caption"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination indicators"></div>
        </div>
</section>

<section class="medel mt-5 mb-5">
    <div class="container">
        <div class="backgroup-ad" style="max-width: 1140px;">
            <img src="./images/chatluong.svg" alt="" style="width: 100%;" />
        </div>
        <div class="row">
            <div class="items-ad">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="items">
                        <div class="item">
                            <img src="./images/medal.svg" alt="" />
                        </div>
                    </div>
                    <div class="items-text">
                        <p>Chất lượng</p>
                        <span>Đạt tiêu chuẩn Quốc Tế</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="items">
                        <div class="item">
                            <img src="./images/free-delivery.svg" alt="" />
                        </div>
                    </div>
                    <div class="items-text">
                        <p>Miễn phí ship</p>
                        <span>Miễn phí vận chuyển Toàn Quốc</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="items">
                        <div class="item">
                            <img src="./images/cash-back.svg" alt="" />
                        </div>
                    </div>
                    <div class="items-text">
                        <p>100% hoàn tiền</p>
                        <span>Hoàn tiền 100% trong 30 ngày</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="items">
                        <div class="item">
                            <img src="./images/operator.svg" alt="" />
                        </div>
                    </div>
                    <div class="items-text">
                        <p>Hỗ trợ 24/7</p>
                        <span>Chúng tôi luôn hỗ trợ 24/7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-tabss mt-5">
    <div class="container">
        <div class="product-nav-tabs mt-5">
            <!-- Nav tabs -->

            <ul class="nav nav-pills">
                <li role="presentation" class="active">
                    <a class="active" href="#home" aria-controls="home" role="tab" data-toggle="tab">Sản phẩm
                        mới</a>
                </li>
                <li role="presentation">
                    <a class="" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sản phẩm
                        giảm giá</a>
                </li>
                <li role="presentation">
                    <a class="" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Sản phẩm
                        Hot</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="tab-1">
                        <div class="swiper-wrapper">
                            @foreach ($featured as $item)
                            <div class="swiper-slide">
                                <div class="product-grid mt-4">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="{{ route('asset.show', $item->image['name']) }}">
                                            <img class="pic-2" src="{{ route('asset.show', $item->image['name']) }}">
                                        </a>
                                        @if ($item['is_new'] === 1 || $item['is_hot'] === 1)
                                        <span
                                            class="product-trend-label">{{ $item['is_hot'] === 1 ? 'Hot' : 'Mới' }}</span>
                                        @endif
                                        <ul class="card_social home__card-social">
                                            <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="card__sell-title">
                                        <a href="{{route('chi-tiet-san-pham', $item->id)}}">{{$item->name}}</a>
                                        </h3>
                                        @if ($item->sale_price == 0)
                                        <span style="font-size: 16px;color: tomato;">
                                            {{number_format($item->price, 0, '', ',').__(' VND')}}
                                        </span>
                                        @else
                                        <span style="text-decoration: line-through;font-size: 13px">
                                            {{number_format($item->sale_price, 0, '', ',').__(' VND')}}
                                        </span>
                                        <span style="font-size: 16px;color: tomato;">
                                            {{number_format($item->price, 0, '', ',').__(' VND')}}
                                        </span>
                                        @endif

                                    </div>

                                </div>
                            </div>
                            <!-- ITEM 2 -->
                            {{-- <div class="swiper-slide">
                                <div class="product-grid mt-4">
                                    <div class="product-image">
                                        <a href="single.html">
                                            <img class="pic-1" src="{{ route('asset.show', $item->image['name']) }}">
                            <img class="pic-2" src="{{ route('asset.show', $item->image['name']) }}">
                            </a>
                            @if ($item['is_new'] === 1 || $item['is_hot'] === 1)
                            <span class="product-trend-label">{{ $item['is_hot'] === 1 ? 'Hot' : 'Mới' }}</span>
                            @endif
                            <ul class="card_social home__card-social">
                                <li><a href="#" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                </li>
                                <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="card__sell-title">
                                <a href="#">{{$item->name}}</a>
                            </h3>
                            <span style="text-decoration: line-through;font-size: 13px;">
                                {{number_format($item->sale_price, 0, '', ',').__(' VND')}}</span>
                            <span style="font-size: 16px;color: tomato;">
                                {{number_format($item->price, 0, '', ',').__(' VND')}}
                            </span>
                        </div>
                    </div>
                </div> --}}
                @endforeach
            </div>
            <div class="swiper-pagination dbrr"></div>
        </div>
    </div>
    <!-- tab discount -->
    <div role="tabpanel" class="tab-pane" id="profile">
        <div class="tab-1">
            <div class="swiper-wrapper">
                {{-- @foreach ($sp_sale as $item)
                            <div class="swiper-slide">
                                <div class="product-grid mt-4">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="{{ route('asset.show', $item->image['name']) }}">
                                            <img class="pic-2" src="{{ route('asset.show', $item->image['name']) }}">
                                        </a>
                                        @if ($item['is_new'] === 1 || $item['is_hot'] === 1)
                                        <span
                                            class="product-trend-label">{{ $item['is_hot'] === 1 ? 'Hot' : 'Mới' }}</span>
                                        @endif
                                        <ul class="card_social home__card-social">
                                            <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="card__sell-title">
                                        <a href="{{route('chi-tiet-san-pham', $item->id)}}">{{$item->name}}</a>
                                        </h3>
                                        @if ($item->sale_price == 0)
                                        <span style="font-size: 16px;color: tomato;">
                                            {{number_format($item->price, 0, '', ',').__(' VND')}}
                                        </span>
                                        @else
                                        <span style="text-decoration: line-through;font-size: 13px">
                                            {{number_format($item->sale_price, 0, '', ',').__(' VND')}}
                                        </span>
                                        <span style="font-size: 16px;color: tomato;">
                                            {{number_format($item->price, 0, '', ',').__(' VND')}}
                                        </span>
                                        @endif

                                    </div>

                                </div>
                            </div>
                @endforeach --}}
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- tab product Hot -->

    <div role="tabpanel" class="tab-pane" id="messages">
        <div class="tab-1">
            <div class="swiper-wrapper">
                @foreach ($sp_hot as $item)
                <div class="swiper-slide">
                    <div class="product-grid mt-4">
                        <div class="product-image">
                            <a href="#">
                                <img class="pic-1" src="{{ route('asset.show', $item->image['name']) }}">
                                <img class="pic-2" src="{{ route('asset.show', $item->image['name']) }}">
                            </a>
                            @if ($item['is_new'] === 1 || $item['is_hot'] === 1)
                            <span
                                class="product-trend-label">{{ $item['is_hot'] === 1 ? 'Hot' : 'Mới' }}</span>
                            @endif
                            <ul class="card_social home__card-social">
                                <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                            class="fa fa-shopping-cart"></i></a></li>
                                <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="card__sell-title">
                            <a href="{{route('chi-tiet-san-pham', $item->id)}}">{{$item->name}}</a>
                            </h3>
                            @if ($item->sale_price == 0)
                            <span style="font-size: 16px;color: tomato;">
                                {{number_format($item->price, 0, '', ',').__(' VND')}}
                            </span>
                            @else
                            <span style="text-decoration: line-through;font-size: 13px">
                                {{number_format($item->sale_price, 0, '', ',').__(' VND')}}
                            </span>
                            <span style="font-size: 16px;color: tomato;">
                                {{number_format($item->price, 0, '', ',').__(' VND')}}
                            </span>
                            @endif

                        </div>

                    </div>
                </div>
    @endforeach

        </div>
 <!-- Add Pagination -->
 <div class="swiper-pagination"></div>
    </div>
    </div>
    </div>
    </div>
</section>

<section class="main-slider mb-5 p-5">
    <div class="container">
        <div class="row">
            <div class="col-6 slider-main mt-5">
                <div class="slider-fayo">
                    <div class="swiper-container swiper-main">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide flex-none">
                                <div class="row">
                                    <div class="slider-images">
                                        <img src="./images/banners/1.jpg" alt="" height="500" />
                                    </div>
                                    <div class="d-table">
                                        <div class="slider-caption">
                                            <h4>clothing</h4>
                                            <h2>
                                                <span>Men Collections</span>
                                            </h2>
                                            <p>The 10 Best Man Collection 2018</p>
                                            <div class="slider-product-price">
                                                <del>$120.00</del>
                                                <span>$295.00</span>
                                            </div>
                                            <a href="#" class="btn-common mt-4" tabindex="0">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide flex-none">
                                <div class="row">
                                    <div class="slider-images">
                                        <img src="./images/banners/1.jpg" alt="" height="500" />
                                    </div>
                                    <div class="d-table">
                                        <div class="slider-caption">
                                            <h4>clothing</h4>
                                            <h2>
                                                <span>Men Collections</span>
                                            </h2>
                                            <p>The 10 Best Man Collection 2018</p>
                                            <div class="slider-product-price">
                                                <del>$120.00</del>
                                                <span>$295.00</span>
                                            </div>
                                            <a href="#" class="btn-common mt-4" tabindex="0">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="col-6 aside-main mt-5">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 pl-3">
                        <div class="banner-sm hover-effect">
                            <img src="./images/banners/as-1.jpg" alt="" />
                            <div class="banner-info">
                                <h4>Clothing</h4>
                                <p>
                                    Extra <strong>30%</strong> <br />
                                    <strong>Off</strong> All <br />
                                    Sale Styles
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 pl-3">
                        <div class="banner-sm hover-effect mt-sm-20">
                            <img src="./images/banners/banner_5.jpg" alt="" />
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 pl-3 mt-3">
                        <div class="banner-sm hover-effect">
                            <img src="./images/banners/banner_4.jpg" alt="" />
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 pl-3 mt-3">
                        <div class="banner-sm hover-effect mt-20">
                            <img src="./images/banners/banner_2.jpg" alt="" />
                            <div class="banner-info">
                                <h4>Electronics</h4>
                                <p>
                                    Globe Electric <br />
                                    <strong>House &amp; <br />
                                        Appliances</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="best-sell mt-5 mb-5">
    <div class="seller">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mb-5">
                        <h3>Best Sellers</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="best-seller mt-3">
        <div class="container">
            <div class="slider-seller">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-grid mt-4">
                            <div class="product-image">
                                <a href="single.html">
                                    <img class="pic-1" src="images/single_1.jpg">
                                    <img class="pic-2" src="images/single_2.jpg">
                                </a>
                                <span class="product-trend-label">Mới</span>
                                <ul class="card_social">
                                    <li><a href="#" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="card__sell-title"><a href="single.html">Áo Men's Blazer</a>
                                </h3>
                                <div class="card__price">210.000 đ</div>
                            </div>
                        </div>
                        <!--
                            <div class="product-quick-view">
                                <a
                                href="#"
                                data-toggle="modal"
                                data-target="#quick-view"
                                tabindex="-1"
                                >quick view</a
                                >
                            </div> -->
                    </div>
                    <!-- item sell 2 -->

                    <div class="swiper-slide">
                        <div class="product-grid mt-4">
                            <div class="product-image">
                                <a href="single.html">
                                    <img class="pic-1" src="images/single_1.jpg">
                                    <img class="pic-2" src="images/single_2.jpg">
                                </a>
                                <span class="product-trend-label">Mới</span>
                                <ul class="card_social">
                                    <li><a href="#" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="card__sell-title"><a href="single.html">Áo Men's Blazer</a>
                                </h3>
                                <div class="card__price">210.000 đ</div>
                            </div>
                        </div>
                        <!--
                            <div class="product-quick-view">
                                <a
                                href="#"
                                data-toggle="modal"
                                data-target="#quick-view"
                                tabindex="-1"
                                >quick view</a
                                >
                            </div> -->
                    </div>
                    <!-- item sell 3 -->
                    <div class="swiper-slide">
                        <div class="product-grid mt-4">
                            <div class="product-image">
                                <a href="single.html">
                                    <img class="pic-1" src="images/single_1.jpg">
                                    <img class="pic-2" src="images/single_2.jpg">
                                </a>
                                <span class="product-trend-label">Mới</span>
                                <ul class="card_social">
                                    <li><a href="#" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="card__sell-title"><a href="single.html">Áo Men's Blazer</a>
                                </h3>
                                <div class="card__price">210.000 đ</div>
                            </div>
                        </div>
                        <!--
                            <div class="product-quick-view">
                                <a
                                href="#"
                                data-toggle="modal"
                                data-target="#quick-view"
                                tabindex="-1"
                                >quick view</a
                                >
                            </div> -->
                    </div>
                    <!-- item best sell 4 -->
                    <div class="swiper-slide">
                        <div class="product-grid mt-4">
                            <div class="product-image">
                                <a href="single.html">
                                    <img class="pic-1" src="images/single_1.jpg">
                                    <img class="pic-2" src="images/single_2.jpg">
                                </a>
                                <span class="product-trend-label">Mới</span>
                                <span class="product-discount-label">-20%</span>
                                <ul class="card_social">
                                    <li><a href="#" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="card__sell-title"><a href="single.html">Áo Men's Blazer</a>
                                </h3>
                                <div class="card__price">210.000 đ</div>
                            </div>
                        </div>
                        <!--
                            <div class="product-quick-view">
                                <a
                                href="#"
                                data-toggle="modal"
                                data-target="#quick-view"
                                tabindex="-1"
                                >quick view</a
                                >
                            </div> -->
                    </div>

                    <!-- item best sell 5 -->
                    <div class="swiper-slide">
                        <div class="product-grid mt-4">
                            <div class="product-image">
                                <a href="single.html">
                                    <img class="pic-1" src="images/single_1.jpg">
                                    <img class="pic-2" src="images/single_2.jpg">
                                </a>
                                <span class="product-trend-label">Mới</span>
                                <ul class="card_social">
                                    <li><a href="#" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="card__sell-title"><a href="single.html">Áo Men's Blazer</a>
                                </h3>
                                <div class="card__price">210.000 đ</div>
                            </div>
                        </div>
                        <!--
                            <div class="product-quick-view">
                                <a
                                href="#"
                                data-toggle="modal"
                                data-target="#quick-view"
                                tabindex="-1"
                                >quick view</a
                                >
                            </div> -->
                    </div>

                    <!-- item best sell 6 -->
                    <div class="swiper-slide">
                        <div class="product-grid mt-4">
                            <div class="product-image">
                                <a href="single.html">
                                    <img class="pic-1" src="images/single_1.jpg">
                                    <img class="pic-2" src="images/single_2.jpg">
                                </a>
                                <span class="product-trend-label">Mới</span>
                                <ul class="card_social">
                                    <li><a href="#" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="card__sell-title"><a href="single.html">Áo Men's Blazer</a>
                                </h3>
                                <div class="card__price">210.000 đ</div>
                            </div>
                        </div>
                        <!--
                            <div class="product-quick-view">
                                <a
                                href="#"
                                data-toggle="modal"
                                data-target="#quick-view"
                                tabindex="-1"
                                >quick view</a
                                >
                            </div> -->
                    </div>

                    <!-- item best sell 7 -->
                    <div class="swiper-slide">
                        <div class="product-grid mt-4">
                            <div class="product-image">
                                <a href="single.html">
                                    <img class="pic-1" src="images/single_1.jpg">
                                    <img class="pic-2" src="images/single_2.jpg">
                                </a>
                                <span class="product-trend-label">Mới</span>
                                <ul class="card_social">
                                    <li><a href="#" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="card__sell-title"><a href="single.html">Áo Men's Blazer</a>
                                </h3>
                                <div class="card__price">210.000 đ</div>
                            </div>
                        </div>
                        <!--
                            <div class="product-quick-view">
                                <a
                                href="#"
                                data-toggle="modal"
                                data-target="#quick-view"
                                tabindex="-1"
                                >quick view</a
                                >
                            </div> -->
                    </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination dbrr"></div>
            </div>

        </div>
    </div>
</section>

<section class="brands-areaas mt-5">

    <div class="container-fluid">
        <div class="brands-area">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-item">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="./images/brands/1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="./images/brands/2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="./images/brands/3.jpg" alt="" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="./images/brands/1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="./images/brands/2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="./images/brands/3.jpg" alt="" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="./images/brands/1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="./images/brands/2.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news mt-5">
    <div class="news-pa">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>News</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-paper mt-4">
            <div class="container">
                <div class="row new-items">
                    <div class="col-lg-4 col-md-4 news-item">
                        <div class="images-it">
                            <a href="#">
                                <img src="./images/news/blog_1.jpg" alt="" />
                            </a>
                        </div>
                        <div class="date-time">
                            <p class="cal-date-time">
                                <img src="./images/calendar.svg" alt="" /> 11 Th6, 2020
                            </p>
                            <p class="category">Tin khuyến mãi</p>
                        </div>
                        <a href="#" class="title-news-heal">Chương trình tri ân khách hàng</a>
                        <p>
                            Nhân ngày XX/YY/ZZ shop khuyến mãi từ ngày....
                        </p>
                        <p class="button-news">
                            <a href="#" class="btn-news">
                                Xem thêm
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-4 news-item">
                        <div class="images-it">
                            <a href="#">
                                <img src="./images/news/blog_2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="date-time">
                            <p class="cal-date-time">
                                <img src="./images/calendar.svg" alt="" /> 11 Th6, 2020
                            </p>
                            <p class="category">Tin khuyến mãi</p>
                        </div>
                        <a href="#" class="title-news-heal">Chương trình tri ân khách hàng</a>
                        <p>
                            Nhân ngày XX/YY/ZZ shop khuyến mãi từ ngày....
                        </p>
                        <p class="button-news">
                            <a href="#" class="btn-news">
                                Xem thêm
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-4 news-item">
                        <div class="images-it">
                            <a href="#">
                                <img src="./images/news/blog_3.jpg" alt="" />
                            </a>
                        </div>
                        <div class="date-time">
                            <p class="cal-date-time">
                                <img src="./images/calendar.svg" alt="" /> 11 Th6, 2020
                            </p>
                            <p class="category">Tin khuyến mãi</p>
                        </div>
                        <a href="#" class="title-news-heal">Chương trình tri ân khách hàng</a>
                        <p>
                            Nhân ngày XX/YY/ZZ shop khuyến mãi từ ngày....
                        </p>
                        <p class="button-news">
                            <a href="#" class="btn-news">
                                Xem thêm
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
