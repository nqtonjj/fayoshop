@extends('front-end.master')
@section('title', 'Blog')

@section('content')

<div class="super_container" id="main">
	<section class="single-banner">
		<div class="single__banner-img">
			<div class="single__banner-text line">
				<p class="text-line">
					BLOG
				</p>
			</div>
		</div>
	</section>
	<div class="container contact_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">Trang chủ</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog</a></li>
					</ul>
				</div>

			</div>
		</div>

		<!-- Contact Us -->

		<div class="row">
            <div class="blogs">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                        </div>
                    </div>
                    <div class="row blogs_container">
                        <div class="col-lg-4 blog_item_col">
                            <div class="blog_item">
                                <div class="blog_background">
                                    <img src="images/blog_1.jpg" alt="" srcset="">
                                </div>
                                <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                                    <h4 class="blog_title">Here are the trends I see coming this fall</h4>
                                    <span class="blog_meta">by admin | dec 01, 2017</span>
                                    <a class="blog_more" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 blog_item_col">
                            <div class="blog_item">
                                <div class="blog_background">
                                    <img src="images/blog_2.jpg" alt="" srcset="">
                                </div>
                                <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                                    <h4 class="blog_title">Here are the trends I see coming this fall</h4>
                                    <span class="blog_meta">by admin | dec 01, 2017</span>
                                    <a class="blog_more" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 blog_item_col">
                            <div class="blog_item">
                                <div class="blog_background">
                                    <img src="images/blog_3.jpg" alt="" srcset="">
                                </div>
                                <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                                    <h4 class="blog_title">Here are the trends I see coming this fall</h4>
                                    <span class="blog_meta">by admin | dec 01, 2017</span>
                                    <a class="blog_more" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="col-lg-6">
			</div>

			<div class="col-lg-6">

			</div>
		</div>
		<!-- Map Container -->
	</div>
	<!-- Footer -->
	<footer class="site-footer mt-5">
		<div class="container">
		  <div class="row">
			<div class="col-sm-12 col-md-6">
			  <h6>FAYO Shop</h6>
			  <p class="text-justify">FAYO là một thường hiệu thời trang Việt Nam dành cho giới trẻ.
				FAYO mang ý nghĩa You are My everything

				--

				Streetwear của giới trẻ Việt đang phát triển không ngừng và ngày càng khó tính hơn, kiểu cách hơn...

				Theo xu hướng, FAYO.vn đang có những bước chuyển mình đầy táo bạo...

				 </p>
			</div>

			<div class="col-xs-6 col-md-3">
			  <h6>HỖ TRỢ</h6>
			  <ul class="footer-links">
				<li><a href="http://scanfcode.com/category/c-language/">Vận Chuyển</a></li>
				<li><a href="http://scanfcode.com/category/front-end-development/">Chính sách đổi trả</a></li>
				<li><a href="http://scanfcode.com/category/back-end-development/">Chính sách bảo hành</a></li>
				<li><a href="http://scanfcode.com/category/java-programming-language/">Khách hàng VIP</a></li>
				<li><a href="http://scanfcode.com/category/android/">Đối tác cung cấp</a></li>
				<li><a href="http://scanfcode.com/category/templates/">Chăm sóc khách hàng</a></li>
			  </ul>
			</div>

			<div class="col-xs-6 col-md-3">
			  <h6>Thông tin về công ty</h6>
			  <ul class="footer-links">
				<li><a href="http://scanfcode.com/about/">Giới thiệu</a></li>
				<li><a href="http://scanfcode.com/about/">Liên hệ</a></li>
				<li class="mt-4"><a href="http://scanfcode.com/about/"><img src="images/congthuong.png" alt=""></a></li>
			  </ul>
			</div>
		  </div>
		  <hr>
		</div>
		<div class="container">
		  <div class="row">
			<div class="col-md-8 col-sm-6 col-xs-12">
		   <a href="#">FAYO nghĩa là Fashion Young</a>.
			  </p>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
			  <ul class="social-icons">
				<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a class="linkedin" href="#"><i class="fa fa-instagram"></i></a></li>
			  </ul>
			</div>
		  </div>
		</div>
	</footer>

</div>
@endsection
