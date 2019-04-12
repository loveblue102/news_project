<?php /* C:\xampp\htdocs\ows_news\application\views/admin/CategoryNews.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<div class="col-md-10 col-xs-offset-1" >
		<div style="margin-bottom:5px;">
			<?php if(isset($session)): ?>
				<?php $__currentLoopData = $session["per"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php
					$check = explode(',', $row["check_action"]);
					?>
					<?php if($row["action_code"] == "category_news" && (in_array(2, $check) || in_array(9, $check))): ?>
							<a href="<?= base_url() ?>admin/CategoryNews/Add" class="btn btn-primary">
								Add Category News
							</a>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>&nbsp;

		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				List Category News
			</div>
			<div class="panel-body">
				<table class="tree table table-bordered table-hover">
						<tbody>
						<tr>
							<th>Category</th>
							<th>Manager</th>
						</tr>
						<?php
						$key = 0;
						?>
						<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr <?php if( isset($value["category_child"])): ?>class="treegrid-<?= $key?> expanded" <?php else: ?> class="treegrid-<?= $key?>" <?php endif; ?> >
							<td><?php echo e($value["category_name"]); ?></td>
							<td>
								<?php if(isset($session)): ?>
									<?php $__currentLoopData = $session["per"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php
										$check = explode(',', $row["check_action"]);
										?>
										<?php if($row["action_code"] == "category_news" && (in_array(3, $check) || in_array(9, $check))): ?>
												<a href="<?= base_url() ?>admin/CategoryNews/Edit/<?= $value["category_id"]?>">Edit</a>
										<?php endif; ?>
										<?php if($row["action_code"] == "category_news" && (in_array(4, $check) || in_array(9, $check))): ?>
												<a href="<?= base_url() ?>admin/CategoryNews/Delete/<?= $value["category_id"]?>">Delete</a>
										<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>&nbsp;


							</td>
						</tr>
						<?php if( isset($value["category_child"] )): ?>
							<?php
							$keyParent = $key;
							?>
							<?php $__currentLoopData = $value["category_child"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php
								$key++;
								?>
						<tr class="treegrid-<?= $key?> treegrid-parent-<?= $keyParent?>">
							<td><?php echo e($rows["category_name"]); ?></td>
							<td>
								<?php if(isset($session)): ?>
									<?php $__currentLoopData = $session["per"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php
										$check = explode(',', $row["check_action"]);
										?>
										<?php if($row["action_code"] == "category_news" && (in_array(3, $check) || in_array(9, $check))): ?>
												<a href="<?= base_url() ?>admin/CategoryNews/Edit/<?= $rows["category_id"]?>">Edit</a>
										<?php endif; ?>
											<?php if($row["action_code"] == "category_news" && (in_array(4, $check) || in_array(9, $check))): ?>
												<a href="<?= base_url() ?>admin/CategoryNews/Delete/<?= $rows["category_id"]?>">Delete</a>
											<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>&nbsp;

							</td>
						</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							<?php endif; ?>
						<?php
						$key++;
						?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</tbody>
				</table>
			</div>
		</div>

		</div>






<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<link href="<?= base_url()?>asset/css/jquery.treegrid.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?= base_url()?>asset/js/jquery.treegrid.js"></script>
	<script>
		$('.tree').treegrid();
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>