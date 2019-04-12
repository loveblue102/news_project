<?php /* C:\xampp\htdocs\ows_news\application\views/Auth.blade.php */ ?>
<?php $__env->startSection('slide'); ?>
	<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?= base_url() ?>asset/img/bg-img/40.jpg)">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12">
					<div class="breadcrumb-content">
						<h2>Login</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
	</section>
	<div class="mag-login-area py-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-6">
					<div class="login-content bg-white p-30 box-shadow">
						<!-- Section Title -->
						<div class="section-heading">
							<h5>Great to have you back!</h5>
						</div>
						<?php
						if (isset($arr["message"])) {
							echo $arr["message"];
						}
						?>
						<form action="<?= base_url()?>Auth/Login" method="post">
							<div class="form-group">
								<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email Ows">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox mr-sm-2">
									<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
									<label class="custom-control-label" for="customControlAutosizing">Remember me</label>
								</div>
							</div>
							<button type="submit" class="btn mag-btn mt-30">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section>
	<!-- ##### Login Area End ##### -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>