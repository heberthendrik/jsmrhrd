<?php include('../include/top_header.php') ?>
<header class="page-header">
	<h2>Analysis</h2>
	<div class="right-wrapper pull-right">
		<ol class="breadcrumbs">
			<li>
				<a href="#">
				<i class="fa fa-home"></i>
				</a>
			</li>
			<li><span>Analysis</span></li>
		</ol>
		<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
	</div>
</header>
<?php include('../include/system_message.php') ?>
<form action="Process.php" method="post" class="form-horizontal row-border">
	<header class="panel-heading" style="margin-top:20px;">
		<h2 class="panel-title">Variasi Report</h2>
	</header>
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-group accordion accordion-semi" id="accordion3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_Jabatan_VS_RangeAge.php" target="_blank">Rekaptulasi Jumlah Karyawan per Jabatan dan Umur</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_Jabatan_VS_TahunPensiun.php" target="_blank">Rekaptulasi Jumlah Karyawan per Jabatan dan Tahun Pensiun</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_Jabatan_VS_GradeStruktural.php" target="_blank">Rekaptulasi Grade Struktural per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_Jabatan_VS_GradeOperasional.php" target="_blank">Rekaptulasi Grade Operasional per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_Jabatan_VS_GradeFungsional.php" target="_blank">Rekaptulasi Grade Fungsional per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_Jabatan_VS_PendidikanYangDimiliki.php" target="_blank" >Rekaptulasi Pendidikan yang Dimiliki Karyawan per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_Jabatan_VS_MasaBakti.php" target="_blank">Rekaptulasi Masa Bakti per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_Gender.php" target="_blank">Rekaptulasi Jumlah Karyawan per Gender</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_Jabatan.php" target="_blank">Rekaptulasi Jumlah Karyawan per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_JabatanGrafik.php" target="_blank">Grafik Jumlah Karyawan per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_PendidikanDimilikiGrafik.php" target="_blank">Grafik Jumlah Karyawan per Pendidikan yang Dimiliki</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_PendidikanDiakuiGrafik.php" target="_blank">Grafik Jumlah Karyawan per Pendidikan yang Diakui</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_GenderGrafik.php" target="_blank">Grafik Jumlah Karyawan per Gender</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_AgamaGrafik.php" target="_blank">Grafik Jumlah Karyawan per Agama</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="ViewReport_RangeUsiaGrafik.php" target="_blank">Grafik Jumlah Karyawan per Range Usia</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="#" target="_blank" style="color:red">Rekaptulasi Status Keluarga per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="#" target="_blank" style="color:red">Rekaptulasi Agama per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="#" target="_blank" style="color:red">Rekaptulasi Usia per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="#" target="_blank" style="color:red">Rekaptulasi Masa Bakti per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="#" target="_blank" style="color:red">Rekaptulasi Tidak Tetap per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="#" target="_blank" style="color:red">Jumlah Karyawan per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="#" target="_blank" style="color:red">Jumlah Karyawan per Gender</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="#" target="_blank" style="color:red">Grafik Jumlah Karyawan Operasional VS Non Operasional</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="#" target="_blank" style="color:red">Grafik Jumlah Karyawan per Department</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="#" target="_blank" style="color:red">Grafik Jumlah Karyawan per Jabatan</a> 
							</h4>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"> 
								<a class="collapsed" href="#" target="_blank" style="color:red">Test</a> 
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="module" value="UserAdd" />
	</div>
</form>
<?php include('../include/bottom_footer.php') ?>