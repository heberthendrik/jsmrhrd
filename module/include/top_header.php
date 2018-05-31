<?php
include('../../library/function_list.php');?>			
<?php
PreventAdminURLDirectAccess();
$session_input_parameter['ID'] = $_SESSION['JSMR_HRD']['USER_ID'];
$function_GetUserByID = GetUserByID($session_input_parameter);
?>
<!doctype html>
<html class="fixed sidebar-light">
	<head>

		<title>JSMR HRD</title>
		<!-- Basic -->
		<meta charset="UTF-8">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../../repository/assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="../../repository/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../../repository/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="../../repository/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="../../repository/assets/vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="../../repository/assets/vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="../../repository/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="../../repository/assets/vendor/morris.js/morris.css" />		
		<link rel="stylesheet" href="../../assets/vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="../../assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
		<link rel="stylesheet" href="../../repository/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
		<link rel="stylesheet" href="../../repository/assets/vendor/chartist/chartist.min.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../../repository/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="../../repository/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../../repository/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="../../repository/assets/vendor/modernizr/modernizr.js"></script>

		<style>
			.header .separator{
				background-color:none!important;
				background-image:none!important;
			}
		</style>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header topheader">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="../../repository/assets/private/Jasa_Marga_logo.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
						
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="../../repository/assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info">
								<span class="name"><?php echo $function_GetUserByID['FIRSTNAME'];?> </span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<!--
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								-->
								<li>
									<a role="menuitem" tabindex="-1" href="../login_logout/Process.php?module=logout"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				

				<?php include('../include/navigation_sidebar.php'); ?>
				
				<section role="main" class="content-body">