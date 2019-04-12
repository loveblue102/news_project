@extends('Layout')
@section('slide')
	<!-- ##### Breadcrumb Area Start ##### -->
	<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/49.jpg);">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12">
					<div class="breadcrumb-content">
						<h2>
							{{ isset($param["categoryParent"]) ? $param["categoryParent"]." / ".$param["categorySlide"] : $param["categorySlide"]  }}
						</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ##### Breadcrumb Area End ##### -->
@endsection
@section('category')
	<!-- ##### Breadcrumb Area Start ##### -->
	<div class="mag-breadcrumb py-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>
									Home</a></li>
							@if(isset($param["categoryParent"]))
								<li class="breadcrumb-item"><a href="#">{{ $param["categoryParent"] }}</a></li>
								<li class="breadcrumb-item"><a href="#">{{ $param["categorySlide"] }}</a></li>
							@else
								<li class="breadcrumb-item"><a href="#">{{ $param["categorySlide"] }}</a></li>
							@endif
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- ##### Breadcrumb Area End ##### -->
@endsection
@section('main')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-8">
				<!-- ##### main ##### -->
				<div class="post-details-content bg-white mb-30 p-30 box-shadow">
					<div class="blog-thumb mb-30">
						<img src="<?= base_url()?>asset/upload/<?= $param["news_image"] ?>" alt="">
					</div>
					<div class="blog-content">
						<div class="post-meta">
							@if(isset($param["categoryParent"]))
								<a href="<?= base_url()?>News/Category/<?= $param["categoryParentId"] ?>">{{ $param["categoryParent"] }}</a>
								<a href="<?= base_url()?>News/Category/<?= $param["categorySlideId"] ?>">{{ $param["categorySlide"] }}</a>
							@else
								<a href="<?= base_url()?>News/Category/<?= $param["categorySlideId"] ?>">{{ $param["categorySlide"] }}</a>
							@endif
						</div>
						<h4 class="post-title">{{ $param["news_title"] }}</h4>
						<!-- Post Meta -->
						<div class="post-meta-2">
							<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
							<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
							<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
						</div>
						<h5>{!!   $param["news_description"]  !!}</h5>


						<blockquote>
							<h6 class="quote-text">{!! $param["news_content"] !!}</h6>
						</blockquote>

					</div>
				</div>
				<div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
					<!-- Section Title -->
					<div class="section-heading">
						<h5>Tin Liên Quan</h5>
					</div>

					<div class="row">
						<!-- Single Blog Post -->
						@foreach($arrSame as $value)
							<div class="col-12 col-md-6 col-lg-4">
								<div class="single-blog-post style-4 mb-30">
									<div class="post-thumbnail">
										<img style="width: 203px;height: 203px;" src="<?= base_url()?>asset/upload/<?= $value["news_image"] ?>" alt="">
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
							</div>
						@endforeach
					</div>
				</div>
				<!-- CommentModel Area Start -->
				<div class="comment_area clearfix bg-white mb-30 p-30 box-shadow">
					<!-- Section Title -->
					<div class="section-heading">
						<h5>COMMENTS</h5>
					</div>

					<ol>


					<!-- Single CommentModel Area -->
						<li id="single_comment_area" class="single_comment_area">
							<!-- CommentModel Content -->
							<?php
							if (getCI()->session->userdata('login') != Null){
							?>
							<form action="" method="post">
								<input type="hidden" id="comment_id" name="comment_id" value="{{ $param["news_id"] }}">
								<input type="hidden" id="user_id" name="user_id" value="{{ $param["user_id"] }}">
								<div class="post-author d-flex align-items-center">
									<textarea class="form-control" name="comment" id="comment" cols="30"
											  rows="10"></textarea>
								</div>
								<input value="Post Comment"  type="submit" name="ajax" id="ajax"
									   class="btn mag-btn mt-30 d-flex pull-right"
									   style="margin-top: 0px !important;margin-bottom: 25px;">
							</form>
							<?php }else{ ?>
							<p class="text-center">Ban Can <a href="<?= base_url()?>Auth">Dang Nhap</a> De Viet Binh Luan</p>
							<?php }?>
							<div  style="clear: both"></div>

							<div id="comment-content">

							</div>
								@foreach($comment as $key => $value)
							<!-- CommentModel Author -->
							<div class="comment-content d-flex" >
								<div class="comment-author">
									<img src="<?= base_url()?>asset/upload/<?= $value["user_image"] ?>" alt="author">
								</div>
								<!-- CommentModel Meta -->
								<div class="comment-meta">
									<a href="#" class="comment-date">{{ $value["comment_date"] }}</a>
									<input type="hidden" id="commentc" name="comment_id" value=" {{ $value["comment_id"] }}  ">
									<h6>{{ $value["username"] }}</h6>
									<p>{{ $value["comment_content"] }}</p>
									<div class="d-flex align-items-center">
										<a href="#" data-id="<?= $value['comment_id']?>" class="reply" id="reply<?= $key?>">Reply</a>
									</div>

									<div class="d-flex align-items-center comment-content d-flex">

									<form action="" class="frm<?= $value['comment_id']?>" id="frm<?= $key ?>" method="post" style='width: 100%;display: none'>
										<input type="hidden" id="comment_rep_parent" name="comment_id" value=" {{ $value["comment_id"] }}  ">
										<input type="hidden" id="news_rep_id" name="comment_id" value=" {{ $value["news_id"]   }} ">
										<div class="post-author d-flex align-items-center" style="border-top: 0px">
										<textarea class="form-control comment_rep<?= $value['comment_id'] ?>"  name="comment_rep" id="comment_rep<?= $value['comment_id']?>" cols="30"
												  rows="10" ></textarea>
										</div>
										<input value="Post Comment"  data-id="<?= $value['comment_id']?>" type="submit" name="ajax_id" id="ajax_id"
										class="btn mag-btn mt-30 d-flex pull-right ajax_id"
										style="margin-top: 0px !important;margin-bottom: 25px;">
									</form>
							</div>
								</div>

							</div>
								<div class="" id="comment-content<?= $value['comment_id']?>" >

								</div>
									@if( isset($value["repcomment"]))
							<!-- CommentModel Meta -->
							<!-- End Comment Cha -->

							@foreach($value["repcomment"] as $rows)

							<!-- Comment Con -->
								<ol class="children">
									<li class="single_comment_area">
										<!-- CommentModel Content -->
										<div class="comment-content d-flex">
											<!-- CommentModel Author -->
											<div class="comment-author">
												<img src="<?= base_url()?>asset/upload/<?= $rows["child"]["user_image"] ?>" alt="author">
											</div>
											<!-- CommentModel Meta -->

											<div class="comment-meta">
												<a href="#" class="comment-date">{{ $rows ["comment_date"] }}</a>
												<h6>{{ $rows["child"]["username"] }}</h6>
												<p>{{ $rows["comment_content"] }}</p>
												<div class="d-flex align-items-center">
												</div>
											</div>
										</div>
									</li>
								</ol>
									@endforeach
									@endif
									@endforeach
							<!-- End Comment Con -->


						</li>

					</ol>
					<div class="" id="comment-content-load" >

					</div>
					<div class="comment-content d-flex" id="comment-content-load-a" >
						<div class="col-md-5"></div>
						<div class="col-md-6">
							<button type="button" id="load_more" data-val = "0" class="btn btn-outline-primary text-center">Load More</button>
						</div>
					</div>
				</div>

			</div>


			@endsection
			@section('right')
				<div class="col-12 col-md-6 col-lg-5 col-xl-4">
					<!-- ##### right ##### -->
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
									<li><a href="<?= base_url() . "News/Category/" . $value["category_id"] ?>"><span><i
														class="fa fa-angle-double-right"
														aria-hidden="true"></i> {{ $value['category_name'] }}</span>
											<span>{{ $value["number_parent"] }}</span>
										</a>
									</li>
									@if(isset($value['category_child']))
										@foreach($value['category_child'] as $rows)
											<li>
												<a href="<?= base_url() . "News/Category/" . $rows["category_id"] ?>"><span><i
																class="fa fa-angle-double-right" aria-hidden="true"
																style="margin-left: 20px"></i> {{ $rows['category_name'] }}</span>
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
								<p>Subscribe our newsletter gor get notification about new updates, information
									discount, etc.</p>
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
@section('script')
	<script type="text/javascript">
		$(document).ready(function () {
			$('#ajax').click(function (e) {
				e.preventDefault();
				a = $('#comment').val();
				news_id = $('#comment_id').val();
				$.post("<?= base_url() ?>News/Ajax",{
					comment: a,
					comment_id: news_id
				}).done(function (kq) {
					// console.log(kq);
					$('#comment-content').append(kq);
					$('#comment').val('');
				})

			});
			$(document).on('click', '.ajax_id', function (e) {
				e.preventDefault();
				console.log("start");
				var id_com = $(this).data('id');
				comment_rep_parent = $('#comment_rep_parent').val();
				comment_rep = $('.comment_rep'+id_com).val();
				news_rep_id = $('#news_rep_id').val();
				$.post("<?= base_url() ?>News/AjaxRep",{
					comment_rep_parent: comment_rep_parent,
					comment_rep: comment_rep,
					news_rep_id: news_rep_id
				}).done(function (kq) {
					// console.log(kq);
					$('.frm'+id_com).css("display","none");
					$('#comment-content'+id_com).append(kq);
					$('#comment_rep').val('');

				})

			});
			var page = 1;
			$(document).on('click', '#load_more', function (e) {
				e.preventDefault();
				// console.log("start");
				page++;
				news_id = $('#news_rep_id').val();
				$.ajax({
					dataType: 'json',
					url: '<?= base_url() ?>News/LoadMore',
					type : 'get',
					data : {
						page : page,
						news_id : news_id
					},success:function (data) {
						console.log(data);
						var html ="";
						var base = '<?= base_url()?>';
						if (data.result >= data.all)
						{

							$.each(data.data,function (key,item) {
								html += "<div class='comment-content d-flex' >\n" +
										"<div class='comment-author'>\n" +
										"<img src=" +base+  'asset/upload/' + item.user_image + " alt='author'>\n" +
										"</div>\n" +
										"<div class='comment-meta'>\n" +
										"<a href='#' class='comment-date'>" + item.comment_date + "</a>\n" +
										"<h6>" + item.username + "</h6>\n" +
										"<p>" + item.comment_content + "</p>\n" +
										"<div class='d-flex align-items-center'>\n" +
										"<a href='#' id='reply' data-id='"+item.comment_id+"' class='reply'>Reply</a>\n" +
										"</div>\n" +
										"<div class='d-flex align-items-center comment-content d-flex'>\n" +
										"<form action='' class='frm"+item.comment_id+"'  id='frm' method='post' style='width: 100%;display: none'>\n" +
										"<input type='hidden' id='comment_rep_parent' name='comment_id' value=" + item.comment_id + ">\n" +
										"<input type='hidden' id='news_rep_id' name='comment_id' value=" + item.news_id   + ">\n" +
										"<div class='post-author d-flex align-items-center' style='border-top: 0px'>\n" +
										"<textarea class='form-control comment_rep"+item.comment_id+"' name='comment_rep' id='comment_rep"+item.comment_id+"' cols='30'\n" +
										" rows='10' ></textarea>\n" +
										"</div>\n" +
										"<input value='Post Comment' data-id='"+item.comment_id+"' type='submit' name='ajax_id' id='ajax_id'\n" +
										"class='btn mag-btn mt-30 d-flex pull-right ajax_id'\n" +
										"style='margin-top: 0px !important;margin-bottom: 25px;'>\n" +
										"</form>\n" +
										"</div>\n" +
										"</div>\n" +
										"\n" +
										"</div>\n" +
										"";
									html += "<div class=\"\" id='comment-content"+item.comment_id+"' >\n" +
											"\n" +
											"\t\t\t\t\t\t\t\t</div>";
								$.each(item.repcomment,function (keysChild,itemChild) {
									html += " <ol class=\"children\">\n" +
											"\t\t\t\t\t\t\t\t\t<li class=\"single_comment_area\">\n" +
											"\t\t\t\t\t\t\t\t\t\t<div class=\"comment-content d-flex\">\n" +
											"\t\t\t\t\t\t\t\t\t\t\t<div class=\"comment-author\">\n" +
											"\t\t\t\t\t\t\t\t\t\t\t\t<img src="+base+"asset/upload/"+ itemChild.child.user_image +" alt=\"author\">\n"+
											"\t\t\t\t\t\t\t\t\t\t\t</div>\n"+
											"\t\t\t\t\t\t\t\t\t\t\t<div class=\"comment-meta\">\n"+
											"\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"comment-date\">"+ itemChild.comment_date+"</a>\n"+
											"\t\t\t\t\t\t\t\t\t\t\t\t<h6>"+ itemChild.child.username +"</h6>\n"+
											"\t\t\t\t\t\t\t\t\t\t\t\t<p>"+ itemChild.comment_content +"</p>\n"+
											"\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">\n"+
											"\t\t\t\t\t\t\t\t\t\t\t\t</div>\n"+
											"\t\t\t\t\t\t\t\t\t\t\t</div>\n"+
											"\t\t\t\t\t\t\t\t\t\t</div>\n"+
											"\t\t\t\t\t\t\t\t\t</li>\n"+
											"\t\t\t\t\t\t\t\t</ol> ";
								})
							} );
							$('#comment-content-load').append(html);
							$('#load_more').css('display','none');
						}
						else {
							$.each(data.data,function (key,item) {
								html += "<div class='comment-content d-flex' >\n" +
										"<div class='comment-author'>\n" +
										"<img src=" +base+  'asset/upload/' + item.user_image + " alt='author'>\n" +
										"</div>\n" +
										"<div class='comment-meta'>\n" +
										"<a href='#' class='comment-date'>" + item.comment_date + "</a>\n" +
										"<h6>" + item.username + "</h6>\n" +
										"<p>" + item.comment_content + "</p>\n" +
										"<div class='d-flex align-items-center'>\n" +
										"<a href='#' id='reply' data-id='"+item.comment_id+"' class='reply'>Reply</a>\n" +
										"</div>\n" +
										"<div class='d-flex align-items-center comment-content d-flex'>\n" +
										"<form action='' class='frm"+item.comment_id+"' id='frm' method='post' style='width: 100%;display: none'>\n" +
										"<input type='hidden' id='comment_rep_parent' name='comment_id' value=" + item.comment_id + ">\n" +
										"<input type='hidden' id='news_rep_id' name='comment_id' value=" + item.news_id   + ">\n" +
										"<div class='post-author d-flex align-items-center' style='border-top: 0px'>\n" +
										"<textarea class='form-control comment_rep"+item.comment_id+"' name='comment_rep' id='comment_rep"+item.comment_id+"' cols='30'\n" +
										" rows='10' ></textarea>\n" +
										"</div>\n" +
										"<input value='Post Comment' data-id='"+item.comment_id+"' type='submit' name='ajax_id' id='ajax_id'\n" +
										"class='btn mag-btn mt-30 d-flex pull-right ajax_id'\n" +
										"style='margin-top: 0px !important;margin-bottom: 25px;'>\n" +
										"</form>\n" +
										"</div>\n" +
										"</div>\n" +
										"\n" +
										"</div>\n" +
										"";
								html += "<div class=\"\" id='comment-content"+item.comment_id+"' >\n" +
										"\n" +
										"\t\t\t\t\t\t\t\t</div>";
								$.each(item.repcomment,function (keysChild,itemChild) {
									html += " <ol class=\"children\">\n" +
											"\t\t\t\t\t\t\t\t\t<li class=\"single_comment_area\">\n" +
											"\t\t\t\t\t\t\t\t\t\t<div class=\"comment-content d-flex\">\n" +
											"\t\t\t\t\t\t\t\t\t\t\t<div class=\"comment-author\">\n" +
											"\t\t\t\t\t\t\t\t\t\t\t\t<img src="+base+"asset/upload/"+ itemChild.child.user_image +" alt=\"author\">\n"+
											"\t\t\t\t\t\t\t\t\t\t\t</div>\n"+
											"\t\t\t\t\t\t\t\t\t\t\t<div class=\"comment-meta\">\n"+
											"\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"comment-date\">"+ itemChild.comment_date+"</a>\n"+
											"\t\t\t\t\t\t\t\t\t\t\t\t<h6>"+ itemChild.child.username +"</h6>\n"+
											"\t\t\t\t\t\t\t\t\t\t\t\t<p>"+ itemChild.comment_content +"</p>\n"+
											"\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">\n"+
											"\t\t\t\t\t\t\t\t\t\t\t\t</div>\n"+
											"\t\t\t\t\t\t\t\t\t\t\t</div>\n"+
											"\t\t\t\t\t\t\t\t\t\t</div>\n"+
											"\t\t\t\t\t\t\t\t\t</li>\n"+
											"\t\t\t\t\t\t\t\t</ol> ";
								})
							} );
							$('#comment-content-load').append(html);
						}


					}//end

				})

			});


		});

	</script>
	<script type="text/javascript">
		$(document).on('click', '.reply', function () {
			var id_com = $(this).data('id');
			// console.log("ok");
			$('.frm'+id_com).css("display","block");
			return false;
		});
	</script>
@endsection
