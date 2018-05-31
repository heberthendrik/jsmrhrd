<?php include('../include/top_header.php') ?>
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
		<h2 class="panel-title">Data Registrasi Pengguna Baru</h2>
	</header>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<div class="block-web">
					<div class="porlets-content">
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Depan</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="textFirstname" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Belakang</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="textLastname">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" placeholder="contoh: email.address@domain.com" name="textEmail" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Kata Sandi</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" name="textPassword" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Konfirmasi Kata Sandi</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" placeholder="" name="textPassword2" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status</label>
							<div class="col-sm-9">
								<select class="form-control" id="source" name="selectStatus">
									<option value="0"> Non-Aktif </option>
									<option value="1"> Aktif </option>
								</select>
							</div>
							<!--/col-sm-9--> 
						</div>
					</div>
					<!--/porlets-content-->
				</div>
				<!--/block-web--> 
			</div>
			<!--/col-md-6-->
		</div>
	</div>
	<header class="panel-heading" style="margin-top:20px;">
		<h2 class="panel-title">Hak Akses Pengguna</h2>
	</header>
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-group accordion accordion-semi" id="accordion3">
					<?php
						for( $i=0;$i<$function_GetAllAdminMenuSidebar['TOTAL_ROW'];$i++ ){
						
							if( $function_GetAllAdminMenuSidebar['FOR_AGENT'][$i] == 0 ){
								?>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#ac3-<?php echo ($i+1); ?>"> 
								<i class="fa fa-angle-right"></i> <?php echo $function_GetAllAdminMenuSidebar['NAME'][$i];?> 
								</a> 
							</h4>
						</div>
						<div style="height: 0px;" id="ac3-<?php echo ($i+1);?>" class="panel-collapse collapse">
							<div class="panel-body">
								<ul>
									<li style="list-style-type: none;">
										<input type="checkbox" name="CheckboxMainmenuID[]" value="<?php echo $function_GetAllAdminMenuSidebar['ID'][$i];?>" /> 
										<span style="font-weight:bold;">[MAIN MENU] -- <?php echo strtoupper($function_GetAllAdminMenuSidebar['NAME'][$i]);?></span>
									</li>
									<?php
										$this_submenu_metadata['PARENT_MENU_ID'] = $function_GetAllAdminMenuSidebar['ID'][$i];
										$function_GetAllAdminSubMenuSidebar = GetAllAdminSubMenuSidebar($this_submenu_metadata);
										
										for( $j=0;$j<$function_GetAllAdminSubMenuSidebar['TOTAL_ROW'];$j++ ){
											?>
									<li style="list-style-type: none;">
										<input type="checkbox" name="CheckboxSubmenuID[]" value="<?php echo $function_GetAllAdminSubMenuSidebar['ID'][$j] ;?>" /> 
										[SUB MENU] -- <?php echo $function_GetAllAdminSubMenuSidebar['NAME'][$j] ;?>
									</li>
									<?php
										}
										
										?>
								</ul>
							</div>
						</div>
					</div>
					<?php	
						}
						
						
						}
						?>
				</div>
			</div>
		</div>
		<input type="hidden" name="module" value="UserAdd" />
	</div>
</form>
<?php include('../include/bottom_footer.php') ?>