<?php include('../include/top_header.php') ?>
<header class="page-header">
	<h2>Data Pendaftaran Karyawan Baru</h2>
	<div class="right-wrapper pull-right">
		<ol class="breadcrumbs">
			<li>
				<a href="#">
				<i class="fa fa-home"></i>
				</a>
			</li>
			<li><span>Karyawan</span></li>
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
		<h2 class="panel-title">Data Diri</h2>
	</header>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<div class="block-web">
					<div class="porlets-content">
						<div class="form-group">
							<label class="col-sm-3 control-label">NPP <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<input required type="text" class="form-control" name="textNPP">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<input required type="text" class="form-control" name="textNama">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status Nikah <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<select required class="form-control" name="selectStatusNikahID">
									<option value="">--Pilih Status--</option>
									<?php
										$function_GetAllStatusNikah = GetAllStatusNikah();
										for( $i=0;$i<$function_GetAllStatusNikah['TOTAL_ROW'];$i++ ){
											?>
											<option value="<?php echo $function_GetAllStatusNikah['ID'][$i];?>"><?php echo $function_GetAllStatusNikah['STATUS_NIKAH'][$i];?></option>
											<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Dimiliki</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" name="textDemiliki">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Ditanggung</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" name="textDitanggung">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Gender <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<select required class="form-control" name="selectGenderID">
									<option value="">--Pilih Gender--</option>
									<option value="L">Pria</option>
									<option value="P">Wanita</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tanggal Lahir <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<input required type="date" class="form-control" name="dateTanggalLahir">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Agama </label>
							<div class="col-sm-9">
								<select required class="form-control" name="selectAgamaID">
									<option value="">--Pilih Agama--</option>
									<?php
										$function_GetAllAgama = GetAllAgama();
										for( $i=0;$i<$function_GetAllAgama['TOTAL_ROW'];$i++ ){
											?>
											<option value="<?php echo $function_GetAllAgama['ID'][$i];?>"><?php echo $function_GetAllAgama['AGAMA'][$i];?></option>
											<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Golongan Darah <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<select required class="form-control" name="selectGolonganDarahID">
									<option value="">--Pilih Golongan Darah--</option>
									<?php
										$function_GetAllGolonganDarah = GetAllGolonganDarah();
										for( $i=0;$i<$function_GetAllGolonganDarah['TOTAL_ROW'];$i++ ){
											?>
											<option value="<?php echo $function_GetAllGolonganDarah['ID'][$i];?>"><?php echo $function_GetAllGolonganDarah['GOLONGAN_DARAH'][$i];?></option>
											<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Alamat</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="textareaAlamat" style="height:75px;"></textarea>
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
	</div>
	
	
	<header class="panel-heading" style="margin-top:25px;">
		<h2 class="panel-title">Data Perusahaan</h2>
	</header>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<div class="block-web">
					<div class="porlets-content">
						<div class="form-group">
							<label class="col-sm-3 control-label">Grade <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<select required class="form-control" name="selectGradeID">
									<option value="">--Pilih Grade--</option>
									<?php
										$function_GetAllGrade = GetAllGrade();
										for( $i=0;$i<$function_GetAllGrade['TOTAL_ROW'];$i++ ){
											?>
											<option value="<?php echo $function_GetAllGrade['ID'][$i];?>"><?php echo $function_GetAllGrade['GRADE'][$i];?></option>
											<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Jabatan <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<select required class="form-control" name="selectjabatanID">
									<option value="">--Pilih Jabatan--</option>
									<?php
										$function_GetAllJabatan = GetAllJabatan();
										for( $i=0;$i<$function_GetAllJabatan['TOTAL_ROW'];$i++ ){
											?>
											<option value="<?php echo $function_GetAllJabatan['ID'][$i];?>"><?php echo $function_GetAllJabatan['JABATAN'][$i];?></option>
											<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status Karyawan <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<select required class="form-control" name="selectStatusKaryawanID">
									<option value="">--Pilih Jabatan--</option>
									<?php
										$function_GetAllStatusKaryawan = GetAllStatusKaryawan();
										for( $i=0;$i<$function_GetAllStatusKaryawan['TOTAL_ROW'];$i++ ){
											?>
											<option value="<?php echo $function_GetAllStatusKaryawan['ID'][$i];?>"><?php echo $function_GetAllStatusKaryawan['STATUS_KARYAWAN'][$i];?></option>
											<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Lokasi <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<select required class="form-control" name="selectLocationID">
									<option value="">--Pilih Lokasi--</option>
									<?php
										$function_GetAllLokasi = GetAllLokasi();
										for( $i=0;$i<$function_GetAllLokasi['TOTAL_ROW'];$i++ ){
											?>
											<option value="<?php echo $function_GetAllLokasi['ID'][$i];?>"><?php echo $function_GetAllLokasi['LOKASI'][$i];?></option>
											<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Mulai Kerja <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<input required type="date" class="form-control" name="dateMulaiKerja">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Pensiun <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<input required type="date" class="form-control" name="datePensiun">
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
	</div>
	
	<header class="panel-heading" style="margin-top:25px;">
		<h2 class="panel-title">Pendidikan</h2>
	</header>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<div class="block-web">
					<div class="porlets-content">
						<div class="form-group">
							<label class="col-sm-3 control-label">Pendidikan Diakui <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<select required class="form-control" name="selectPendidikanDiakuiID">
									<option value="">--Pilih Pendidikan--</option>
									<?php
										$function_GetAllPendidikan = GetAllPendidikan();
										for( $i=0;$i<$function_GetAllPendidikan['TOTAL_ROW'];$i++ ){
											?>
											<option value="<?php echo $function_GetAllPendidikan['ID'][$i];?>"><?php echo $function_GetAllPendidikan['PENDIDIKAN'][$i];?></option>
											<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Pendidikan Dimiliki <span style="color:red;">*</span></label>
							<div class="col-sm-9">
								<select required class="form-control" name="selectPendidikanDimilikiID">
									<option value="">--Pilih Pendidikan--</option>
									<?php
										$function_GetAllPendidikan = GetAllPendidikan();
										for( $i=0;$i<$function_GetAllPendidikan['TOTAL_ROW'];$i++ ){
											?>
											<option value="<?php echo $function_GetAllPendidikan['ID'][$i];?>"><?php echo $function_GetAllPendidikan['PENDIDIKAN'][$i];?></option>
											<?php
										}
									?>
								</select>
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
	</div>
	
	
	<input type="hidden" name="module" value="EmployeeAdd" />
</form>
<?php include('../include/bottom_footer.php') ?>