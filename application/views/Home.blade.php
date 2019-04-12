@extends('Layout')
@section('slide')
	<!-- ##### Hero Area Start ##### -->
	<div class="hero-area owl-carousel">
		<!-- Single Blog Post -->
		@foreach($slide as $value)
			<div class="hero-blog-post bg-img bg-overlay"
				 style="background-image: url('<?= base_url()?>asset/upload/<?= isset($value['news_image']) ? $value['news_image'] : "" ?>')">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-12">
							<!-- Post Contetnt -->
							<div class="post-content text-center">
								<div class="post-meta" data-animation="fadeInUp" data-delay="100ms">

									@if(isset($value['categoryParent']))
										<a href="<?= base_url()?>News/Category/<?= $value["categoryParentId"] ?>">{{ $value["categoryParent"] }} &nbsp;&nbsp;&nbsp;&nbsp;/</a>
										<a href="<?= base_url()?>News/Category/<?= $value["categorySlideId"] ?>">{{ $value['categorySlide'] }}</a>
									@else
										<a href="<?= base_url()?>News/Category/<?= $value["categorySlideId"] ?>">{{ $value['categorySlide'] }}</a>
									@endif
								</div>
								<a href="<?= base_url()?>News/NewsDetail/<?= $value["news_id"] ?>" class="post-title"
								   data-animation="fadeInUp" data-delay="300ms">{{ $value["news_title"] }}</a>

							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
	<!-- ##### Hero Area End ##### -->
