<?php include('../include/top_header.php') ?>
<?php
	$input_parameter['ID'] = $_GET['id'];
	$function_this_page_GetUserByID = GetUserByID($input_parameter);
	
	?>
<header class="page-header">
	<h2>User</h2>
	<div class="right-wrapper pull-right">
		<ol class="breadcrumbs">
			<li>
				<a href="#">
				<i class="fa fa-home"></i>
				</a>
			</li>
			<li><span>User</span></li>
		</ol>
		<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
	</div>
</header>
<?php include('../include/system_message.php') ?>
<form action="Process.php" method="post" class="form-horizontal row-border">
	<div class="panel-body" style="text-align:right;margin-bottom:20px;">
		<div class="row">
			<div class="col-md-12">
				<a href="View.php"><button type="button" class="btn btn-warning">Kembali</button></a>
				<input type="submit" name="submitSimpan" value="Simpan" class="btn btn-primary" />
			</div>
		</div>
	</div>
	<header class="panel-heading">
		<h2 class="panel-title">Form Ganti Password</h2>
	</header>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<div class="block-web">
					<div class="porlets-content">
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Depan</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="textFirstname" value="<?php echo $function_this_page_GetUserByID['FIRSTNAME'];?>" required disabled >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Belakang</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="textLastname"  value="<?php echo $function_this_page_GetUserByID['LASTNAME'];?>" required disabled >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" placeholder="contoh: email.address@domain.com" name="textEmail"  value="<?php echo $function_this_page_GetUserByID['EMAIL'];?>" required disabled >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Kata Sandi</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" name="textPassword" required >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Konfirmasi Kata Sandi</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" name="textPassword2" required >
							</div>
						</div>
					</div>
					<!--/porlets-content-->
				</div>
				<!--/block-web--> 
			</div>
			<!--/col-md-6-->
		</div>
		<!--/row--> 
		<input type="hidden" name="HiddenCurrentID" value="<?php echo $_GET['id'];?>" />
		<input type="hidden" name="module" value="UserChangePassword" />
	</div>
</form>
<?php include('../include/bottom_footer.php') ?>