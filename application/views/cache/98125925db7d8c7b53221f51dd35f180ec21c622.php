<?php /* C:\xampp\htdocs\ows_news\application\views/CommentModel.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<div class="col-md-10 col-xs-offset-1" >
		<div style="margin-bottom:5px;">
			<a href="<?= base_url() ?>AddNews" class="btn btn-primary">
				Add news
			</a>
		</div>
		<div class="panel panel-primary" style="font-size: 14px">
			<div class="panel-heading">
				List news
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover tree">
					<tr>
						<th style="width:100px;text-align: center">Username</th>
						<th style="width:550px;text-align: center">Comment</th>
						<th style="text-align: center">Date Comment</th>
						<th style="width:100px; text-align: center;">Manage</th>
					</tr>
					<tr class="treegrid-1 expanded">
						<td>Trung</td>
						<td style="text-align:center;">
							Hom nay lam gi do
						</td>
						<td style="text-align: center">17/12/1999</td>
						<td style="text-align:center">
							<a href="" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
						</td>
					</tr>
					<tr class="treegrid-2 treegrid-parent-1">
						<td style="text-align:center">Thang</td>
						<td style="text-align:center;">
							Hoi gi the
						</td>
						<td style="text-align: center">17/12/1999</td>
						<td style="text-align:center">
							<a href="" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
						</td>
					</tr>
					<tr class="treegrid-3 treegrid-parent-1">
						<td style="text-align:center">An</td>
						<td style="text-align:center;">
						alo alo
						</td>
						<td style="text-align: center">17/12/1999</td>
						<td style="text-align:center">
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
<?php $__env->startSection('script'); ?>
	<link href="<?= base_url()?>asset/css/jquery.treegrid.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?= base_url()?>asset/js/jquery.treegrid.js"></script>
	<script>
		$('.tree').treegrid();
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
