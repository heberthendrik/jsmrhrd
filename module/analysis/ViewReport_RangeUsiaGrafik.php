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
	<h2 class="panel-title">Rekaptulasi Jumlah Karyawan per Range Usia</h2>
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
		labels: 
		[
		<?php
		$query_update_usia = 
		"
		update jsmrhrd_employee
		set USIA = FLOOR(DATEDIFF(CURRENT_DATE, STR_TO_DATE(TANGGAL_LAHIR, '%Y-%m-%d'))/365)
		";
		$result_update_usia = $db->query($query_update_usia);
		
		$query = "select count(id) as total_row from jsmrhrd_employee where usia <='30'";
		$result = $db->query($query);
		$row = $result->fetch_assoc();
		$total_karyawan[] = $row['total_row'];
		?>
		'<=30 [<?php echo $row['total_row'];?>]'
		,
		<?php
		$query_update_usia = 
		"
		update jsmrhrd_employee
		set USIA = FLOOR(DATEDIFF(CURRENT_DATE, STR_TO_DATE(TANGGAL_LAHIR, '%Y-%m-%d'))/365)
		";
		$result_update_usia = $db->query($query_update_usia);
		
		$query = "select count(id) as total_row from jsmrhrd_employee where usia >='31' and usia <='45'";
		$result = $db->query($query);
		$row = $result->fetch_assoc();
		$total_karyawan[] = $row['total_row'];
		?>
		'31-45 [<?php echo $row['total_row'];?>]'
		,
		<?php
		$query_update_usia = 
		"
		update jsmrhrd_employee
		set USIA = FLOOR(DATEDIFF(CURRENT_DATE, STR_TO_DATE(TANGGAL_LAHIR, '%Y-%m-%d'))/365)
		";
		$result_update_usia = $db->query($query_update_usia);
		
		$query = "select count(id) as total_row from jsmrhrd_employee where usia >='46' and usia <='54'";
		$result = $db->query($query);
		$row = $result->fetch_assoc();
		$total_karyawan[] = $row['total_row'];
		?>
		'46-54 [<?php echo $row['total_row'];?>]'
		,
		<?php
		$query_update_usia = 
		"
		update jsmrhrd_employee
		set USIA = FLOOR(DATEDIFF(CURRENT_DATE, STR_TO_DATE(TANGGAL_LAHIR, '%Y-%m-%d'))/365)
		";
		$result_update_usia = $db->query($query_update_usia);
		
		$query = "select count(id) as total_row from jsmrhrd_employee where usia >='55'";
		$result = $db->query($query);
		$row = $result->fetch_assoc();
		$total_karyawan[] = $row['total_row'];
		?>
		'>=55 [<?php echo $row['total_row'];?>]'
		],
		series: 
		[
			[
			<?php echo $total_karyawan[0];?>
			,
			<?php echo $total_karyawan[1];?>
			,
			<?php echo $total_karyawan[2];?>
			,
			<?php echo $total_karyawan[3];?>
			]
		]
	}, {
		seriesBarDistance: 10,
		reverseData: false,
		horizontalBars: false,
		axisY: {
			offset: 70
		}
	});
}
})();
</script>
