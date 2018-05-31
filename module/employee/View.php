<?php include('../include/top_header.php') ?>
			
<header class="page-header">
	<h2>Karyawan</h2>

	<div class="right-wrapper pull-right">
		<ol class="breadcrumbs">
			<li>
				<a href="index.html">
					<i class="fa fa-home"></i>
				</a>
			</li>
			<li><span>Karyawan</span></li>
		</ol>

		<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
	</div>
</header>
<div class="panel-body" style="text-align:right;margin-bottom:20px;">
	<div class="row">
		<div class="col-md-12">
			<a href="Add.php"><button type="button" class="btn btn-primary">Add</button></a>
		</div>
	</div>
</div>
<header class="panel-heading">
	<h2 class="panel-title">Master Data</h2>
</header>
<div class="panel-body">
	<table class="table table-bordered table-striped mb-none" id="datatable-default">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Grade</th>
				<th>Lokasi</th>
				<th>Tindakan</th>
			</tr>
		</thead>
		<tbody>
			<?php
															
			$function_GetAllEmployee = GetAllEmployee();
			
			for( $i=0;$i<$function_GetAllEmployee['TOTAL_ROW'];$i++ ){
			
				$karyawan_parameter['ID'] = $function_GetAllEmployee['ID'][$i];
				$function_GetJabatanByID = GetJabatanByID($karyawan_parameter);
				
				$grade_parameter['ID'] = $function_GetAllEmployee['GRADE_ID'][$i];
				$function_GetGradeByID = GetGradeByID($grade_parameter);
				
				$lokasi_parameter['ID'] = $function_GetAllEmployee['LOCATION_ID'][$i];
				$function_GetLokasiByID = GetLokasiByID($lokasi_parameter);
			
				?>
				<tr>
					<td><?php echo $function_GetAllEmployee['NAMA'][$i];?></td>
					<td><?php echo $function_GetJabatanByID['JABATAN'][0];?></td>
					<td><?php echo $function_GetGradeByID['GRADE'][0];?></td>
					<td><?php echo $function_GetLokasiByID['LOKASI'][0];?></td>
					<td><a href="Detail.php?id=<?php echo $function_GetAllEmployee['ID'][$i];?>"><i class="fa fa-sign-in"></i> Lihat Detail</a></td>
				</tr>
				<?php
			}
			
			?>
			
		</tbody>
	</table>
</div>

					
<?php include('../include/bottom_footer.php') ?>
