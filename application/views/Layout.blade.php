<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>OWS - News</title>

	<!-- Favicon -->
	<link rel="icon" href="<?= base_url()?>asset/img/core-img/favicon.ico">

	<!-- Stylesheet -->
	<link rel="stylesheet" href="<?= base_url()?>asset/css/home.css">
	<link rel="stylesheet" href="<?= base_url()?>asset/css/detail.css">

</head>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
	<div class="spinner">
		<div class="double-bounce1"></div>
		<div class="double-bounce2"></div>
	</div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

	<!-- Navbar Area -->
	<div class="mag-main-menu" id="sticker">
		<div class="classy-nav-container breakpoint-off">
			<!-- Menu -->
			<nav class="classy-navbar justify-content-between" id="magNav">

				<!-- Nav brand -->
				<a href="<?=base_url()?>" class="nav-brand"><img src="<?=base_url()?>asset/img/core-img/ows-logo.png" alt="" style="height: 25px;"></a>

				<!-- Navbar Toggler -->
				<div class="classy-navbar-toggler">
					<span class="navbarToggler"><span></span><span></span><span></span></span>
				</div>

				<!-- Nav Content -->
				<div class="nav-content d-flex align-items-center">
					<div class="classy-menu">

						<!-- Close Button -->
						<div class="classycloseIcon">
							<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
						</div>

						<!-- Nav Start -->
						<div class="classynav">
							<ul>
								<li class="active"><a href="<?= base_url() ?>">Trang Chủ</a></li>
								@foreach($arrParent as $value)
								<li><a href="<?= base_url()."News/Category/".$value["category_id"] ?>">{{ $value['category_name'] }} </a>
									@if(isset($value['category_child']))
									<ul class="dropdown">
										@foreach($value['category_child'] as $rows)
											<li><a href="{{ base_url()."News/Category/".$rows["category_id"] }}">{{ $rows['category_name'] }} </a></li>
										@endforeach
									</ul>
									@endif
								</li>
								@endforeach
								<li><a href="#">Về Chúng Tôi</a></li>
								<li><a href="#">Liên hệ</a></li>
							</ul>
						</div>
						<!-- Nav End -->
					</div>

					<div class="top-meta-data d-flex align-items-center">
						<!-- Top Search Area -->
						<div class="top-search-area">
							<form action="index.html" method="post">
								<input type="search" name="top-search" id="topSearch" placeholder="Gõ Từ Khóa Và Gõ Enter ...">
								<button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>
						<!-- Login -->
						<?php
							if(getCI()->session->userdata('login') != Null){
								$data = getCI()->session->userdata('login');?>
						<a class="dropdown-toggle" data-toggle="dropdown" style="color: #333;background-color: #fff;border-color: #fff; ">
							Xin Chao <?php echo $data["username"]?>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?= base_url()?>Auth/Logout">Logout</a>
						</div>
							<?php }else{
						?>
						<a href="<?= base_url()?>Auth" class="login-btn"><i  class="fa fa-user" aria-hidden="true"></i></a>
						<!-- Submit Video -->
						<?php } ?>
					</div>
				</div>
			</nav>
		</div>
	</div>
</header>
@yield('slide')
@yield('category')
<section class="mag-posts-area d-flex flex-wrap">
	<!-- Left + Main -->

		@yield('main')
	<!-- end Left + Main -->
	<!-- end right -->
		@yield('right')
	<!-- end right -->
</section>
<!-- footer -->
<footer class="footer-area">
	<div class="container">
		<div class="row">
			<!-- Footer Widget Area -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="footer-widget">
					<!-- Logo -->
					<a href="index.html" class="foo-logo"><img src="<?=base_url()?>asset/img/core-img/ows-logo.png" alt=""></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<div class="footer-social-info">
						<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
						<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
			</div>

			<!-- Footer Widget Area -->
			<div class="col-12 col-sm-6 col-lg-6">
				<div class="footer-widget">
					<h6 class="widget-title">Categories</h6>
					<nav class="footer-widget-nav">
						<ul>
							@foreach($arrParent as $value)
								<li><a href="<?= base_url()."News/Category/".$value["category_id"] ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $value['category_name'] }}</span>
									</a>
								</li>
								@if(isset($value['category_child']))
									@foreach($value['category_child'] as $rows)
										<li><a href="<?= base_url()."News/Category/".$rows["category_id"] ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true" style="margin-left: 20px"></i> {{ $rows['category_name'] }}</span>
											</a></li>
									@endforeach
								@endif
							@endforeach
						</ul>
					</nav>
				</div>
			</div>


			<!-- Footer Widget Area -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="footer-widget">
					<h6 class="widget-title">Channels</h6>
					<ul class="footer-tags">
						<li><a href="#">Travel</a></li>
						<li><a href="#">Fashionista</a></li>
						<li><a href="#">Music</a></li>
						<li><a href="#">DESIGN</a></li>
						<li><a href="#">NEWS</a></li>
						<li><a href="#">TRENDING</a></li>
						<li><a href="#">VIDEO</a></li>
						<li><a href="#">Game</a></li>
						<li><a href="#">Sports</a></li>
						<li><a href="#">Lifestyle</a></li>
						<li><a href="#">Foods</a></li>
						<li><a href="#">TV Show</a></li>
						<li><a href="#">Twitter Video</a></li>
						<li><a href="#">Playing</a></li>
						<li><a href="#">clips</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Copywrite Area -->
	<div class="copywrite-area">
		<div class="container">
			<div class="row">
				<!-- Copywrite Text -->
				<div class="col-12 col-sm-6">
					<p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
				<div class="col-12 col-sm-6">
					<nav class="footer-nav">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Privacy</a></li>
							<li><a href="#">Advertisement</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script
		src="http://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous"></script>
<script src="<?= base_url()?>asset/js/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="<?= base_url()?>asset/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="<?= base_url()?>asset/js/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="<?= base_url()?>asset/js/plugins.js"></script>
<!-- Active js -->
<script src="<?= base_url()?>asset/js/active.js"></script>
@yield('script')
<!-- end footer -->

