<!DOCTYPE html>
<html lang="en">

<head>
<base href="{{asset('front-end')}}/">
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="styles/single_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="styles/homeresponsive.css">
	<link rel="stylesheet" href="styles/swiper.min.css">
</head>

<body>
	<div class="super_container" id="main">
        @include('front-end.layouts-web.header')
		<!-- main -->
		<!-- banner -->
		<!--  -->

		<!-- Tabs -->


		<!-- banner center -->
        @yield('content')

		<!-- best sell -->



		<!-- brand -->


		  <!-- News -->

        <!-- Footer -->

		<footer class="site-footer mt-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<h6>FAYO Shop</h6>
						<p class="text-justify">FAYO là một thường hiệu thời trang Việt Nam dành cho giới trẻ.
							FAYO mang ý nghĩa You are My everything

							--

							Streetwear của giới trẻ Việt đang phát triển không ngừng và ngày càng khó tính hơn, kiểu
							cách hơn...

							Theo xu hướng, FAYO.vn đang có những bước chuyển mình đầy táo bạo...

						</p>
					</div>

					<div class="col-xs-6 col-md-3">
						<h6>HỖ TRỢ</h6>
						<ul class="footer-links">
							<li><a href="http://scanfcode.com/category/c-language/">Vận Chuyển</a></li>
							<li><a href="http://scanfcode.com/category/front-end-development/">Chính sách đổi trả</a>
							</li>
							<li><a href="http://scanfcode.com/category/back-end-development/">Chính sách bảo hành</a>
							</li>
							<li><a href="http://scanfcode.com/category/java-programming-language/">Khách hàng VIP</a>
							</li>
							<li><a href="http://scanfcode.com/category/android/">Đối tác cung cấp</a></li>
							<li><a href="http://scanfcode.com/category/templates/">Chăm sóc khách hàng</a></li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3">
						<h6>Thông tin về công ty</h6>
						<ul class="footer-links">
							<li><a href="http://scanfcode.com/about/">Giới thiệu</a></li>
							<li><a href="http://scanfcode.com/about/">Liên hệ</a></li>
							<li class="mt-4"><a href="http://scanfcode.com/about/"><img src="images/congthuong.png"
										alt=""></a></li>
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

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="js/swiper.js"></script>
	<!-- <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script> -->
	<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
	<script src="{{ asset('front-end/js/custom.js') }}"></script>
	<script src="{{ asset('front-end/js/OrderCart.js') }}"></script>
	<script src="js/custom-swiper.js"></script>
	<script>
		function openNav() {
			document.getElementById("mySidebar").style.width = "250px";
			document.getElementById("main").style.marginRight = "250px";
		}

		function closeNav() {
			document.getElementById("mySidebar").style.width = "0";
			document.getElementById("main").style.marginRight = "0";
		}
	</script>
</body>

</html>
