<?php /* C:\xampp\htdocs\ows_news\application\views/admin/EditPost.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<script language="JavaScript" src="<?= base_url() ?>asset/ckeditor/ckeditor.js"></script>
	<div class="col-md-10 col-xs-offset-1">
		<div class="panel panel-primary">
			<div class="panel-heading">Add edit news</div>
			<div class="panel-body">
				<form method="post" action="<?php echo e($formAction); ?>" enctype="multipart/form-data">
					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Title</div>
						<div class="col-md-10">
							<input type="text" name="title" class="form-control" required value="<?php echo e(isset($data["news_title"])?$data["news_title"]:""); ?>">
						</div>
					</div>
					<!-- end row -->


					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Description</div>
						<div class="col-md-10">
					<textarea style="width:700px;height:100px;" name="description" required>
						<?php echo e(isset($data["news_description"])?$data["news_description"]:""); ?>

					</textarea>
							<script type="text/javascript">CKEDITOR.replace("description");</script>
						</div>
					</div>
					<!-- end row -->
					<!-- row -->

					<div class="row" style="margin:5px">
						<div class="col-md-2">Content</div>
						<div class="col-md-10">
					<textarea style="width:700px;height:100px;" name="content">
						<?php echo e(isset($data["news_content"])?$data["news_content"]:""); ?>

					</textarea>
							<script type="text/javascript">CKEDITOR.replace("content");</script>
						</div>
					</div>
					<!-- row -->
					<!-- end row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Danh Muc Tin Tuc</div>
						<div class="col-md-10">

							<select name="category" id="">
								<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option <?= isset($value["category_id"]) && isset($data) && $data["category_id"] == $value["category_id"]?"selected":""; ?> value="<?php echo e($value["category_id"]); ?> " style="font-size: 15px"><?php echo e($value["category_name"]); ?></option>
									<?php if(isset($value["category_child"])): ?>
										<?php $__currentLoopData = $value["category_child"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option <?= isset($rows["category_id"])&& isset($data) && $data["category_id"] == $rows["category_id"]?"selected":""; ?> value="<?php echo e($rows["category_id"]); ?>" style="font-size: 13px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<?php echo e($rows["category_name"]); ?>

											</option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>
					<?php if(isset($data)): ?>
						<div class="row" style="margin:5px">
							<div class="col-md-2">Trang Thai</div>
							<div class="col-md-10">
								<select name="status" id="" style="width: 114px">
									<?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option <?php if($value["news_status"] == "Đã Đăng"){?>disabled<?php } ?> <?= isset($value["news_status"]) && $value["news_status"] == $data["news_status"]?"selected":""; ?> value="<?php echo e($value["news_status"]); ?>"><?php echo e($value["news_status"]); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
				<?php endif; ?>
				<!-- end row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Loai Tin</div>
						<div class="col-md-10">
							<select name="kind" id="" style="width: 114px">
								<?php $__currentLoopData = $kind; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option <?= isset($value["news_kind"]) && $value["news_kind"] == "Hot"?"selected":""; ?> value="<?php echo e($value["news_kind"]); ?>"><?php echo e($value["news_kind"]); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>

					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Image</div>
						<div class="col-md-10">
							<input type="file" name="img">
							<div style="margin-top:5px;">
								<?php if(isset($data["news_image"])&&file_exists("./asset/upload/".$data["news_image"])): ?>
									<img src="<?= base_url()."asset/upload/".$data["news_image"]; ?>" style="width:100px;" alt="Khong Co Anh De Hien Thi">
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="row" style="margin:5px">
						<div class="col-md-2"></div>
						<div class="col-md-10">
							<input type="submit" name="btn" class="btn btn-primary" value="Process">

						</div>
					</div>

					<!-- end row -->
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>