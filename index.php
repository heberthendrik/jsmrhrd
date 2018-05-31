<?php
session_start();
?>
<!doctype html>
<html class="fixed">
	<head>

		<title>JASAMARGA HRD</title>
		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="repository/assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="repository/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="repository/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="repository/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="repository/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="repository/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="repository/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="repository/assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
		
			<div class="center-sign">
			
				<a href="/" class="logo pull-left">
					<img src="repository/assets/private/Jasa_Marga_logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					
					<div class="panel-body">
						<form action="module/login_logout/Process.php" method="post" >
						
							<div style="width:100%;clear:both;">
								<?php include('module/include/system_message.php') ?>
							</div>
						
							<div class="form-group mb-lg">
								<label>Email</label>
								<div class="input-group input-group-icon">
									<input name="textEmail" autocomplete="off" type="email" class="form-control input-lg" />
									
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<a href="#" class="pull-right">Lost Password?</a>
								</div>
								<div class="input-group input-group-icon">
									<input name="textPassword" type="password" class="form-control input-lg" />
									
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>
							
							<div class="row" style="margin-bottom:10px;">
								<div class="col-sm-12 text-right">
									<button name="SubmitSignIn" type="submit" class="btn btn-primary hidden-xs" style="width:100%;">Sign In</button>
									<button name="SubmitSignIn" type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg" style="width:100%;">Sign In</button>
								</div>
							</div>
							
							<input type="hidden" name="module" value="login" />
							
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="repository/assets/vendor/jquery/jquery.js"></script>
		<script src="repository/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="repository/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="repository/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="repository/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="repository/assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="repository/assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="repository/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="repository/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="repository/assets/javascripts/theme.init.js"></script>

	</body>
</html>