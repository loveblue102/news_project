<?php /* C:\xampp\htdocs\ows_news\application\views/admin/Layout.blade.php */ ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Starter</title>
	<!-- Tell the browser to be responsive to screen width -->

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="<?= base_url() ?>asset/bower_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Font Awesome -->

	<link rel="stylesheet" href="<?= base_url() ?>asset/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?= base_url() ?>asset/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>asset/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
	<link rel="stylesheet" href="<?= base_url() ?>asset/dist/css/skins/skin-blue.min.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't works if you view the page via file:// -->
<!--[if lt IE 9]>

	<!--<link rel="stylesheet" href="<?= base_url() ?>asset/bootstrap/bootstrap.min.css">-->
	<link rel="stylesheet" href="<?= base_url() ?>asset/css/detail.css">
	<link rel="stylesheet" href="<?= base_url() ?>asset/css/jquery.treegrid.css">
	<link rel="stylesheet" href="<?= base_url()?>asset/css/combo.css">
	<link href="<?= base_url() ?>asset/vendor/select2/select2.min.css" rel="stylesheet"/>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
$session = getCI()->session->userdata('loginadmin');

?>
<!-- Main Header -->
	<header class="main-header">

		<!-- Logo -->
		<a href="index2.html" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>OWS</b></span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>OWS NEWS</b></span>
		</a>

		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<!-- Navbar Right Menu -->
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li class="dropdown notifications-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i>
							<span class="label label-warning"><?= $session["notification"] ?></span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">You have <?= $session["notification"] ?> notifications</li>
							<li>
								<!-- Thong Bao -->
								<ul class="menu">
									<li>
										<a href="#">
											<i class="fa fa-users text-aqua"></i> 5 new members joined today
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-warning text-yellow"></i> Very long description here that
											may not fit into the
											page and may cause design problems
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-users text-red"></i> 5 new members joined
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-shopping-cart text-green"></i> 25 sales made
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-user text-red"></i> You changed your username
										</a>
									</li>
								</ul>
							</li>
							<li class="footer"><a href="#">View all</a></li>
						</ul>
					</li>
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?= base_url() ?>asset/upload/<?= isset($session["user_image"])? $session["user_image"] : "" ?>" class="user-image"
								 alt="User Image">
							<span class="hidden-xs"><?php echo e(isset($session["username"])? $session["username"] : ""); ?></span>
						</a>
						<ul class="dropdown-menu">
							<!-- UserModel image -->
							<li class="user-header">
								<img src="<?= base_url() ?>asset/upload/<?= isset($session["user_image"])? $session["user_image"] : "" ?>" class="img-circle"
									 alt="User Image">

								<p>
									<?php echo e(isset($session["username"])? $session["username"] : ""); ?>

									<small><?php echo e(isset($session["per_name"])? $session["per_name"] : ""); ?></small>
								</p>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="" class="btn btn-default btn-flat">Profile</a>
								</div>
								<div class="pull-right">
									<a href="<?= base_url()?>admin/Auth/logout" class="btn btn-default btn-flat">Sign
										out</a>
								</div>
							</li>
						</ul>
					</li>
					<!-- Control Sidebar Toggle Button -->
				</ul>
			</div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">

		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

			<!-- Sidebar user panel (optional) -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="<?= base_url() ?>asset/upload/<?= isset($session["user_image"])? $session["user_image"] : "" ?>" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p><?php echo e(isset($session["username"])? $session["username"] : ""); ?></p>
					<!-- Status -->
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>

			<!-- search form (Optional) -->
			<form action="#" method="get" class="sidebar-form">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Tìm Kiếm ...">
					<span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
				</div>
			</form>
			<!-- /.search form -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">Menu</li>
				<li>
					<a href="<?= base_url() ?>admin/Home">
						<i class="fa fa-circle-o"></i> <span>Trang Chủ</span>
						<span class="pull-right-container">
            			</span>
					</a>
				</li>
		<?php $__currentLoopData = $session["per"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<!-- Sidebar Menu -->
				<?php
				$check = explode(',', $value["check_action"]);
				?>
				<?php if( $value["action_code"] == "my_news" && (in_array(1, $check) || in_array(2, $check) || in_array(9, $check)) ): ?>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-files-o"></i>
							<span>Bài Viết Của Tôi</span>
							<span class="pull-right-container">
              				<i class="fa fa-angle-left pull-right"></i>
						</span>
						</a>
						<ul class="treeview-menu">
							<?php if( in_array(1, $check) || in_array(9, $check)): ?>
								<li><a href="<?= base_url() ?>admin/MyNews/ListNews"><i class="fa fa-circle-o"></i>Danh Sách
										Bài Viết Của Tôi</a></li>
							<?php endif; ?>
							<?php if(in_array(2, $check) || in_array(9, $check)): ?>
								<li><a href="<?= base_url() ?>admin/MyNews/AddNews"><i class="fa fa-circle-o"></i> Thêm  Bài Viết Của Tôi</a></li>
							<?php endif; ?>
						</ul>
					</li>
				<?php endif; ?>

					<?php if( $value["action_code"] == "news" && (in_array(1, $check) || in_array(2, $check) || in_array(9, $check)) ): ?>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-files-o"></i>
								<span>Tin Tức</span>
								<span class="pull-right-container">
              				<i class="fa fa-angle-left pull-right"></i>
						</span>
							</a>
							<ul class="treeview-menu">
								<?php if( in_array(1, $check) || in_array(9, $check)): ?>
									<li><a href="<?= base_url() ?>admin/News/ListNews"><i class="fa fa-circle-o"></i>Danh Sách
											Tin Tức</a></li>
								<?php endif; ?>
									<?php if(in_array(2, $check) || in_array(9, $check)): ?>
									<li><a href="<?= base_url() ?>admin/News/AddNews"><i class="fa fa-circle-o"></i> Thêm Tin
											Tức</a></li>
								<?php endif; ?>
							</ul>
						</li>
					<?php endif; ?>
					<?php if( $value["action_code"] == "acount" && (in_array(1, $check) || in_array(2, $check) || in_array(9, $check)) ): ?>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-th"></i>
								<span>Tài Khoản</span>
								<span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
</span>
							</a>
							<ul class="treeview-menu">
								<?php if( in_array(1, $check) || in_array(9, $check)): ?>
									<li><a href="<?= base_url() ?>admin/Acount/ListAcount"><i class="fa fa-circle-o"></i>Danh Sách
											Tài
											Khoản</a></li>
								<?php endif; ?>
									<?php if(in_array(2, $check) || in_array(9, $check)): ?>
									<li><a href="<?= base_url() ?>admin/Acount/Add"><i class="fa fa-circle-o"></i> Thêm
											Tài Khoản</a>
									</li>
								<?php endif; ?>
							</ul>
						</li>
					<?php endif; ?>
					<?php if( $value["action_code"] == "category_news" && (in_array(1, $check) || in_array(2, $check) || in_array(9, $check)) ): ?>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-pie-chart"></i>
								<span>Danh Mục Tin Tức</span>
								<span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
</span>
							</a>
							<ul class="treeview-menu">
								<?php if( in_array(1, $check) || in_array(9, $check)): ?>
									<li><a href="<?= base_url() ?>admin/CategoryNews"><i class="fa fa-circle-o"></i>Danh
											Sách
											Danh Mục Tin
											Tức</a></li>
								<?php endif; ?>
									<?php if(in_array(2, $check) || in_array(9, $check)): ?>
									<li><a href="<?= base_url() ?>admin/CategoryNews/Add"><i class="fa fa-circle-o"></i>
											Thêm
											Danh Mục Tin
											Tức</a></li>
								<?php endif; ?>
							</ul>
						</li>
					<?php endif; ?>
					<?php if( $value["action_code"] == "category_news" && (in_array(1, $check) || in_array(2, $check) || in_array(9, $check)) ): ?>
						<li>
							<a href="<?= base_url() ?>admin/Post/ListPost">
								<i class="fa fa-edit"></i> <span>Duyệt Bài</span>
								<span class="pull-right-container">
  <small class="label pull-right bg-red"><?= $session["notification"] ?></small>
</span>
							</a>
						</li>
					<?php endif; ?>


		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		<!-- /.sidebar-menu -->
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Home
				<small>Control Panel</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="<?= base_url() ?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
			</ol>
		</section>
		<div class="container" style="padding: 10px;margin-top: 20px">

			<?php echo $__env->yieldContent('content'); ?>

		</div>

	</div>
	<!-- Main content -->
	<!--Do Du Lieu Vao Day-->

	<!-- End Do Du Lieu Vao Day-->
	<!-- /.content -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 2.4.0
		</div>
		<strong>Bản Quyền Thuộc Về <a href="http://ows.vn">OWS</a>.</strong> All rights
		reserved.
	</footer>
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Create the tabs -->
	<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
		<li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
		<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
	</ul>
	<!-- Tab panes -->
	<div class="tab-content">
		<!-- Home tab content -->
		<div class="tab-pane active" id="control-sidebar-home-tab">
			<h3 class="control-sidebar-heading">Recent Activity</h3>
			<ul class="control-sidebar-menu">
				<li>
					<a href="javascript:;">
						<i class="menu-icon fa fa-birthday-cake bg-red"></i>

						<div class="menu-info">
							<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

							<p>Will be 23 on April 24th</p>
						</div>
					</a>
				</li>
			</ul>
			<!-- /.control-sidebar-menu -->

			<h3 class="control-sidebar-heading">Tasks Progress</h3>
			<ul class="control-sidebar-menu">
				<li>
					<a href="javascript:;">
						<h4 class="control-sidebar-subheading">
							Custom Template Design
							<span class="pull-right-container">
<span class="label label-danger pull-right">70%</span>
</span>
						</h4>

						<div class="progress progress-xxs">
							<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
						</div>
					</a>
				</li>
			</ul>
			<!-- /.control-sidebar-menu -->

		</div>
		<!-- /.tab-pane -->
		<!-- Stats tab content -->
		<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
		<!-- /.tab-pane -->
		<!-- Settings tab content -->
		<div class="tab-pane" id="control-sidebar-settings-tab">
			<form method="post">
				<h3 class="control-sidebar-heading">General Settings</h3>

				<div class="form-group">
					<label class="control-sidebar-subheading">
						Report panel usage
						<input type="checkbox" class="pull-right" checked>
					</label>

					<p>
						Some information about this general settings option
					</p>
				</div>
				<!-- /.form-group -->
			</form>
		</div>
		<!-- /.tab-pane -->
	</div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?= base_url() ?>asset/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>asset/dist/js/adminlte.min.js"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
Both of these plugins are recommended to enhance the
user experience. -->
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
