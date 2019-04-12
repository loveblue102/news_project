<?php /* C:\xampp\htdocs\ows_news\application\views/AddCategoryNews.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<div class="col-md-10 col-xs-offset-1">
		<div class="panel panel-primary">
			<div class="panel-heading">Add edit category news</div>
			<div class="panel-body">

				<!-- PRODUCT LIST -->
					<!-- /.box-header -->
					<div class="box-body">
						<form method="post" action="">
							<!-- row -->
							<div class="row" style="margin:5px">
								<div class="col-md-2">Category Type Name</div>
								<div class="col-md-10">
									<input type="text" name="c_name" class="form-control" required value="Giai Tri">
								</div>
							</div>
							<div class="row" style="margin:5px">
								<div class="col-md-2">Select Category</div>
								<div class="col-md-10">
									<select name="" id="">
										<option value="">Tin Giai Tri</option>
										<option value="">Tin Giai Tri / Bong Da</option>
										<option value="">Tin Giai Tri / Bong Ban</option>
										<option value="">Tin Cong Nghe</option>
										<option value="">Tin Vui Choi</option>
									</select>
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


				<!-- /.box -->

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>