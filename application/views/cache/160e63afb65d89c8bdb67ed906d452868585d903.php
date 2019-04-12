<?php /* C:\xampp\htdocs\ows_news\application\views/admin/Home.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<section class="content" style="padding: 10px">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3><?php echo e($comment); ?></h3>

						<p>Comment</p>
					</div>
					<div class="icon">
						<i class="fa fa-comments-o"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?php echo e($news); ?></h3>

						<p>Bài Viết</p>
					</div>
					<div class="icon">
						<i class="ion ion-stats-bars"></i>
					</div>
					<a href="<?= base_url()?>admin/News/ListNews" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3><?php echo e($user); ?></h3>

						<p>Tài Khoản</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
					<a href="<?= base_url()?>admin/Acount/ListAcount" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?php echo e($category); ?></h3>

						<p>Danh Mục Bài Viết</p>
					</div>
					<div class="icon">
						<i class="ion ion-pie-graph"></i>
					</div>
					<a href="<?= base_url()?>admin/CategoryNews" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>

		<!--------------------------
          | Your Page Content Here |
          -------------------------->

	</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>