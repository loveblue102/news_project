@extends('Layout')
@section('slide')
	<section class="breadcrumb-area bg-img bg-overlay"
			 style="background-image: url(<?= base_url() ?>'asset/img/bg-img/41.jpg');">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12">
					<div class="breadcrumb-content">
						<h2>
							{{ isset($arrCategory["parent"]) ? $arrCategory["parent"]." / ".$arrCategory["category_name"] : $arrCategory["category_name"]  }}
						</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('category')
	<div class="mag-breadcrumb py-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
							@if(isset($arrCategory["parent"]))
							<li class="breadcrumb-item"><a href="#">{{ $arrCategory["parent"] }}</a></li>
							<li class="breadcrumb-item"><a href="#">{{ $arrCategory["category_name"] }}</a></li>
							@else
								<li class="breadcrumb-item"><a href="#">{{ $arrCategory["category_name"] }}</a></li>
							@endif
							<!--<li class="breadcrumb-item active" aria-current="page">Archive by Category “TRAVEL”</li>-->
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('main')
	<!-- main -->
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-8">
				<div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
					@foreach($data as $value)
					<!-- Single Catagory Post -->
					<div class="single-catagory-post d-flex flex-wrap">
						<!-- Thumbnail -->
						<div class="post-thumbnail bg-img" style="background-image: url(<?= base_url()?>asset/upload/<?= $value["news_image"] ?>);">
						</div>

						<!-- Post Contetnt -->
						<div class="post-content">
							<div class="post-meta">
								@if(isset($arrCategory["parent"]))
									<a href="<?= base_url()?>News/Category/<?= $arrCategory["category_parent_id"] ?>">{{ $arrCategory["parent"] }}&nbsp;&nbsp;&nbsp;&nbsp;/</a>
									<a href="<?= base_url()?>News/Category/<?= $arrCategory["category_id"] ?>">{{ $arrCategory["category_name"] }}</a>
								@else
									<a href="<?= base_url()?>News/Category/<?= $arrCategory["category_id"] ?>">{{ $arrCategory["category_name"] }}</a>
								@endif
							</div>
							<a href="<?= base_url()?>News/NewsDetail/<?= $value["news_id"] ?>" class="post-title"><?= $value["news_title"] ?></a>
							<!-- Post Meta -->
							<div class="post-meta-2">
								<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
								<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
								<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
							</div>
							<p><?= $value["news_description"] ?></p>
						</div>
					</div>
					@endforeach

					<!-- Pagination -->
					<nav>
						<ul class="pagination">
							<?= getCI()->pagination->create_links() ?>
						</ul>
					</nav>

				</div>
			</div>
			<!-- end main -->
			@endsection
		@section('right')
			<div class="col-12 col-md-6 col-lg-5 col-xl-4">
				<div class="sidebar-area bg-white mb-30 box-shadow">
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
							<h5>Categories</h5>
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
					<div class="single-sidebar-widget">
						<a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
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
			</div>
		</div>
	</div>
				@endsection

