@extends('front-end.master')
@section('title', 'Giỏ Hàng')

@section('content')

    <div class="super_container" id="main">
        <section class="single-banner">
            <div class="single__banner-img">
                <div class="single__banner-text line">
                    <p class="text-line">
                        Giỏ Hàng
                    </p>
                </div>
            </div>
        </section>
        <div class="container product_section_container">
            <div class="row">
                <div class="col-12 product_section clearfix">
                    <!-- Breadcrumbs -->
                    <div class="breadcrumbs d-flex flex-row align-items-center">
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Giỏ
                                    hàng</a></li>
                        </ul>
                    </div>
                </div>
                <!-- cart -->
                <div class="col-8 col-sm-12 col-lg-8">
                    <form>
                        <div class="shopping-cart">
                            <!-- Title -->
                            <div class="title">
                                <h3> Giỏ hàng của bạn</h3>
                            </div>
                          <div id="showCart">
                            @if (!empty(Session::get('cart')))
                            @foreach (Session::get('cart') as $cart)
                                <div class="item">
                                    <div class="cart_image">
                                    <img src="{{$cart['image_id']}}" alt="" />
                                    </div>

                                    <div class="cart_description">
                                        <span>{{$cart['name']}}</span>
                                        <span>x {{$cart['qty']}}</span>
                                    </div>

                                    <div class="cart_quantity">
                                        <button class="plus-btn" type="button" name="button" idsp={{$cart['id']}}>
                                            <img src="plus.svg" alt="" />
                                            <span>+</span>
                                        </button>
                                        <input type="number" class="qty{{$cart['id']}}" name="qty" value="{{$cart['qty']}}">
                                        <button class="minus-btn" type="button" name="button" idsp={{$cart['id']}}>
                                            <span>-</span>
                                        </button>
                                    </div>
                                    <div class="cart_total-price">
                                        {{$cart['total']}}đ
                                        ({{$cart['price']}}đ)
                                    </div>
                                    <button type="button" idsp={{$cart['id']}} class="btn-danger btn-pad delCart">
                                        <span>X</span>
                                    </button>
                                </div>
                            @endforeach
                        @else
                            <div class="item">
                                <h5>Bạn chưa có sản phẩm nào trong giỏ hàng</h5>
                            </div>
                        @endif
                          </div>
                            <!-- Product #1 -->


                        </div>
                        <div class="row mt-2">
                            <div class="col-8">
                                <a href="#">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i> Tiếp tục mua hàng</a> </div>
                            <div class="col-4">
                                <div class="cart-update">
                                    <button class="btn-hover color-5">Cập nhập giỏ hàng</button>
                                    <button type="button" class="btn" style="color: black;">Cập nhật
                                            giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-4 col-sm-12 col-lg-4">
                    <div class="cart-checkout" id="cart-checkout">
                        <div class="card position-sticky">
                            <div class="card-body">
                                <h4 class="card-title">Đơn hàng của bạn</h4>
                                <p class="card-text border-0" style="color: #b9b4c7;">Miễn phí vận chuyển trong thành
                                    phố</p>
                                <p class="card-text border-0">
                                    <span>Tạm tính :</span>
                                    <span class="total-cart" style="font-size: 18px;float: right;"> {{$subtotal}} đ</span>
                                </p>
                                <p class="card-text">
                                    <span style="font-size: 18px;">Tổng :</span>
                                    <span class="total-cart" style="color: #FF5740;font-size: 18px;float: right;"> {{$subtotal}} đ</span>
                                </p>
                            </div>
                        </div>
                        @guest
                        <button class="btn-hover color-11" ><a style="color: #fff;" href="{{route('dang-nhap')}}" >Thanh toán</a></button>
                        @else
                        <button class="btn-hover color-11"><a style="color: #fff;" href="{{route('thanh-toan')}}" >Thanh toán</a></button>
                        @endguest
                        <ul class="list-group list-group-flush text-center mt-2">

                            <!-- <li class="list-group-item list-group__bg">Thanh toán</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
