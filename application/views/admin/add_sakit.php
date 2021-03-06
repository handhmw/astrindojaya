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
								<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-angle-double-left"></i></a> Permohonan</h2>
								<ul class="breadcrumb">                          
									<li class="breadcrumb-item active">Permohonan</li>
									<li class="breadcrumb-item active">Tambah Permohonan Sakit</li>
								</ul>
							</div>      
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 col-xl-12">						
							<div class="card mb-3">
								<div class="card-header">
									<h5><i class="fa fa-plus-square"></i> <?php echo $judul; ?></h5>
								</div>	
								<div class="card-body">
		
									<?php echo form_open("admin/save_sakit", array('enctype'=>'multipart/form-data')); ?>
									<div class="form-group row">
										<label for="" class="col-sm-3 col-form-label">Kode Permohonan</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="id_skt" readonly value="<?php echo set_value('id_skt'); ?><?= $kode; ?>">
											<?php echo form_error('id_skt'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label for="" class="col-sm-3 col-form-label">Nama Pemohon</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="namanya" name="nama_skt"  value="<?php echo set_value('nama_skt'); ?>">
											<?php echo form_error('nama_skt'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">NIK</label>
										<div class="col-sm-6">
											<input type="number" class="form-control" name="nik_skt"  value="<?php echo set_value('nik_skt'); ?>">
											<?php echo form_error('nik_skt'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Jabatan</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="jabatan_skt"  value="<?php echo set_value('jabatan_skt'); ?>">
											<?php echo form_error('jabatan_skt'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label for="" class="col-sm-3 col-form-label">Tanggal Permintaan</label>
										<div class="col-sm-6">
											<input id="tgl_awal" type="text" class="form-control" name="tgl_awal_skt"  value="<?php echo set_value('tgl_awal_skt'); ?>">
											<?php echo form_error('tgl_awal_skt'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label for="" class="col-sm-3 col-form-label">Tanggal Akhir</label>
										<div class="col-sm-6">
											<input id="tgl_akhir" type="text" class="form-control" name="tgl_akhir_skt"  value="<?php echo set_value('tgl_akhir_skt'); ?>">
											<?php echo form_error('tgl_akhir_skt'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Jumlah Hari</label>
										<div class="col-sm-6">
											<input type="number" class="form-control" name="jml_skt"  value="<?php echo set_value('jml_skt'); ?>">
											<?php echo form_error('jml_skt'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Penyakit</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="penyakit_skt"  value="<?php echo set_value('penyakit_skt'); ?>">
											<?php echo form_error('penyakit_skt'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label for="" class="col-sm-3 col-form-label">Keterangan Lain</label>
										<div class="col-sm-6">
											<textarea class="form-control" rows="5" cols="30" name="keterangan_skt" value="<?php echo set_value('keterangan_skt'); ?>"><?php echo set_value('keterangan_skt'); ?></textarea>
											<?php echo form_error('keterangan_skt'); ?>
										</div>
									</div>
									<div class="form-group row">
									<label class="col-sm-3 col-form-label">Nama PJS</label>
										<div class="col-sm-6">
											<select class="form-control" name="pjs_skt" value="<?php echo set_value('pjs_skt'); ?>">
												<option selected>--Pilih PJS--</option>
            									<?php foreach($pjs as $row)
													{ echo '<option value="'.$row->nama_kry.'">'.$row->nama_kry.'</option>';}
												?>
											</select>
											<?php echo form_error('pjs_skt'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Status</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="status_skt"  value="Pending" readonly>
											<?php echo form_error('status_skt'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label for="" class="col-sm-3 col-form-label">Lampiran</label>
										<div class="col-sm-6">
											<div class="file-upload">
												<div class="file-select">
													<div class="file-select-button" id="fileName">Choose File</div>
												<div class="file-select-name" id="noFile">No file chosen...</div> 
													<input type="file" name="lampiran_skt" id="chooseFile">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-6">
											<button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
											<a href="<?php echo site_url();?>admin/sakit" class="btn btn-xs btn-danger" role="button">
											<i class="fa fa-angle-double-left"></i><span> Batal</span></a>
										</div>
									</div>
									<?php echo form_close(); ?>
								</div>							
							</div><!-- end card-->					
						</div>
					</div>
				</div>
			<!-- End Main Content -->
			</div>
		<?php include ('decorations/footer.php');?>
		<script src="<?php echo base_url() ?>assets/js/upload.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery.mask.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#tgl_awal').mask('00-00-0000',{placeholder:"dd-mm-yyyy"});
				$('#tgl_akhir').mask('00-00-0000',{placeholder:"dd-mm-yyyy"});
			});
		</script>
	</body>
</html>

