<?php include('../include/top_header.php') ?>
<header class="page-header">
	<h2>Jabatan</h2>
	<div class="right-wrapper pull-right">
		<ol class="breadcrumbs">
			<li>
				<a href="#">
				<i class="fa fa-home"></i>
				</a>
			</li>
			<li><span>Jabatan</span></li>
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
				<th>ID</th>
				<th>Jabatan</th>
				<th>Tindakan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$function_GetAllJabatan = GetAllJabatan();
				
				for( $i=0;$i<$function_GetAllJabatan['TOTAL_ROW'];$i++ ){
				
					?>
			<tr>
				<td><?php echo $function_GetAllJabatan['ID'][$i];?></td>
				<td><?php echo $function_GetAllJabatan['JABATAN'][$i];?></td>
				<td><a href="Detail.php?id=<?php echo $function_GetAllJabatan['ID'][$i];?>"><i class="fa fa-sign-in"></i> Lihat Detail</a></td>
			</tr>
			<?php
				}
				?>
		</tbody>
	</table>
</div>
<?php include('../include/bottom_footer.php') ?>