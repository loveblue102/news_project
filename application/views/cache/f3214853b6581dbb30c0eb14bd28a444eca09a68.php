<?php /* C:\xampp\htdocs\ows_news\application\views/AddNews.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<script language="JavaScript" src="<?= base_url() ?>asset/ckeditor/ckeditor.js"></script>
<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit news</div>
		<div class="panel-body">
			<form method="post" action="" enctype="multipart/form-data">
				<!-- row -->
				<div class="row" style="margin:5px">
					<div class="col-md-2">Title</div>
					<div class="col-md-10">
						<input type="text" name="c_name" class="form-control" required value="">
					</div>
				</div>
				<!-- end row -->



				<!-- row -->
				<div class="row" style="margin:5px">
					<div class="col-md-2">Description</div>
					<div class="col-md-10">
					<textarea style="width:700px;height:100px;" name="c_description">

					</textarea>
						<script type="text/javascript">CKEDITOR.replace("c_description");</script>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->

				<div class="row" style="margin:5px">
					<div class="col-md-2">Content</div>
					<div class="col-md-10">
					<textarea style="width:700px;height:100px;" name="c_content">
					</textarea>
						<script type="text/javascript">CKEDITOR.replace("c_content");</script>
					</div>
				</div>
				<!-- end row -->
				<!-- end row -->
				<div class="row" style="margin:5px">
					<div class="col-md-2">Trang Thai</div>
					<div class="col-md-3">
						<select name="" id="">
							<option value="">Hot</option>
							<option value="">Đã Đăng</option>
							<option value="">Ẩn</option>
							<option value=""></option>

						</select>
					</div>
				</div>
				<!-- row -->
				<!-- row -->
				<div class="row" style="margin:5px">
					<div class="col-md-2">Image</div>
					<div class="col-md-10">
						<input type="file" name="c_img">
						<div style="margin-top:5px;">

						</div>
					</div>
				</div>
				<!-- end row -->
				<div class="row" style="margin:5px">
					<div class="col-md-2">Category News Parent</div>
					<div class="col-md-10">
						<input style="z-index: 100" type="text" id="justAnotherInputBox" placeholder="Type to filter"/>
					</div>
				</div>
				<!-- row -->
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
<?php $__env->startSection('script'); ?>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="<?= base_url()?>asset/js/dropdowntree.js"></script>
	<script src="<?= base_url()?>asset/js/icontains.js"  type="text/javascript"></script>
	<script src="<?= base_url()?>asset/js/comboTreePlugin.js"  type="text/javascript"></script>
	<script>

		var SampleJSONData = [
			{
				id: 0,
				title: 'Tin Vui Choi '
			}, {
				id: 1,
				title: 'Tin Giai Tri',
				subs: [
					{
						id: 10,
						title: 'Bong Da'
					}, {
						id: 11,
						title: 'The Thao'
					}, {
						id: 12,
						title: 'Game'
					}
				]
			}
		];
		var comboTree1, comboTree2;

		jQuery(document).ready(function($) {

			comboTree1 = $('#justAnInputBox').comboTree({
				source : SampleJSONData,
				isMultiple: true
			});

			comboTree2 = $('#justAnotherInputBox').comboTree({
				source : SampleJSONData,
				isMultiple: false
			});
		});
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36251023-1']);
		_gaq.push(['_setDomainName', 'jqueryscript.net']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>