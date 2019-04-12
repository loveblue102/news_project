<?php /* C:\xampp\htdocs\ows_news\application\views/AddAcount.blade.php */ ?>
<?php $__env->startSection('content'); ?>
	<div class="col-md-10 col-xs-offset-1">
		<div class="panel panel-primary">
			<div class="panel-heading">Add edit acount</div>
			<div class="panel-body">
				<form method="post" action="" enctype="multipart/form-data">
					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Username</div>
						<div class="col-md-10">
							<input type="text" name="c_name" class="form-control" required value="">
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Email</div>
						<div class="col-md-10">
							<input type="email" name="c_name" class="form-control" required value="">
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Fullname</div>
						<div class="col-md-10">
							<input type="text" name="c_name" class="form-control" required value="">
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Password</div>
						<div class="col-md-10">
							<input type="password" name="c_name" class="form-control" required value="">
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2">Permission</div>
						<div class="col-md-3">
							<select name="" id="">
								<option value="">Mod</option>
								<option value="">User</option>
							</select>
						</div>
					</div>
					<div class="row" style="margin: 5px">
						<div class="col-md-12 text-center">
							<span>
								Rules&nbsp;<button class="btn btn-sm btn-primary add_more_button" style="padding: 0px;" href="#"><i class="fa fa-plus btn"></i></button>

							</span>
						</div>
					</div>
					<div class=" input_fields_container_part">

					</div>






					<!-- row -->
					<div class="row" style="margin:5px">
						<div class="col-md-2"></div>
						<div class="col-md-10">
							<input type="submit" name="btn" class="btn btn-primary" value="Process">
							<input type="submit" name="btn" class="btn btn-primary" value="Back">
						</div>
					</div>
					<!-- end row -->
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script src="<?= base_url()?>asset/vendor/select2/select2.min.js">
	</script>
	<script>
	$(document).ready(function() {
	$('.js-example-basic-multiple').select2();

		var max_fields_limit      = 5; //set limit for maximum input fields
		var x = 1; //initialize counter for text box
		$('.add_more_button').click(function(e){ //click event on add more fields button having class add_more_button
			e.preventDefault();
			if(x < max_fields_limit){ //check conditions
				x++; //counter increment
				$('.input_fields_container_part').append('<div class="row " style="margin: 5px">\n' +
						'\t\t\t\t\t\t\t<div class="col-md-2"></div>\n' +
						'\t\t\t\t\t\t\t<div class="form-group col-md-4 ">\n' +
						'\t\t\t\t\t\t\t\t<select class="form-control select2" style="width: 100%;">\n' +
						'\t\t\t\t\t\t\t\t\t<option selected="selected"></option>\n' +
						'\t\t\t\t\t\t\t\t\t<option>Post</option>\n' +
						'\t\t\t\t\t\t\t\t\t<option>User</option>\n' +
						'\t\t\t\t\t\t\t\t</select>\n' +
						'\t\t\t\t\t\t\t</div>\n' +
						'\t\t\t\t\t\t\t<div class="col-md-1">Action</div>\n' +
						'\t\t\t\t\t\t\t<div class="col-md-4">\n' +
						'\t\t\t\t\t\t\t\t<select class="js-example-basic-multiple col-md-12" name="states[]" multiple="multiple">\n' +
						'\t\t\t\t\t\t\t\t\t<option value="AL">Thêm</option>\n' +
						'\t\t\t\t\t\t\t\t\t<option value="WY">Sửa</option>\n' +
						'\t\t\t\t\t\t\t\t\t<option value="WY">Xóa</option>\n' +
						'\t\t\t\t\t\t\t\t\t<option value="WY">Xem</option>\n' +
						'\t\t\t\t\t\t\t\t</select>\n' +
						'\t\t\t\t\t\t\t</div>\n' +
						'\t\t\t\t\t\t\t<div class="col-md-1"><a href="#" class="remove_field" style="margin-left:10px;">Remove</a></div>\n' +
						'\t\t\t\t\t\t</div>'); //add input field
			}
			$('.js-example-basic-multiple').select2();
			});
		$(document).on("click", '.remove_field', function (e) { //user click on remove text links
			e.preventDefault();
			let element = this.parentNode.parentNode;
			element.parentNode.removeChild(element);
			x--;
		});
	});
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>