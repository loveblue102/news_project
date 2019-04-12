<?php /* C:\xampp\htdocs\ows_news\application\views/admin/AddCategoryNews.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<div class="col-md-10 col-xs-offset-1">
		<div class="panel panel-primary">
			<div class="panel-heading">Add edit category news</div>
			<div class="panel-body">

				<!-- PRODUCT LIST -->
					<!-- /.box-header -->
					<div class="box-body">
						<form method="post" action="<?= $formAction ?>">
							<!-- row -->
							<div class="row" style="margin:5px">
								<div class="col-md-2">Category Type Name</div>
								<div class="col-md-10">
									<input type="text" name="c_name" class="form-control" required value="<?= isset($categoryEdit)?$categoryEdit["category_name"]:"" ?>">
								</div>
							</div>
							<?php if(!isset($categoryEdit)): ?>
							<div class="row" style="margin:5px">
								<div class="col-md-2">Select Category</div>
								<div class="col-md-10">
									<select name="category" id="">
										<option value="">Category</option>
										<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($value["category_id"]); ?> " style="font-size: 15px"><?php echo e($value["category_name"]); ?></option>
													<?php if(isset($value["category_child"])): ?>
														<?php $__currentLoopData = $value["category_child"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?php echo e($rows["category_id"]); ?>" style="font-size: 13px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<?php echo e($rows["category_name"]); ?>

															</option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
							</div>
							<?php endif; ?>
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

<?php echo $__env->make('admin.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>