<?php /* C:\xampp\htdocs\ows_news\application\views/admin/Acount.blade.php */ ?>
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
		<div style="margin-bottom:5px;">
			<?php if(isset($session)): ?>
				<?php $__currentLoopData = $session["per"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php
					$check = explode(',', $row["check_action"]);
					?>
					<?php if($row["action_code"] == "acount" && (in_array(2, $check) || in_array(9, $check))): ?>
						<a href="<?= base_url() ?>admin/Acount/Add" class="btn btn-primary">
							Add Acount
						</a>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>&nbsp;

		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				List Acount
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th style="text-align: center;">Username</th>
						<th style="width: 70px;text-align: center">Permission</th>
						<th style="width:120px;text-align: center;">Acount</th>
						<th style="text-align: center;">News</th>
						<th style="width: 70px;text-align: center;">Category News</th>
						<th style="width: 70px;text-align: center;">Post</th>
						<th style="width: 70px;text-align: center;">Comment</th>
						<th style="width: 70px;text-align: center;">My News</th>
						<th style="width:100px; text-align: center;">Manage</th>
					</tr>
					<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td style="text-align: center"><?php echo e($value["username"]); ?></td>
							<td style="text-align: center;"><?php echo e($value["per_name"]); ?></td>

							<td style="text-align: center;">
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "acount" && isset($check) && in_array(1, $check)): ?>
										Xem
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if( $rows["action_code"] == "acount" && isset($check) && in_array(2, $check)): ?>
										Thêm
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "acount" && isset($check) && in_array(3, $check)): ?>
										Sửa
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if( $rows["action_code"] == "acount" && isset($check) && in_array(4, $check)): ?>
										Xóa
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "acount" && isset($check) && in_array(9, $check)): ?>
										Tất Cả
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


							</td>

							<td style="text-align: center;">
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "news" && isset($check) && in_array(1, $check)): ?>
										Xem
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if( $rows["action_code"] == "news" && isset($check) && in_array(2, $check)): ?>
										Thêm
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "news" && isset($check) && in_array(3, $check)): ?>
										Sửa
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if( $rows["action_code"] == "news" && isset($check) && in_array(4, $check)): ?>
										Xóa
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "news" && isset($check) && in_array(9, $check)): ?>
										Tất Cả
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


							</td>
							<td style="text-align: center;">
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "category_news" && isset($check) && in_array(1, $check)): ?>
										Xem
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if( $rows["action_code"] == "category_news" && isset($check) && in_array(2, $check)): ?>
										Thêm
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "category_news" && isset($check) && in_array(3, $check)): ?>
										Sửa
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if( $rows["action_code"] == "category_news" && isset($check) && in_array(4, $check)): ?>
										Xóa
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "category_news" && isset($check) && in_array(9, $check)): ?>
										Tất Cả
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


							</td>
							<td style="text-align: center;">
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "post" && isset($check) && in_array(1, $check)): ?>
										Xem
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if( $rows["action_code"] == "post" && isset($check) && in_array(2, $check)): ?>
										Thêm
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "post" && isset($check) && in_array(3, $check)): ?>
										Sửa
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if( $rows["action_code"] == "post" && isset($check) && in_array(4, $check)): ?>
										Xóa
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "post" && isset($check) && in_array(9, $check)): ?>
										Tất Cả
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


							</td>

							<td style="text-align: center;">
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "comment" && isset($check) && in_array(1, $check)): ?>
										Xem
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if( $rows["action_code"] == "comment" && isset($check) && in_array(2, $check)): ?>
										Thêm
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "comment" && isset($check) && in_array(3, $check)): ?>
										Sửa
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if( $rows["action_code"] == "comment" && isset($check) && in_array(4, $check)): ?>
										Xóa
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "comment" && isset($check) && in_array(9, $check)): ?>
										Tất Cả
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</td>
							<td style="text-align: center;">
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "my_news" && isset($check) && in_array(1, $check)): ?>
										Xem
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if( $rows["action_code"] == "my_news" && isset($check) && in_array(2, $check)): ?>
										Thêm
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "my_news" && isset($check) && in_array(3, $check)): ?>
										Sửa
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if( $rows["action_code"] == "my_news" && isset($check) && in_array(4, $check)): ?>
										Xóa
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php $__currentLoopData = $value["PerDetail"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php
									$check = explode(',', $rows["check_action"]);
									?>
									<?php if($rows["action_code"] == "my_news" && isset($check) && in_array(9, $check)): ?>
										Tất Cả
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


							</td>
							<td style="text-align:center">
								<?php if(isset($session)): ?>
									<?php $__currentLoopData = $session["per"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php
										$check = explode(',', $row["check_action"]);
										?>
										<?php if($row["action_code"] == "acount" && (in_array(3, $check) || in_array(9, $check))): ?>
											<a href="<?= base_url() ?>admin/Acount/Edit/<?= $value["per_id"]?>">
												Edit
											</a>
										<?php endif; ?>
										<?php if($row["action_code"] == "acount" && (in_array(4, $check) || in_array(9, $check))): ?>
											<a href="<?= base_url() ?>admin/Acount/Delete/<?= $value["per_id"]?>"
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