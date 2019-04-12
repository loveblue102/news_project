<?php /* C:\xampp\htdocs\ows_news\application\views/CategoryNewsModel.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<div class="col-md-10 col-xs-offset-1" >
		<div style="margin-bottom:5px;">
			<a href="<?= base_url() ?>AddCategoryNews" class="btn btn-primary">
				Add Category News
			</a>
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
						<tr class="treegrid-1 expanded">
							<td>Tin The Thao</td>
							<td>
								<a href="<?= base_url() ?>EditCategoryNews">Edit</a>
								<a href="">Delete</a>
							</td>
						</tr>
						<tr class="treegrid-2 treegrid-parent-1">
							<td>Bong Da</td>
							<td>
								<a href="">Delete</a>
							</td>
						</tr>
						<tr class="treegrid-3 treegrid-parent-1">
							<td>Bog Ban</td>
							<td>
								<a href="">Delete</a>
							</td>
						</tr>
						<tr class="treegrid-4 treegrid-parent-3">
							<td>Nam</td>
							<td>
								<a href="">Edit</a>
								<a href="">Delete</a>
							</td>
						</tr>
						<tr class="treegrid-5 treegrid-parent-3">
							<td>Nu</td>
							<td>
								<a href="">Edit</a>
								<a href="">Delete</a>
							</td>
						</tr>
						<tr class="treegrid-6"><td>Root node</td><td>Additional info</td></tr>
						<tr class="treegrid-7 treegrid-parent-6"><td>Node 2-1</td><td>Additional info</td></tr>
						</tbody>
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
