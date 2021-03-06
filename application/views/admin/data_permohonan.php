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
								<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-angle-double-left"></i></a> Karyawan</h2>
								<ul class="breadcrumb">                            
									<li class="breadcrumb-item">Karyawan</li>
									<li class="breadcrumb-item active">Permohonan Karyawan</li>
								</ul>
							</div>      
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-12">
                            <div class="card">
                                <div class="header">
                                    <h5><i class="fa fa-users"></i> <?php echo $judul; ?></h5><br>
                                    <a href="<?php echo base_url();?>admin/add_permohonan" class="btn btn-xs btn-default" role="button" title="Tambah Karyawan">
                                    <i class="icon-plus"></i><span> Tambah</span></a>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter" title="Import Data"><i class="fa fa-upload"></i> Import</button>     
                                    <a href="<?php echo base_url() ?>report/print_permohonan" class="btn btn-xs btn-default" role="button" title="Print Data" target="_blank">
                                    <i class="fa fa-print"></i><span> Print</span></a>                       
                                </div>

                                <div class="body">
                                    <?php
                                        if(isset($_SESSION['hapus_sukses']) || isset($_SESSION['update_sukses'])) :
                                            $notif = '';
                                            isset($_SESSION['hapus_sukses']) ? $notif .= $_SESSION['hapus_sukses'] : '';
                                            isset($_SESSION['update_sukses']) ? $notif .= $_SESSION['update_sukses'] : '';
                                        ?>
                                        <div class="alert alert-success">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Sukses!</strong> <?php echo $notif; ?>
                                         </div>
                                    <?php endif;?>

                                    <div class="table-responsive">
                                        <table class="table table-bordered dataTable" cellspacing="0" id="examples">
                                            <thead style="background-color:#e9ecef;">
                                                <tr style="text-align:center;">
                                                    <th>No.</th>
                                                    <th>Nama Pemohon</th>
                                                    <th>Jabatan Pemohon</th>                                        
                                                    <th>Lokasi</th>
                                                    <th>Status Kerja</th> 
                                                    <th>Jabatan</th> 
                                                    <th>Jumlah</th> 
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; foreach ($karyawan as $kry): ?>
                                                <tr>
                                                    <td style="text-align: center;"><?= $no; ?></td>
                                                    <td><?= $kry->nama_pemohon_pmhn ?></td>
                                                    <td><?= $kry->jabatan_pemohon_pmhn ?></td>
                                                    <td><?= $kry->lokasi_pmhn ?></td>
                                                    <td><?= $kry->status_kerja_pmhn ?></td>
                                                    <td><?= $kry->jabatan_pmhn ?></td>
                                                    <td><?= $kry->jumlah_pmhn ?> Orang</td>
                                                    <td style="text-align: center;">
                                                    <!-- <button type="button" class="btn btn-xs btn-success m-r-5" data-toggle="modal" data-target="#detail" title="Detail"><i class="icon-magnifier"></i></button> -->
                                                        <a href="<?php echo base_url();?>admin/detail_permohonan/<?php echo $kry->id_pmhn;?>" class="btn btn-xs btn-success m-r-5" role="button" title="Detail">
                                                        <i class="icon-magnifier"></i>&nbsp;
                                                        <a href="<?php echo base_url();?>admin/edit_permohonan/<?php echo $kry->id_pmhn;?>" class="btn btn-xs btn-primary m-r-5" role="button" title="Edit">
                                                        <i class="icon-pencil"></i>&nbsp;
                                                        <a href="<?php echo base_url();?>admin/delete_permohonan/<?php echo $kry->id_pmhn;?>" onclick="return confirm('Apakah Anda Yakin?');" 
                                                        class="btn btn-xs btn-danger m-r-5" role="button" title="Hapus">
                                                        <i class="icon-trash"></i></a> 
                                                    </td>
                                                </tr>
                                                <?php $no++; endforeach; ?>
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

                    <!-- MODAL UPLOAD -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa fa-file-excel-o"></i> Upload Data Excel Anda</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url();?>admin/upload_percobaan/" enctype="multipart/form-data" method="post">
                                        <div class="file-upload">
                                            <div class="file-select">
                                                <div class="file-select-button" id="fileName">Choose File</div>
                                                <div class="file-select-name" id="noFile">No file chosen...</div> 
                                                    <input type="file" name="file" id="chooseFile">
                                                </div><br>
                                                <input type="submit" name="import" value="Import" class="btn btn-xs btn-primary" role="button">
                                            </div>
                                        </div>
                                    </form>
                                <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include ('decorations/footer.php');?>
        <script src="<?php echo base_url() ?>assets/js/upload.js"></script> 
    </body>
</html>
