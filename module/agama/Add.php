<?php include('../include/top_header.php') ?>
<header class="page-header">
	<h2>Agama</h2>
	<div class="right-wrapper pull-right">
		<ol class="breadcrumbs">
			<li>
				<a href="#">
				<i class="fa fa-home"></i>
				</a>
			</li>
			<li><span>Agama</span></li>
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
		<h2 class="panel-title">Data Pendaftaran Agama</h2>
	</header>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<div class="block-web">
					<div class="porlets-content">
						<div class="form-group">
							<label class="col-sm-3 control-label">Agama</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="textAgama">
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
		<input type="hidden" name="module" value="AgamaAdd" />
	</div>
</form>
<?php include('../include/bottom_footer.php') ?>