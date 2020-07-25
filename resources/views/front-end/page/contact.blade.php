@extends('front-end.master')
@section('title', 'Liên Hệ')
@section('content')
<div class="container contact_container">
    <div class="row">
        <div class="col">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="index.html">Trang chủ</a></li>
                    <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Liên hệ</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Contact Us -->

    <div class="row">

        <div class="col-lg-6 contact_col">


            <!-- Follow Us -->

            <div class="follow_us_contents">
                <h1>Theo dõi</h1>
                <div class="row">
                    <div class="col-6 text-center">
                        <img src="images/Maps-Pin-Place-icon.png" alt="" style="width: 100px;height: 100px;">
                        <p class="mt-3">Địa chỉ</p>
                        <span>778/B1 Nguyễn Kiệm, Phường 3, Phú Nhuận, Hồ Chí Minh, Vietnam</span>
                    </div>
                    <div class="col-6 text-center">
                        <img src="images/Mobiles-Tabs-Shopsy.png" alt="" style="width: 100px;height: 100px;">
                        <p class="mt-3">Số điện thoại</p>
                        <span>+84981725836i</span>
                    </div>
                </div>
                <ul class="social d-flex flex-row">
                    <li><a href="#" style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" style="background-color: #41a1f6"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>

        </div>

        <div class="col-lg-6 get_in_touch_col">
            <div class="get_in_touch_contents">
                <h1>Liên hệ với chúng tôi</h1>
                <form action="post">
                    <div>
                        <input id="input_name" class="contact_form_input input_name input_ph" type="text" name="name" placeholder="Tên" required="required" data-error="Name is required.">
                        <input id="input_email" class="contact_form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
                        <textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Message" rows="3" required data-error="Please, write us a message."></textarea>
                    </div>
                    <div>
                        <button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Submit">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Map Container -->
</div>

@endsection
