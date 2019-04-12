<?php /* C:\xampp\htdocs\ows_news\application\views/admin/ModPost.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-10 col-xs-offset-1" >
	<div class="panel panel-primary">
		<div class="panel-heading">
			List news
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th style="width:50px">Modname</th>
					<th style="width:120px;">images</th>
					<th>Title</th>
					<th>Category News</th>
					<th>date creat</th>
					<th style="70px">status</th>
					<th style="width:100px; text-align: center;">Manage</th>
				</tr>
				<tr>
					<td style="text-align:center">Trung</td>
					<td style="text-align:center;">
						<img src="<?= base_url() ?>asset/images/1.jpg" alt="" style="width: 150px">
					</td>
					<td>Nhà Bán lẻ đặt mục tiêu 1.000 tỷ đồng doanh thu phụ kiện</td>
					<td style="text-align: center">
						Tin Công Nghệ > Bigdata
					</td>

					<td>17/12/1996</td>
					<td style="text-align: center">
						Chờ Duyệt
					</td>

					<td style="text-align:center">
						<a href="">Edit</a>&nbsp;
						<a href="" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
					</td>
				</tr>
				<tr>
					<td style="text-align:center">Abc</td>
					<td style="text-align:center;">
						<img src="<?= base_url() ?>asset/images/3.jpg" alt="" style="width: 150px">
					</td>
					<td>Nhà Bán lẻ đặt mục tiêu 1.000 tỷ đồng doanh thu phụ kiện</td>
					<td style="text-align: center">
						Tin Công Nghệ > cloud
					</td>

					<td>17/12/1996</td>
					<td style="text-align: center">
						Chờ Duyệt
					</td>

					<td style="text-align:center">
						<a href="">Edit</a>&nbsp;
						<a href="" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
					</td>
				</tr>
				<tr>
					<td style="text-align:center">Trung</td>
					<td style="text-align:center;">
						<img src="<?= base_url() ?>asset/images/1.jpg" alt="" style="width: 150px">
					</td>
					<td><a href="<?= base_url() ?>NewsDetails">Nhà Bán lẻ đặt mục tiêu 1.000 tỷ đồng doanh thu phụ kiện</a></td>
					<td style="text-align: center">
						Tin Công Nghệ > Bigdata
					</td>

					<td>17/12/1996</td>
					<td style="text-align: center">
						Đã Duyệt
					</td>

					<td style="text-align:center">
						<a href="<?= base_url() ?>AddNews">Edit</a>&nbsp;
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

<?php echo $__env->make('admin.Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>