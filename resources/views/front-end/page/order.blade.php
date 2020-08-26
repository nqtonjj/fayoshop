@extends('front-end.master')
@section('title', 'Thanh toán')

@section('content')

<section class="single-banner">
    <div class="single__banner-img">
        <div class="single__banner-text line">
            <p class="text-line">
                CheckOut
            </p>
        </div>
    </div>
</section>
<!-- main -->
<div class="container product_section_container">
    <div class="row">
        <div class="col-12 product_section clearfix">
            <!-- Breadcrumbs -->
            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Check
                            out</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- cart -->
        <div class="col-6">
            <form action="/order" method="post">
                @if (session('alert'))
                <div class="alert alert-success">
                    {{ session('alert') }}
                </div>
                @endif
                @csrf
                <h4>Thông tin giao hàng</h4>
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email của bạn"
                        value="{{ Auth::user()->email }}">
                </div>
                <div class="form-group">
                    <label for="inputCheckoutName">Họ tên người mua</label>
                    <input type="text" name="name" class="form-control" data-model="name" placeholder="Họ tên người mua"
                        value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Địa chỉ giao hàng</label>
                    <input type="text" class="form-control" data-model="address" id="inputAddress"
                        placeholder="1234 Main St" name="is_address">
                </div>
                <div class="form-group">
                    <label for="inputPhone">Số điện thoại</label>
                    <input type="text"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/^\+?(?:0|84)(?:\d){12}$/g, '');"
                        class="form-control" data-model="sdt" id="inputAddress2" placeholder="+84984566143"
                        name="is_numberphone">
                </div>
                <h4>Thanh toán online</h4>
                <div class="form-group">
                    <label for="inputNamecard">Tên Card</label>
                    <input type="text" class="form-control" id="" placeholder="Tên card của bạn">
                </div>
                <div class="form-group">
                    <label for="inputNumbercard">Số thẻ của bạn</label>
                    <input type="text" class="form-control" id="" placeholder="Số thẻ của bạn">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputExpiry">Expiry</label>
                        <input type="date" class="form-control" id="inputExpiry">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCVC">CVC code</label>
                        <input type="text" class="form-control" id="inputCVC">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>

                <button type="submit" class="btn review_submit_btn">
                    Hoàn thành thanh toán
                </button>
            </form>
        </div>
        <div class="col-6">
            <div class="cart-checkout">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Thông tin đơn hàng</h4>
                        <span class="font-weight-bold">
                            Tên người nhận :
                        </span>
                        <br>
                        <span class="font-italic" data-binding="name">FPT</span>
                        </p>
                        <p> <span class="font-weight-bold"> Địa chỉ giao : </span><br>
                            <span class="font-italic" data-binding="address">778/B1 Nguyễn Kiệm, Phường 3, Phú Nhuận, Hồ
                                Chí Minh</span></p>
                        <p>
                            <span class="font-weight-bold">
                                Số điện thoại người nhận :
                            </span>
                            <br>
                            <span class="font-italic" data-binding="sdt"> +84981725836 </span>
                        </p>
                        <p class="card-text border-0">Miễn phí vận chuyển</p>
                        <p>
                            @foreach (Session::get('cart') as $item)
                            <div class="item checkout-item">
                                <div class="cart_image">
                                    <img src="{{$item['image_id']}}" alt="" />
                                </div>

                                <div class="cart_description">
                                    <span>{{$item['name']}}</span>
                                    <span>x {{$item['qty']}}</span>
                                    <span>White</span>
                                </div>
                                <div class="cart_total-price">
                                    {{number_format($item['total'])}} đ
                                </div>
                            </div>
                            @endforeach

                            <p class="card-text">
                                <span style="font-size: 25px;">Tổng :</span>
                                <span style="color: #FF5740;font-size: 25px;float: right;"> {{$subtotal}} đ</span>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
