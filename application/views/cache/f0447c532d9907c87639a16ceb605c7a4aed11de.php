<?php /* C:\xampp\htdocs\ows_news\application\views/admin/PostDetails.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<div class="row" style="margin: 0px;">
		<div class="col-md-2" style="padding-left: 5px">
			<img src="<?= base_url() ?>asset/upload/<?= $PostDetails["news_image"]?>" alt="" style="width: 150px;">
		</div>
		<div class="col-md-4">
			<?= $PostDetails["news_title"] ?>
		</div>
		<div class="col-md-2">
			<?php if(isset($PostDetails["category_parent"])): ?>
				<?php echo e($PostDetails["category_parent"]." >> " .$PostDetails["category_name"]); ?>

			<?php else: ?>
				<?php echo e($PostDetails["category_name"]); ?>

			<?php endif; ?>
		</div>
		<div class="col-md-1">
			<?php echo e($PostDetails["username"]); ?>

		</div>
		<div class="col-md-1">
			<?php echo e($PostDetails["news_kind"]); ?>

		</div>
		<div class="col-md-2">
			<?php if(isset($data) && $data != Null): ?>
				<a href="" class="btn btn-info text-center" style="width:130px ">
					Đã Duyệt</a>
			<?php endif; ?>
			<?php if(isset($PostDetails) && ($PostDetails["news_status"] == "Chờ Duyệt" ||  $PostDetails["news_status"] == "Ẩn")): ?>
				<?php if(isset($session)): ?>
					<?php $__currentLoopData = $session["per"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php
							$check = explode(',', $value["check_action"]);
							?>
								<?php if($value["action_code"] == "post" && (in_array(2, $check) || in_array(9, $check))): ?>
									<a href="<?= base_url()?>admin/Post/Check/<?=  $PostDetails["news_id"]?>"
									   class="btn btn-info text-center" style="width:130px ">Duyệt Bài</a>
								<?php endif; ?>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			<?php endif; ?>

			<?php if($PostDetails["news_status"] == "Đã Đăng"): ?>
					<?php if(isset($session)): ?>
						<?php $__currentLoopData = $session["per"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php
				$check = explode(',', $row["check_action"]);
				?>
				<?php if($row["action_code"] == "comment" && (in_array(1, $check) || in_array(9, $check))): ?>
					<a href="<?= base_url()?>admin/Comment/ListComment/<?=  $PostDetails["news_id"]?>"
					   class="btn btn-info text-center" style="width:130px ">Comment</a>
				<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
			<?php endif; ?>&nbsp;
			<a href="<?= base_url()?>admin/Post/ListPost" class="btn btn-default back text-center"
			   style="width: 130px;margin: 10px 0px 30px 0px">Quay Lại</a>
		</div>
	</div>
	<div class="row" style="margin: 0px;">
		<div class="col-md-12" style="padding-left: 3px;"><h4
					style="margin-right: 21px"><?php echo $PostDetails["news_description"]; ?></h4></div>
		<div class="col-md-12 vs" style="padding-left: 3px;">
			<p style="margin-right: 31px">
				<?php echo $PostDetails["news_content"]; ?>

			</p>

		</div>

	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>