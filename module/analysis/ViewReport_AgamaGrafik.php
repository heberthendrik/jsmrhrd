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
	<h2 class="panel-title">Rekaptulasi Jumlah Karyawan per Agama</h2>
</header>
<div class="panel-body" style="margin-top:25px;">
	<div class="col-md-12">
		<section class="panel">
			<div class="panel-body">
				<div id="GrafikJumlahKaryawanPerPendidikanYangDimiliki" class="ct-chart ct-perfect-fourth ct-golden-section"></div>
			</div>
		</section>
	</div>
</div>
<?php include('../include/bottom_footer.php') ?>

<script>
(function() {
if( $('#GrafikJumlahKaryawanPerPendidikanYangDimiliki').get(0) ) {
	new Chartist.Bar('#GrafikJumlahKaryawanPerPendidikanYangDimiliki', {
		labels: [
		<?php
		$function_GetAllAgama = GetAllAgama();
		for( $i=0;$i<$function_GetAllAgama['TOTAL_ROW'];$i++ ){
		
			$query = "select count(id) as total_row from jsmrhrd_employee where AGAMA_ID = '".$function_GetAllAgama['ID'][$i]."'";
			$result = $db->query($query);
			$row = $result->fetch_assoc();
			$jumlah[] = $row['total_row'];
				
				
			echo '"'.$function_GetAllAgama['AGAMA'][$i].' ['.$row['total_row'].']"';
			
			if( $i != ($function_GetAllAgama['TOTAL_ROW']-1) ){
				echo ',';
			}
		}
		?>
		],
		series: 
		[
			[
			<?php
			for( $i=0;$i<count($jumlah);$i++ ){
	
				echo '"'.$jumlah[$i].'"';
				
				if( $i != (count($jumlah)-1) ){
					echo ',';
				}
			}
			?>
			]
		]
	}, {
		seriesBarDistance: 10,
		reverseData: true,
		horizontalBars: false,
		axisY: {
			offset: 70
		}
	});
}
})();
</script>
