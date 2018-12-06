<!doctype html>
<html lang="en">

<?php include ('decorations/header.php');?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/datepicker/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/datepicker/css/bootstrap-datepicker3.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/datepicker/css/bootstrap-datepicker3.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/datepicker/css/bootstrap-datepicker3.min.css">

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
								<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-angle-double-left"></i></a> Resign</h2>
								<ul class="breadcrumb">                            
									<li class="breadcrumb-item">Karyawan</li>
									<li class="breadcrumb-item active">Karyawan Resign</li>
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

									<?php echo form_open('admin/save_resign', ['class' => 'form-horizontal', 'method' => 'post']); ?>
										<div class="form-group row">
										<label for="" class="col-sm-3 col-form-label">ID Resign</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="id_rs" readonly value="<?php echo set_value('id_rs'); ?><?= $kode; ?>">
												<?php echo form_error('id_rs'); ?>
											</div>
										</div>
										<div class="form-group row">
										<label for="" class="col-sm-3 col-form-label">Bulan</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="bulan_rs" value="<?php echo set_value('bulan_rs'); ?>">
												<?php echo form_error('bulan_rs'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Nama Lengkap</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="nama_rs" value="<?php echo set_value('nama_rs'); ?>">
												<?php echo form_error('nama_rs'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Pangkat</label>
											<div class="col-sm-6">
												<select class="form-control" name="pangkat_rs" value="<?php echo set_value('pangkat_rs'); ?>">
												<?php echo form_error('pangkat_rs'); ?>
													<option disabled selected >-Pilih pangkat-</option>
														<?php foreach($pgk as $row) { ?>
															<option value="<?php echo $row->pangkat;?>"><?php echo $row->pangkat;?></option>
														<?php } ?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Departemen</label>
											<div class="col-sm-6">
												<select class="form-control" name="dep_rs" value="<?php echo set_value('dep_rs'); ?>">
												<?php echo form_error('dep_rs'); ?>
													<option disabled selected >-Pilih Departemen-</option>
														<?php foreach($dep as $row) { ?>
															<option value="<?php echo $row->departemen;?>"><?php echo $row->departemen;?></option>
														<?php } ?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Jabatan</label>
											<div class="col-sm-6">
												<select class="form-control" name="jabatan_rs" value="<?php echo set_value('jabatan_rs'); ?>">
												<?php echo form_error('jabatan_rs'); ?>
													<option disabled selected >-Pilih Jabatan-</option>                   
														<?php foreach($jbt as $row) { ?>
															<option value="<?php echo $row->jabatan;?>"><?php echo $row->jabatan;?></option>
														<?php } ?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Tanggal Masuk</label>
											<div class="col-sm-6">
												<input id="tgl_masuk" type="text" name="tgl_masuk_rs" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Tanggal Resign</label>
											<div class="col-sm-6">
												<input id="tgl_resign" type="text" name="tgl_resign_rs" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Masa Kerja (Bulan)</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="masa_bulan_rs" value="<?php echo set_value('masa_bulan'); ?>"><?php echo form_error('masa_bulan'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Masa Kerja (Tahun)</label>
											<div class="col-sm-6">
											<input type="text" class="form-control" name="masa_tahun_rs" value="<?php echo set_value('masa_tahun'); ?>"><?php echo form_error('masa_tahun'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Keterangan</label>
											<div class="col-sm-6">
												<textarea class="form-control" rows="5" cols="30" name="keterangan_rs"></textarea>
											</div>
										</div>
										<br>
										<div class="form-group row">
											<div class="col-sm-6">
												<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
												<a href="<?php echo site_url();?>admin/resign" class="btn btn-xs btn-danger" role="button">
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
<script src="<?php echo base_url() ?>assets/datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>assets/datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
	$.fn.datepicker.dates['id'] = {
				days: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
				daysShort: ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"],
				daysMin: ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"],
				months: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
				monthsShort: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
				today: "Hari Ini",
				clear: "Clear",
				format: "yyyy-mm-dd",
				titleFormat: "MM yyyy", /* Leverages same syntax as ‘format’ */
				weekStart: 0
	};
</script>
<script type="text/javascript">
    $(document).ready(function () {
		$('#tgl_kerja').datepicker({
			format: "dd-mm-yyyy",
			language: "id",
			endDate: "0d",
			autoclose: true
        });

        $('#tgl_masuk').datepicker({
			format: "dd-mm-yyyy",
			language: "id",
			endDate: "0d",
			autoclose: true
        });

		$('#tgl_resign').datepicker({
			format: "dd-mm-yyyy",
			language: "id",
			endDate: "0d",
			autoclose: true
		});
	}); 
</script>

</body>
<!-- Mirrored from thememakker.com/templates/lucid/hr/html/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Aug 2018 03:23:51 GMT -->
</html>

