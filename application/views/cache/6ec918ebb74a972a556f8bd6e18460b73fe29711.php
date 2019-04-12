<?php /* C:\xampp\htdocs\ows_news\application\views/admin/Post.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<style>
		.col-md-2.col-md-offset-4.text-center.pagi {
			width: 180px;
			padding: 10px;
			border: 1px solid lightblue;
			border-radius: 10px;
		}

		.col-md-2.col-md-offset-4.text-center.pagi a {
			padding: 6px;
			/* border-right: 1px solid; */
			/* margin-top: 15px; */
		}
	</style>
	<div class="col-md-10 col-xs-offset-1">
		<div class="panel panel-primary">
			<div class="panel-heading">
				List news
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th style="width:50px">Username</th>
						<th style="width:120px;">images</th>
						<th>Title</th>
						<th style="width: 150px;">Category News</th>
						<th>Status</th>
						<th>Hot News</th>
						<th style="width:100px; text-align: center;">Manage</th>
					</tr>
					<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td style="text-align:center"><?php echo e($value["username"]); ?></td>
							<td style="text-align:center;">
								<img src="<?= base_url() ?>asset/upload/<?= $value["news_image"] ?>" alt=""
									 style="width: 150px">
							</td>
							<td>
								<a href="<?= base_url() ?>admin/Post/PostDetails/<?= $value["news_id"] ?>"><?php echo $value["news_title"]; ?></a>
							</td>
							<td style="text-align: center">
								<?php if(isset($value["categoryParent"])): ?>
									<?php echo e($value["categoryParent"]." >> " .$value["categorySlide"]); ?>

								<?php else: ?>
									<?php echo e($value["categorySlide"]); ?>

								<?php endif; ?>
							</td>

							<td style="text-align: center">
								<?php echo e($value["news_status"]); ?>

							</td>
							<td>
								<?php echo e($value["news_kind"] != ""?$value["news_kind"]:""); ?>

							</td>

							<td style="text-align:center">
								<?php if(isset($session)): ?>
									<?php $__currentLoopData = $session["per"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php
										$check = explode(',', $row["check_action"]);

										?>
										<?php if($row["action_code"] == "post" && (in_array(3, $check) || in_array(9, $check))): ?>
											<a href="<?= base_url() ?>admin/Post/Edit/<?= $value["news_id"]?>">Edit</a>
											&nbsp;
										<?php endif; ?>
										<?php if($row["action_code"] == "post" && (in_array(4, $check) || in_array(9, $check))): ?>
											<a href="<?= base_url() ?>admin/Post/Delete/<?= $value["news_id"]?>"
											   onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
										<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>&nbsp;

							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
				
				<div class="container">
					<div class="row">
						<?php
						if (getCI()->pagination->create_links() != null) {
						?>
						<div class="col-md-2 col-md-offset-4 text-center pagi">
							<?= getCI()->pagination->create_links() ?>
						</div>
						<?php }?>
					</div>
				</div>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>