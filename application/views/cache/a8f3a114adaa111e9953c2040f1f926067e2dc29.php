<?php /* C:\xampp\htdocs\ows_news\application\views/News.blade.php */ ?>
<?php $__env->startSection('slide'); ?>
	<section class="breadcrumb-area bg-img bg-overlay"
			 style="background-image: url(<?= base_url() ?>'asset/img/bg-img/41.jpg');">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12">
					<div class="breadcrumb-content">
						<h2>
							<?php echo e(isset($arrCategory["parent"]) ? $arrCategory["parent"]." / ".$arrCategory["category_name"] : $arrCategory["category_name"]); ?>

						</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('category'); ?>
	<div class="mag-breadcrumb py-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
							<?php if(isset($arrCategory["parent"])): ?>
							<li class="breadcrumb-item"><a href="#"><?php echo e($arrCategory["parent"]); ?></a></li>
							<li class="breadcrumb-item"><a href="#"><?php echo e($arrCategory["category_name"]); ?></a></li>
							<?php else: ?>
								<li class="breadcrumb-item"><a href="#"><?php echo e($arrCategory["category_name"]); ?></a></li>
							<?php endif; ?>
							<!--<li class="breadcrumb-item active" aria-current="page">Archive by Category “TRAVEL”</li>-->
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
	<!-- main -->
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-8">
				<div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
					<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<!-- Single Catagory Post -->
					<div class="single-catagory-post d-flex flex-wrap">
						<!-- Thumbnail -->
						<div class="post-thumbnail bg-img" style="background-image: url(<?= base_url()?>asset/upload/<?= $value["news_image"] ?>);">
						</div>

						<!-- Post Contetnt -->
						<div class="post-content">
							<div class="post-meta">
								<?php if(isset($arrCategory["parent"])): ?>
									<a href="<?= base_url()?>News/Category/<?= $arrCategory["category_parent_id"] ?>"><?php echo e($arrCategory["parent"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;/</a>
									<a href="<?= base_url()?>News/Category/<?= $arrCategory["category_id"] ?>"><?php echo e($arrCategory["category_name"]); ?></a>
								<?php else: ?>
									<a href="<?= base_url()?>News/Category/<?= $arrCategory["category_id"] ?>"><?php echo e($arrCategory["category_name"]); ?></a>
								<?php endif; ?>
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
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					<!-- Pagination -->
					<nav>
						<ul class="pagination">
							<?= getCI()->pagination->create_links() ?>
						</ul>
					</nav>

				</div>
			</div>
			<!-- end main -->
			<?php $__env->stopSection(); ?>
		<?php $__env->startSection('right'); ?>
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
							<?php $__currentLoopData = $arrParent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><a href="<?= base_url()."News/Category/".$value["category_id"] ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo e($value['category_name']); ?></span>
										<span><?php echo e($value["number_parent"]); ?></span>
									</a>
								</li>
								<?php if(isset($value['category_child'])): ?>
									<?php $__currentLoopData = $value['category_child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li><a href="<?= base_url()."News/Category/".$rows["category_id"] ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true" style="margin-left: 20px"></i> <?php echo e($rows['category_name']); ?></span>
												<span><?php echo e($rows["number"]); ?></span>
											</a></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
				<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>