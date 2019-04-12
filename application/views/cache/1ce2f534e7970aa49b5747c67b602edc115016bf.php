<?php /* C:\xampp\htdocs\ows_news\application\views/Acount.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<div class="col-md-10 col-xs-offset-1" >
		<div style="margin-bottom:5px;">
			<a href="<?= base_url() ?>AddAcount" class="btn btn-primary">
				Add Acount
			</a>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				List Acount
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th style="width:50px">STT</th>
						<th style="width:120px;text-align: center;">Image</th>
						<th style="text-align: center;">Username</th>
						<th>Fullname</th>
						<th style="width: 70px;text-align: center">Email</th>
						<th style="width: 70px;text-align: center;">Permission</th>
						<th style="width:100px; text-align: center;">Manage</th>
					</tr>
					<tr>
						<td style="text-align:center">1</td>
						<td style="text-align:center;">
							<img src="<?= base_url() ?>asset/images/3.jpg" alt="" style="width: 150px">
						</td>
						<td style="text-align: center">Trunggg</td>
						<td style="text-align: center">
							Doan Trung
						</td>
						<td style="text-align: center">
							trung@gmail.com
						</td>
						<td style="text-align: center">Mod</td>
						<td style="text-align:center">
							<a href="">Edit</a>&nbsp;
							<a href="" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
						</td>
					</tr>
					<tr>
						<td style="text-align:center">1</td>
						<td style="text-align:center;">
							<img src="<?= base_url() ?>asset/images/2.png" alt="" style="width: 150px">
						</td>
						<td style="text-align: center">Binh</td>
						<td style="text-align: center">
							Cao Binh
						</td>
						<td style="text-align: center">
							binh@gmail.com
						</td>
						<td style="text-align: center">Mod</td>
						<td style="text-align:center">
							<a href="">Edit</a>&nbsp;
							<a href="" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
						</td>
					</tr>
					<tr>
						<td style="text-align:center">1</td>
						<td style="text-align:center;">
							<img src="<?= base_url() ?>asset/images/3.jpg" alt="" style="width: 150px">
						</td>
						<td style="text-align: center">Trunggg1</td>
						<td style="text-align: center">
							Doan Trung1
						</td>
						<td style="text-align: center">
							trung@gmail.com
						</td>
						<td style="text-align: center">User</td>
						<td style="text-align:center">
							<a href="">Edit</a>&nbsp;
							<a href="" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
						</td>
					</tr>
				</table>
				
				<div class="container">
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<ul class="pagination">
								<li class="page-item"><a class="page-link" href="#">Previous</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item active"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>