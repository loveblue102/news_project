<?php /* C:\xampp\htdocs\ows_news\application\views/admin/Comment.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<div class="col-md-10 col-xs-offset-1" >
		<div class="panel panel-primary" style="font-size: 14px">
			<div class="panel-heading">
				List Comment
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover tree">
					<tr>
						<th style="width:100px;text-align: center">Username</th>
						<th style="width:550px;text-align: center">Comment</th>
						<th style="text-align: center">Date Comment</th>
						<th style="width:100px; text-align: center;">Manage</th>
					</tr>
					<?php
					$key = 0;
					?>
					<?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr <?php if( isset($value["category_child"])): ?>class="treegrid-<?= $key?> expanded" <?php else: ?> class="treegrid-<?= $key?>" <?php endif; ?> >
						<td><?php echo e($value["username"]); ?></td>
						<td style="text-align:center;">
							<?php echo e($value["comment_content"]); ?>

						</td>
						<td style="text-align: center"><?php echo e(date('d-m-Y', strtotime($value["comment_date"]))); ?></td>
						<td style="text-align:center">
							<?php if(isset($session)): ?>
								<?php $__currentLoopData = $session["per"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $row["check_action"]);
									?>
								<?php if($row["action_code"] == "comment" && (in_array(4, $check) || in_array(9, $check))): ?>
							<a href="<?= base_url()?>admin/Comment/delete/<?= $value["comment_id"] ?>/<?= $value["news_id"] ?>" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
								<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</td>
					</tr>
						<?php if( isset($value["comment_child"] )): ?>
							<?php
							$keyParent = $key;
							?>
							<?php $__currentLoopData = $value["comment_child"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php
								$key++;
								?>
					<tr class="treegrid-<?= $key?> treegrid-parent-<?= $keyParent?>">
						<td style="text-align:center"><?php echo e($rows["username"]); ?></td>
						<td style="text-align:center;">
							<?php echo e($rows["comment_content"]); ?>

						</td>
						<td style="text-align: center"><?php echo e(date('d-m-Y', strtotime($rows["comment_date"]))); ?></td>
						<td style="text-align:center">
							<?php if(isset($session)): ?>
									<?php $__currentLoopData = $session["per"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php
										$check = explode(',', $row["check_action"]);
										?>
										<?php if($row["action_code"] == "comment" && (in_array(4, $check) || in_array(9, $check))): ?>
											<a href="<?= base_url()?>admin/Comment/delete/<?= $rows["comment_id"] ?>/<?= $value["news_id"] ?>" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
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

				</table>
				
				<div class="container">
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<ul class="pagination">

							</ul>
						</div>
					</div>
				</div>

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