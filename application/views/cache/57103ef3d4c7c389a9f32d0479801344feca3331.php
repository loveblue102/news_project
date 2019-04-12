<?php /* C:\xampp\htdocs\ows_news\application\views/EditCategoryNews.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit category news</div>
		<div class="panel-body">
			<form method="post" action="">
				<!-- row -->
				<div class="row" style="margin:5px">
					<div class="col-md-2">Category Name</div>
					<div class="col-md-10">
						<input type="text" name="c_name" class="form-control" required value="Giai Tri">
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin:5px">
					<div class="col-md-2">Category Type</div>
					<div class="col-md-10">
						<input type="text" name="c_name" class="form-control" required value="Bong da">
						<input type="text" name="c_name" class="form-control" required value="Bong chuyen">
						<input type="text" name="c_name" class="form-control" required value="Bong ro">
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin:5px">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="submit" name="btn" class="btn btn-primary" value="Process">
						<a href="<?= base_url()?>"><input type="submit" name="btn" class="btn btn-info" value="Back"></a>
					</div>
				</div>
				<!-- end row -->
			</form>
		</div>
	</div>
</div>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>