@endsection
@section('main')
	<!-- ##### left -->
	<div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
		<!-- Sidebar Widget -->
		<div class="single-sidebar-widget p-30">
			<!-- Section Title -->
			<div class="section-heading">
				<h5>Xem Nhiều</h5>
			</div>

			<!-- Single Blog Post -->
			<div class="single-blog-post d-flex">
				<div class="post-thumbnail">
					<img src="<?= base_url()?>asset/img/bg-img/4.jpg" alt="">
				</div>
				<div class="post-content">
					<a href="single-post.html" class="post-title">Global Travel And Vacations Luxury Travel</a>
					<div class="post-meta d-flex justify-content-between">
						<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
						<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
						<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
					</div>
				</div>
			</div>

			<!-- Single Blog Post -->
			<div class="single-blog-post d-flex">
				<div class="post-thumbnail">
					<img src="<?= base_url()?>asset/img/bg-img/5.jpg" alt="">
				</div>
				<div class="post-content">
					<a href="single-post.html" class="post-title">Cruising Destination Ideas</a>
					<div class="post-meta d-flex justify-content-between">
						<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
						<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
						<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
					</div>
				</div>
			</div>

			<!-- Single Blog Post -->
			<div class="single-blog-post d-flex">
				<div class="post-thumbnail">
					<img src="<?= base_url()?>asset/img/bg-img/6.jpg" alt="">
				</div>
				<div class="post-content">
					<a href="single-post.html" class="post-title">The Luxury Of Traveling With</a>
					<div class="post-meta d-flex justify-content-between">
						<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
						<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
						<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
					</div>
				</div>
			</div>

			<!-- Single Blog Post -->
			<div class="single-blog-post d-flex">
				<div class="post-thumbnail">
					<img src="<?= base_url()?>asset/img/bg-img/7.jpg" alt="">
				</div>
				<div class="post-content">
					<a href="single-post.html" class="post-title">Choose The Perfect Accommodations</a>
					<div class="post-meta d-flex justify-content-between">
						<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
						<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
						<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
					</div>
				</div>
			</div>

			<!-- Single Blog Post -->
			<div class="single-blog-post d-flex">
				<div class="post-thumbnail">
					<img src="<?= base_url()?>asset/img/bg-img/8.jpg" alt="">
				</div>
				<div class="post-content">
					<a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
					<div class="post-meta d-flex justify-content-between">
						<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
						<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
						<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
					</div>
				</div>
			</div>
		</div>


		<div class="single-sidebar-widget p-30">
			<!-- Section Title -->
			<div class="section-heading">
				<h5>Tin Yêu Thích</h5>
			</div>

			<!-- Single Blog Post -->
			<div class="single-blog-post d-flex">
				<div class="post-thumbnail">
					<img src="<?= base_url()?>asset/img/bg-img/9.jpg" alt="">
				</div>
				<div class="post-content">
					<a href="single-post.html" class="post-title">Coventry City Guide Including Coventry</a>
					<div class="post-meta d-flex justify-content-between">
						<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
						<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
						<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
					</div>
				</div>
			</div>

			<!-- Single Blog Post -->
			<div class="single-blog-post d-flex">
				<div class="post-thumbnail">
					<img src="<?= base_url()?>asset/img/bg-img/10.jpg" alt="">
				</div>
				<div class="post-content">
					<a href="single-post.html" class="post-title">Choose The Perfect Accommodations</a>
					<div class="post-meta d-flex justify-content-between">
						<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
						<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
						<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
					</div>
				</div>
			</div>

			<!-- Single Blog Post -->
			<div class="single-blog-post d-flex">
				<div class="post-thumbnail">
					<img src="<?= base_url()?>asset/img/bg-img/11.jpg" alt="">
				</div>
				<div class="post-content">
					<a href="single-post.html" class="post-title">Get Ready Fast For Fall Leaf Viewing</a>
					<div class="post-meta d-flex justify-content-between">
						<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
						<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
						<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
					</div>
				</div>
			</div>

			<!-- Single Blog Post -->
			<div class="single-blog-post d-flex">
				<div class="post-thumbnail">
					<img src="<?= base_url()?>asset/img/bg-img/12.jpg" alt="">
				</div>
				<div class="post-content">
					<a href="single-post.html" class="post-title">Global Resorts Network Grn Putting</a>
					<div class="post-meta d-flex justify-content-between">
						<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
						<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
						<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
					</div>
				</div>
			</div>

			<!-- Single Blog Post -->
			<div class="single-blog-post d-flex">
				<div class="post-thumbnail">
					<img src="<?= base_url()?>asset/img/bg-img/13.jpg" alt="">
				</div>
				<div class="post-content">
					<a href="single-post.html" class="post-title">Travel Prudently Luggage And Carry</a>
					<div class="post-meta d-flex justify-content-between">
						<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
						<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
						<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- ##### end left##### -->
	<!-- ##### main ##### -->
	<div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
		<!-- Trending Now Posts Area -->
		<div class="trending-now-posts mb-30">
			<!-- Section Title -->
			<div class="section-heading">
				<h5>Tin Hot</h5>
			</div>

			<div class="trending-post-slides owl-carousel">
				<!-- Single Trending Post -->
				@foreach($hot as $value)
					<div class="single-trending-post">
						<img style="width: 289px;height: 215px;" src="<?= base_url()?>asset/upload/<?= isset($value['news_image']) ? $value['news_image'] : "" ?>"
							 alt="">
						<div class="post-content">
							<a href="<?= base_url()?>Category/<?= $value["categorySlideId"] ?>" class="post-cata">
								@if(isset($value['categoryParent']))
									{{ $value["categoryParent"] }}
									{{ "/ ".$value['categorySlide'] }}
								@else
									{{ $value['categorySlide'] }}
								@endif
							</a>

							<a href="<?= base_url()?>News/NewsDetail/<?= $value["news_id"] ?>"
							   class="post-title">{{ $value["news_title"] }}</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>

		<!-- Feature Video Posts Area -->
		<div class="feature-video-posts mb-30">
			<!-- Section Title -->
			<div class="section-heading">
				<h5>Tin Mới</h5>
			</div>

			<div class="featured-video-posts">
				<div class="row">
					<div class="col-12 col-lg-7">
						<!-- Single Featured Post left -->
						<div class="single-featured-post">
							<!-- Thumbnail -->
							<div class="post-thumbnail mb-50">
								<img src="<?= base_url()?>asset/upload/<?= isset($new[0]['news_image']) ? $new[0]['news_image'] : "" ?>"
									 alt="">
							</div>
							<!-- Post Contetnt -->
							<div class="post-content">
								<div class="post-meta">
									@if(isset($new[0]['categoryParent']))
										<a href="<?= base_url()?>Category/<?= $new[0]["categoryParentId"] ?>">{{ $new[0]["categoryParent"] }}</a>
										<a href="<?= base_url()?>Category/<?= $new[0]["categorySlideId"] ?>">{{ "/ ".$new[0]['categorySlide'] }}</a>
									@else
										<a href="<?= base_url()?>Category/<?= $new[0]["categorySlideId"] ?>"
										   style="margin: 0px">{{ $new[0]['categorySlide'] }}</a>
									@endif
								</div>
								<a href="<?= base_url()?>News/NewsDetail/<?= $new[0]["news_id"] ?>"
								   class="post-title">{{ $new[0]["news_title"] }}    </a>
								<p>{!!  $new[0]["news_description"] !!} </p>
							</div>
							<!-- Post Share Area -->
							<div class="post-share-area d-flex align-items-center justify-content-between">
								<!-- Post Meta -->
								<div class="post-meta pl-3">
									<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
									<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
								</div>
								<!-- Share Info -->
								<div class="share-info">
									<a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
									<!-- All Share Buttons -->
									<div class="all-share-btn d-flex">
										<a href="#" class="facebook"><i class="fa fa-facebook"
																		aria-hidden="true"></i></a>
										<a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										<a href="#" class="google-plus"><i class="fa fa-google-plus"
																		   aria-hidden="true"></i></a>
										<a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-lg-5">
						<!-- Featured Video Posts Slide -->
						<div class="featured-video-posts-slide owl-carousel">

							<div class="single--slide">
								<!-- Single Blog Post -->
								<?php
								unset($new[0]);
								?>
								@foreach($new as $key => $value)
									<div class="single-blog-post d-flex style-3">
										<div class="post-thumbnail">
											<img src="<?= base_url()?>asset/upload/<?= isset($value['news_image']) ? $value['news_image'] : "" ?>"
												 alt="">
										</div>
										<div class="post-content">
											<a href="<?= base_url()?>News/NewsDetail/<?= $value["news_id"] ?>"
											   class="post-title">{{ $value["news_title"] }}</a>
											<div class="post-meta d-flex">
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
												<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
												<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
											</div>
										</div>
									</div>
								@endforeach
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="sports-videos-area">
			<!-- Section Title -->
			<div class="section-heading">
				<h5>Tin Ăn Chơi</h5>
			</div>

			<div class="sports-videos-slides owl-carousel mb-30">
				<!-- Single Featured Post -->
				<div class="single-featured-post">
					<!-- Thumbnail -->
					<div class="post-thumbnail mb-50">
						<img src="<?= base_url()?>asset/upload/<?= isset($newHome[0]['news_image']) ? $newHome[0]['news_image'] : "" ?>"
							 alt="">
					</div>
					<!-- Post Contetnt -->
					<div class="post-content">
						<div class="post-meta">
							<a href="<?= base_url()?>Category/<?= $newHome[0]["maxCategory"]["category_id"] ?>"
							   style="margin: 0px">
								{{ isset($newHome[0]["maxCategory"]["category_name"])?$newHome[0]["maxCategory"]["category_name"]:"" }}
							</a>
						</div>
						<a href="<?= base_url()?>News/NewsDetail/<?= $newHome[0]["news_id"] ?>"
						   class="post-title">{{ $newHome[0]["news_title"] }}</a>
						<p>{!!  $newHome[0]["news_description"]  !!} </p>
					</div>
					<!-- Post Share Area -->
					<div class="post-share-area d-flex align-items-center justify-content-between">
						<!-- Post Meta -->
						<div class="post-meta pl-3">
							<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
							<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
							<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
						</div>
						<!-- Share Info -->
						<div class="share-info">
							<a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
							<!-- All Share Buttons -->
							<div class="all-share-btn d-flex">
								<a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
								<a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			unset($newHome[0]);
			?>
			<div class="row">
				<!-- Single Blog Post -->
				@foreach($newHome as $value)
					<div class="col-12 col-lg-6">
						<div class="single-blog-post d-flex style-3 mb-30">
							<div class="post-thumbnail">
								<img src="<?= base_url()?>asset/upload/<?= isset($value['news_image']) ? $value['news_image'] : "" ?>"
									 alt="">
							</div>
							<div class="post-content">
								<a href="<?= base_url()?>News/NewsDetail/<?= $value["news_id"] ?>"
								   class="post-title">{{ $value['news_title'] }}</a>
								<div class="post-meta d-flex">
									<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
									<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
								</div>
							</div>
						</div>

					</div>
				@endforeach
			</div>

		</div>
	</div>
	<!-- ##### End Main ##### -->

