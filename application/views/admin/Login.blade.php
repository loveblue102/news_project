<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>asset/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url(); ?>asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url(); ?>asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url(); ?>asset/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url(); ?>asset/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url(); ?>asset/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/main.css">
	<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<form class="login100-form validate-form" action="<?= base_url() ?>admin/Auth/login" method="post">
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
				<div class="wrap validate-input" style="color: lightblue;">

					<?php
					if (isset($message)) {
						echo $message;
					}
					?>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Valid email is required">
					<input class="input100" type="email" name="email" value="<?= get_cookie('email')!=Null?get_cookie('email'):"" ?>">
					<span class="focus-input100"></span>
					<?php
					if(get_cookie('email')==Null){
					?>
					<span class="label-input100">Email</span>
					<?php
					}
					?>
				</div>


				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<?= form_error('password') != null ? form_error('password') : "" ?>
					<input class="input100" type="password" name="password" value="<?= get_cookie('password')!=Null?get_cookie('password'):"" ?>" >
					<span class="focus-input100"></span>
					<?php
						if(get_cookie('password')==Null){
						?>
					<span class="label-input100">Password</span>
						<?php
							}
						?>
				</div>

				<div class="flex-sb-m w-full p-t-3 p-b-32">
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
				</div>


				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Login
					</button>
				</div>

				<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
				</div>

				<div class="login100-form-social flex-c-m">
					<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
						<i class="fa fa-facebook-f" aria-hidden="true"></i>
					</a>

					<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
				</div>
			</form>
			<!-- left -->
			<div class="login100-more"
				 style="background-image: url('<?php echo base_url(); ?>asset/images/bg-01.jpg');background-size: cover;">
			</div>
			<!--end-left-->
		</div>
	</div>
</div>


<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url(); ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/vendor/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url(); ?>asset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/js/main.js"></script>

</body>
</html>
