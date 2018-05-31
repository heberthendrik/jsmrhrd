<?php include('../include/top_header.php') ?>
<style>
	.topheader, .sidebar-left{
	display:none!important;
	}
	.content-body{
	margin-left:0px!important;
	padding:15px;
	}
	html.fixed .inner-wrapper{
	padding-top:0px;
	}
</style>

<header class="panel-heading" style="margin-top:20px;">
	<h2 class="panel-title">Rekaptulasi Jumlah Karyawan per Gender</h2>
</header>
<div class="panel-body" style="margin-top:25px;">
	<div class="col-md-12">
		<section class="panel">
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover mb-none">
						<thead>
							<tr>
								<th>Gender</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Pria</td>
								<td>
									<?php
									$query = 
									"
									SELECT
										count(id) as total_row
									from jsmrhrd_employee
									where
										GENDER = 'L'
									";
									$result = $db->query($query);
									$row = $result->fetch_assoc();
									$total_row = $row['total_row'];
									echo $total_row;
									?>
								</td>
							</tr>
							<tr>
								<td>Wanita</td>
								<td>
									<?php
									$query = 
									"
									SELECT
										count(id) as total_row
									from jsmrhrd_employee
									where
										GENDER = 'P'
									";
									$result = $db->query($query);
									$row = $result->fetch_assoc();
									$total_row = $row['total_row'];
									echo $total_row;
									?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>
<?php include('../include/bottom_footer.php') ?>