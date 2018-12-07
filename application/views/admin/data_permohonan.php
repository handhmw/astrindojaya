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
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#upload" title="Import Data"><i class="fa fa-upload"></i> Import</button>     
                                    <a href="<?php echo base_url() ?>admin/print_permohonan" class="btn btn-xs btn-default" role="button" title="Print Data">
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
                                                        <a href="<?=base_url('report_permohonan/print_permohonan/'.$kry->id_pmhn)?>" class="btn btn-xs btn-dark m-r-5" role="button" title="Cetak">
                                                        <i class="fa fa-file-text"></i></a>
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
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="detail"><i class="icon-magnifier"></i> Detail Data Permohonan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class=" table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
                <?php echo form_open('.$kry->id_pmhn')?>
                    <tbody>
                        <tr>
                            <td width="10%"> Kode Permohonan </td>
                            <td width="2%">: </td>
                            <td> <?= $kry->id_pmhn ?></td>
                        </tr>
                        <tr>
                            <th class="text-nowrap" width="150">A. DATA PEMOHON</th>
                        </tr>
                        <tr>
                            <td width="10%"> Departemen </td>
                            <td width="2%">: </td>
                            <td> <?= $kry->dep_pmhn ?></td>
                        </tr>
                        <tr>
                            <td> Nama Pemohon </td>
                            <td>: </td>
                            <td> <?= $kry->nama_pemohon_pmhn ?></td>
                        </tr>
                        <tr>
                            <td> Jabatan Pemohon </td>
                            <td>: </td>
                            <td> <?= $kry->jabatan_pemohon_pmhn ?></td>
                        </tr>
                        <tr>
                            <th><br></th>
                        </tr>
                        <tr>
                            <th class="text-nowrap" width="150">B. KLASIFIKASI KEBUTUHAN</th>
                        </tr>
                        <tr>
                            <td> Jabatan </td>
                            <td>: </td>
                            <td> <?= $kry->jabatan_pmhn ?></td>
                        </tr>
                        <tr>
                            <td> Lokasi </td>
                            <td>: </td>
                            <td><?= $kry->lokasi_pmhn ?></td>
                        </tr>
                        <tr>
                            <td> Waktu </td>
                            <td>: </td>
                            <td><?= $kry->waktu_pmhn ?></td>
                        </tr>
                    <tr>
                                <td> Status </td>
                                <td>: </td>
                                <td><?= $kry->status_kerja_pmhn ?></td>
                            </tr>
                            <tr>
                                <td> Jumlah </td>
                                <td>: </td>
                                <td><?= $kry->jumlah_pmhn ?></td>
                            </tr>
                            <tr>
                                <td> Tanggal </td>
                                <td>: </td>
                                <td><?= $kry->tanggal_pmhn ?></td>
                            </tr>
                            <tr>
                                <td> Dasar Permohonan </td>
                                <td>: </td>
                                <td><?= $kry->dasar_permohonan_pmhn ?></td>
                            </tr>
                            <tr>
                                <td> Sumber Rekrutmen </td>
                                <td>: </td>
                                <td><?= $kry->sumber_rekrutmen_pmhn ?></td>
                            </tr>
                            <tr>
                                <td> Ringkasan Tugas </td>
                                <td>: </td>
                                <td><?= $kry->ringkasan_tugas_pmhn ?></td>
                            </tr>
                            <tr>
                                <th><br></th>
                                </tr>
                                <tr>
                                <th class="text-nowrap" width="150">C. PERSYARATAN</th>
                            </tr>
                            <tr>
                                <td> Gajih </td>
                                <td>: </td>
                                <td><?= $kry->gajih_pmhn ?></td>
                            </tr>
                            <tr>
                                <td> Jenis Kelamin </td>
                                <td>: </td>
                                <td><?= $kry->jk_pmhn?></td>
                            </tr>
                            <tr>
                                <td> Pendidikan </td>
                                <td>: </td>
                                <td><?= $kry->pendidikan_pmhn ?></td>
                            </tr>
                            <tr>
                                <td> Jurusan </td>
                                <td>: </td>
                                <td><?= $kry->jurusan_pmhn ?></td>
                            </tr>
                            <tr>
                                <td> Pengalaman Kerja </td>
                                <td>: </td>
                                <td><?= $kry->pengalaman_kerja_pmhn ?></td>
                            </tr>
                            <tr>
                                <td> Bidang </td>
                                <td>:</td>
                                <td><?= $kry->bidang_pmhn ?></td>
                            </tr>
                            <tr>
                                <td> Syarat Lainnya </td>
                                <td>:</td>
                                <td><?= $kry->syarat_lain_pmhn ?></td>
                            </tr>
                            <tr>
                                <td> Keterampilan </td>
                                <td>:</td>
                                <td><?= $kry->keterampilan_pmhn ?></td>
                            </tr>
                            <tr>
                                <th><br></th>
                            </tr>
                            <tr>
                                <th class="text-nowrap" width="150">D. TANGGAL BERGABUNG</th>
                            </tr>
                            <tr>
                                <td> Tanggal Bergabung </td>
                                <td>:</td>
                                <td><?= ($kry->tgl_bergabung_pmhn) ?></td>
                            </tr>
                            <tr>
                                <th><br></th>
                            </tr>
                            <tr>
                               <th class="text-nowrap" width="150">E. LAMPIRAN</th>
                            </tr>
                            <tr>
                                <td> Office Equipment </td>
                                <td>:</td>
                                <td><?= $kry->office_equipment_pmhn ?></td>
                            </tr>                 
                        </tbody>
                        <?php echo form_close(); ?>
                    </table>
                </div>
            </div>
         </div>
    </div>

<?php include ('decorations/footer.php');?>

</body>
</html>
