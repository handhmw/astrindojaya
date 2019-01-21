<!doctype html>
<html lang="en">

<?php include ('decorations/header.php');?>
<body class="theme-cyan">
	<div id="wrapper">
    <?php include ('decorations/navbar.php');?>
    	<?php include ('decorations/sidebar.php');?>
			<!-- Start Main Content -->
			<div id="main-content">
				<div class="container-fluid">
					<div class="block-header">
						<div class="row">
							<div class="col-lg-6 col-md-8 col-sm-12">
								<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-angle-double-left"></i></a> Dashboard</h2>
								<ul class="breadcrumb">                            
								</ul>
							</div>      
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-6 col-md-6">
							<div class="card">
								<div class="header">
									<h2><i class="fa fa-calendar"></i> Ulang Tahun <?php echo bulan() ?></h2>
								</div>
								<div class="body todo_list">
									<table class="table table-responsive" style="font-size:10px;">
										<?php foreach ($bdy as $kry): ?>
											<tr>
												<td><b style=color:#01b2c6><?= $kry->nama_kry ?></b> - <?= $kry->jabatan_kry ?> - <?= $kry->tgl_lahir_kry ?></td>
											</tr>
										<?php endforeach; ?>
									</table>
								</div>
							</div>                    
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="card">
								<div class="header">
									<h5><i class="fa fa-arrow-circle-up"></i> Visi & Misi Astrindo Senayasa </h5>
								</div>
								<div class="body">
									<h5><u>VISI</u></h5>
									<p>Meningkatkan kepuasan pelanggan, loyalitas, dan kedekatan hubungan dengan pelanggan dengan cara mendistribusikan produk teknologi informasi yang berkualitas tinggi dan berkelas dunia.</p>
									<h5><u>MISI</u></h5>
									<p>Memberikan nilai-nilai terbaik kepada pemangku kepentingan :
										<br>- Memberikan pertumbuhan bisnis yang baik kepada pemilik merk
										<br>- Memberikan peluang bisnis kepada mitra kerja
										<br>- Memberikan pelayanan terbaik kepada pelanggan
										<br>- Memberikan lingkungan kerja yang baik kepada karyawan</p>
								</div> 
							</div>
						</div>            
					</div>
			<?php include ('decorations/footer.php');?> 
	</body>
</html>
