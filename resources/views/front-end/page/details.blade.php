@extends('front-end.master')
@section('content')
<section class="single-banner">
    <div class="single__banner-img">
        <div class="single__banner-text line">
            <p class="text-line">
                Áo Pocket
            </p>
        </div>
    </div>
</section>
<div class="container single_product_container">
    <div class="row">
        <div class="col">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="index.html">Trang chủ</a></li>
                    <li><a href="categories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Nam</a>
                    </li>
                    <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Áo Pocket
                            cotton sweatshirt</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-7">
            <div class="single_product_pics">
                <div class="row disml">
                    <div class="imgcontainer ddc-container ddc-container ddc-container ddc-container">
                        <img id="expandedImg" src="images/single_1.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="product_details">
                <div class="product_details_title">
                    <h2>Áo Pocket</h2>
                    <p>Sự kết hợp của FUEGO x TIERA</p>
                </div>
                <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                    <span class="ti-truck"></span><span>Miễn phí vận chuyển</span>
                </div>
                <div class="original_price">950.000 đ</div>
                <div class="product_price">750.000 đ</div>
                <div class="product_color">
                    <span>Select Color:</span>
                    <select name="" id="" class="single-color">
                        <option value="" selected>Chọn size</option>
                        <option value="">36</option>
                        <option value="">37</option>
                        <option value="">38</option>
                    </select>
                </div>
                <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                    <span>Số lượng:</span>
                    <div class="quantity_selector">
                        <span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                        <span id="quantity_value">1</span>
                        <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                    </div>
                    <div class="red_button add_to_cart_button"><a href="#">Thêm vào giỏ hàng</a></div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="tabs_section_container">
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills mt-3" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link active single__nav-custom rounded-0" id="v-pills-home-tab" data-toggle="pill"
                        href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Mô
                        tả</a>
                    <a class="nav-link single__nav-custom rounded-0" id="v-pills-profile-tab" data-toggle="pill"
                        href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">Thông tin</a>
                    <a class="nav-link single__nav-custom rounded-0" id="v-pills-messages-tab" data-toggle="pill"
                        href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false">Bình luận</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content mt-3" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">Đây là mô tả</div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">Đây là thông tin</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <div class="user_review_container d-flex flex-column flex-sm-row">
                            <div class="user">
                                <div class="user_pic"></div>
                            </div>
                            <div class="review">
                                <div class="review_date">27 Aug 2020</div>
                                <div class="user_name">Đỗ Nghĩa</div>
                                <p>Chất lượng tốt</p>
                            </div>
                        </div>
                        <div class="add_review">
                            <form id="review_form" action="post">
                                <div>
                                    <h1>Thêm nhận xét của bạn</h1>
                                    <input id="review_name" class="form_input input_name" type="text"
                                        name="name" placeholder="Tên*" required="required"
                                        data-error="Name is required.">
                                    <input id="review_email" class="form_input input_email" type="email"
                                        name="email" placeholder="Email*" required="required"
                                        data-error="Valid email is required.">
                                </div>
                                <div>
                                    <textarea id="review_message" class="input_review" name="message"
                                        placeholder="Nhận xét của bạn" rows="4" required
                                        data-error="Please, leave us a review."></textarea>
                                </div>
                                <div class="text-left text-sm-right">
                                    <button id="review_submit" type="submit"
                                        class="red_button review_submit_btn trans_300"
                                        value="Submit">Thêm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- best sellers -->
<div class="best_sellers mt-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title new_arrivals_title">
                    <h2>Sản phẩm Hot</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="product_slider_container">
                    <div class="owl-carousel owl-theme product_slider">

                        <!-- Slide 1 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#">
                                        <img class="pic-1" src="images/single_1.jpg">
                                        <img class="pic-2" src="images/single_2.jpg">
                                    </a>
                                    <span class="product-trend-label">Mới</span>
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="card__sell-title"><a href="#">Áo polo</a></h3>
                                    <div class="card__price">
                                        <span style="text-decoration: line-through;font-size: 14px;">150.000
                                            đ</span>
                                        <span style="font-size: 16px;color: tomato;">200.000 đ</span>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#">
                                        <img class="pic-1" src="images/single_1.jpg">
                                        <img class="pic-2" src="images/single_2.jpg">
                                    </a>
                                    <span class="product-trend-label">Mới</span>
                                    <span class="product-discount-label">-20%</span>
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="card__sell-title"><a href="#">Áo Men's Blazer</a></h3>
                                    <span style="text-decoration: line-through;font-size: 14px;">150.000
                                        đ</span>
                                    <span style="font-size: 16px;color: tomato;">200.000 đ</span>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#">
                                        <img class="pic-1" src="images/single_1.jpg">
                                        <img class="pic-2" src="images/single_2.jpg">
                                    </a>
                                    <span class="product-trend-label">Mới</span>
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="card__sell-title"><a href="#">Áo Men's Blazer</a></h3>
                                    <div class="card__price">210.000 đ</div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#">
                                        <img class="pic-1" src="images/single_1.jpg">
                                        <img class="pic-2" src="images/single_2.jpg">
                                    </a>
                                    <span class="product-trend-label">Mới</span>
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="card__sell-title"><a href="#">Áo Men's Blazer</a></h3>
                                    <div class="card__price">210.000 đ</div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#">
                                        <img class="pic-1" src="images/single_1.jpg">
                                        <img class="pic-2" src="images/single_2.jpg">
                                    </a>
                                    <span class="product-trend-label">Mới</span>
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="card__sell-title"><a href="#">Áo Men's Blazer</a></h3>
                                    <div class="card__price">210.000 đ</div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 6 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#">
                                        <img class="pic-1" src="images/single_1.jpg">
                                        <img class="pic-2" src="images/single_2.jpg">
                                    </a>
                                    <span class="product-trend-label">Mới</span>
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="card__sell-title"><a href="#">Áo Men's Blazer</a></h3>
                                    <div class="card__price">210.000 đ</div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 7 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#">
                                        <img class="pic-1" src="images/single_1.jpg">
                                        <img class="pic-2" src="images/single_2.jpg">
                                    </a>
                                    <span class="product-trend-label">Mới</span>
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="card__sell-title"><a href="#">Áo Men's Blazer</a></h3>
                                    <div class="card__price">210.000 đ</div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 8 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#">
                                        <img class="pic-1" src="images/single_1.jpg">
                                        <img class="pic-2" src="images/single_2.jpg">
                                    </a>
                                    <span class="product-trend-label">Mới</span>
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="card__sell-title"><a href="#">Áo Men's Blazer</a></h3>
                                    <div class="card__price">210.000 đ</div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 9 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#">
                                        <img class="pic-1" src="images/single_1.jpg">
                                        <img class="pic-2" src="images/single_2.jpg">
                                    </a>
                                    <span class="product-trend-label">Mới</span>
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="card__sell-title"><a href="#">Áo Men's Blazer</a></h3>
                                    <div class="card__price">210.000 đ</div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 10 -->

                        <div class="owl-item product_slider_item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#">
                                        <img class="pic-1" src="images/single_1.jpg">
                                        <img class="pic-2" src="images/single_2.jpg">
                                    </a>
                                    <span class="product-trend-label">Mới</span>
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="card__sell-title"><a href="#">Áo Cotton sweatshirt</a></h3>
                                    <div class="card__price">300.000 đ</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Navigation -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
