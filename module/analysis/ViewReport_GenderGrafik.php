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
		$query = "select count(id) as total_row from jsmrhrd_employee where gender = 'L'";
		$result = $db->query($query);
		$row = $result->fetch_assoc();
		$jumlah_pria = $row['total_row'];
		echo "'Pria [".$jumlah_pria."]'"
		?>
		,
		<?php
		$query = "select count(id) as total_row from jsmrhrd_employee where gender = 'P'";
		$result = $db->query($query);
		$row = $result->fetch_assoc();
		$jumlah_wanita = $row['total_row'];
		echo "'Wanita [".$jumlah_wanita."]'"
		?>
		],
		series: 
		[
			[
			<?php
			$query = "select count(id) as total_row from jsmrhrd_employee where gender = 'L'";
			$result = $db->query($query);
			$row = $result->fetch_assoc();
			echo $row['total_row'];
			?>
			,
			<?php
			$query = "select count(id) as total_row from jsmrhrd_employee where gender = 'P'";
			$result = $db->query($query);
			$row = $result->fetch_assoc();
			echo $row['total_row'];
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