@endsection
@section('right')
	<div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
		<!-- Sidebar Widget -->
		<div class="single-sidebar-widget p-30">
			<!-- Social Followers Info -->
			<div class="social-followers-info">
				<!-- Facebook -->
				<a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
				<!-- Twitter -->
				<a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
				<!-- YouTube -->
				<a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
				<!-- Google -->
				<a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
			</div>
		</div>

		<!-- Sidebar Widget -->
		<div class="single-sidebar-widget p-30">
			<!-- Section Title -->
			<div class="section-heading">
				<h5>Danh Mục</h5>
			</div>

			<!-- Catagory Widget -->
			<ul class="catagory-widgets">
				@foreach($arrParent as $value)
					<li><a href="<?= base_url()."News/Category/".$value["category_id"] ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $value['category_name'] }}</span>
							<span>{{ $value["number_parent"] }}</span>
						</a>
					</li>
					@if(isset($value['category_child']))
						@foreach($value['category_child'] as $rows)
							<li><a href="<?= base_url()."News/Category/".$rows["category_id"] ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true" style="margin-left: 20px"></i> {{ $rows['category_name'] }}</span>
									<span>{{ $rows["number"] }}</span>
								</a></li>
						@endforeach
					@endif
				@endforeach
			</ul>
		</div>

		<!-- Sidebar Widget -->
		<div class="single-sidebar-widget p-30">
			<!-- Section Title -->
			<div class="section-heading">
				<h5>Newsletter</h5>
			</div>

			<div class="newsletter-form">
				<p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
				<form action="#" method="get">
					<input type="search" name="widget-search" placeholder="Enter your email">
					<button type="submit" class="btn mag-btn w-100">Subscribe</button>
				</form>
			</div>

		</div>
	</div>
@endsection
