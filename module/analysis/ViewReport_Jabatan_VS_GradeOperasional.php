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
	<h2 class="panel-title">Rekaptulasi Jumlah Karyawan per Jabatan dan Grade Operasional</h2>
</header>
<div class="panel-body" style="margin-top:25px;">
	<div class="col-md-12">
		<section class="panel">
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover mb-none">
						<thead>
							<tr>
								<th>Jabatan</th>
								<?php
								$function_GetAllGrade = GetAllGrade();
								for( $i=0;$i<=$function_GetAllGrade['TOTAL_ROW'];$i++ ){
									?>
									<th><?php echo $function_GetAllGrade['GRADE'][$i];?></th>
									<?php
								}
								?>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$function_GetAllJabatan = GetAllJabatan();
							
							for( $i=0;$i<$function_GetAllJabatan['TOTAL_ROW'];$i++ ){
								$subtotal_perrow_counter = 0;
								?>
								<tr>
									<td><?php echo $function_GetAllJabatan['JABATAN'][$i];?></td>
									<?php
									
									for( $j=0;$j<=$function_GetAllGrade['TOTAL_ROW'];$j++ ){
									
										$query = 
										"
										SELECT 
											count(id) as total_row
										from jsmrhrd_employee
										where
											GRADE_ID = '".$function_GetAllGrade['ID'][$j]."'
											and JABATAN_ID = '".$function_GetAllJabatan['ID'][$i]."'
										";
										//echo '<br>'.$query;
										$result = $db->query($query);
										$row = $result->fetch_assoc();
										$total_row = $row['total_row'];
										
										if( $total_row == 0 ){
											$display_number = '<span style="color:#eee;">'.$total_row.'</span>';
										} else {
											$display_number = $total_row;
										}
									
										?>
										<td><?php echo $display_number;?></td>
										<?php
										$subtotal_perrow_counter += $total_row;
									}
									$subtotal_perrow_repo[] = $subtotal_perrow_counter;
									?>
									<td><?php echo $subtotal_perrow_counter;?></td>
								</tr>	
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>
<?php include('../include/bottom_footer.php') ?>