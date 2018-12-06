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
								<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Dashboard</h2>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href=""><i class="icon-home"></i></a></li>                            
									<li class="breadcrumb-item">Karyawan</li>
									<li class="breadcrumb-item active">Training Karyawan</li>
								</ul>
							</div>      
						</div>
					</div>

					<div class="row clearfix">
		
						<div class="col-lg-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Data Training Karyawan</h2><br>
                                    <a href="#" type="button" class="btn btn-default" type="file"><i class="fa fa-file-pdf-o"></i><span> Pdf</span></a>
                                    <a href="#" type="button" class="btn btn-default" type="file"><i class="fa fa-file-excel-o"></i><span> Excel</span></a>                       
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped" cellspacing="0" id="addrowExample">
                                            <thead>
                                                <tr>
                                                    <th>Departemen</th>                                    
                                                    <th>Jabatan Pemohon</th>                                    
                                                    <th>Tanggal Permohonan</th>
                                                    <th>Jabatan</th> 
                                                    <th>Lokasi Penempatan</th> 
                                                    <th>Tgl. Kerja</th> 
                                                    <th>Status</th> 
                                                    <th>Jml. Dibutuhkan</th> 
                                                    <th>Dasar Permohonan</th> 
                                                    <th>Ringkasan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="gradeA">
                                                    <td>Tiger Nixon</td>
                                                    <td>Staff IT</td>
                                                    <td>Kantor Pusat</td>
                                                    <td>12 Agustus 2018</td>
                                                    <td>Percobaan</td>
                                                    <td>4</td>
                                                    <td>Penting</td>
                                                    <td>Jobstreet</td>
                                                    <td>Maintenance</td>
                                                    <td>Edinburgh</td>
                                                    <td class="actions">
                                                        <button class="btn btn-sm btn-icon btn-pure btn-success m-r-5"><i class="icon-magnifier"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </button>
                                </div>
                            </div>
                        </div>

					</div>
				</div>
			</div>
			<!-- End Main Content -->
</div>

<?php include ('decorations/footer.php');?>

</body>
<!-- Mirrored from thememakker.com/templates/lucid/hr/html/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Aug 2018 03:23:51 GMT -->
</html>
