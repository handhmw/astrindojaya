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
									<li class="breadcrumb-item">Persetujuan</li>
									<li class="breadcrumb-item active">Cuti</li>
								</ul>
							</div>      
						</div>
					</div>

					<div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="header">
                                    <h5><i class="fa fa-address-card"></i> <?php echo $judul; ?></h5>
                                </div>
                                <div class="body">
                                    <table class="table table-bordered" width="100%" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <?php foreach ($cuti as $row): 
                                            $status = $row->status_ct;
                                            switch ($status) {
                                                case 'Disetuui':
                                                    $color = "#ff591e";
                                                    break;
                                                case 'Pending':
                                                    $color = "#5c86b8";
                                                    break;
                                                case 'Ditolak':
                                                    $color = "#5CB85C";
                                                    break;
                                                default:
                                                    $color = "#D9534F";
                                                    break;
                                            }    
                                            ?>
                                            <tr>
                                                <td width="20%"> Kode Cuti </td>
                                                <td><?= $row->id_ct ?></td>
                                            </tr>
                                            <tr>
                                                <td> Nama Pemohon </td>
                                                <td><?= $row->nama_ct ?></td>
                                            </tr>
                                            <tr>
                                                <td> Divisi Pemohon </td>
                                                <td><?= $row->divisi_ct ?></td>
                                            </tr>
                                            <tr>
                                                <td> Tanggal Cuti</td>
                                                <td><?= $row->tgl_ct ?></td>
                                            </tr>
                                            <tr>
                                                <td> Jenis Cuti</td>
                                                <td><?= $row->jenis_ct ?></td>
                                            </tr>
                                            <tr>
                                                <td> Alasan Cuti </td>
                                                <td><?= $row->alasan_ct ?></td>
                                            </tr>
                                            <tr>
                                                <td> Informasi Lain </td>
                                                <td><?= $row->informasi_ct ?></td>
                                            </tr>
                                            <tr>
                                                <td> Nama PJS </td>
                                                <td><?= $row->pjs_ct ?></td>
                                            </tr>
                                            <tr>
                                                <td> Status Permohonan </td>
                                                <td><?='<font color="'.$color.'">'.$row->status_ct.'</font>';?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="body">
                                    <a href="<?php echo base_url() ?>report/print_cuti" class="btn btn-xs btn-primary" role="button" title="Print Data">
                                    <i class="fa fa-print"></i><span> Print</span></a>
                                    <a href="<?php echo site_url();?>manager/cuti" class="btn btn-xs btn-danger" role="button">
									<i class="fa fa-angle-double-left"></i><span> Back</span></a>
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
