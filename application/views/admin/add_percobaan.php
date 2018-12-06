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
								<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-angle-double-left"></i></a> Percobaan</h2>
								<ul class="breadcrumb">                            
									<li class="breadcrumb-item">Karyawan</li>
									<li class="breadcrumb-item active">Karyawan Percobaan</li>
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
									<div class="alert alert-success alert-dismissible fade show" role="alert">
									<strong>Catatan</strong><li>Objectives diisi oleh atasan langsung disesuaikan dengan pekerjaan masing-masing karyawan. Khusus untuk tim sales salah satu isi dari objectives adalah sales achievement.</li> 
									<li>Kriteria pengisian untuk penilaian adalah sebagai berikut :</li> 
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

									<?php echo form_open('admin/save_percobaan', ['class' => 'form-horizontal', 'method' => 'post']); ?>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Kode Percobaan</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="id_cb" readonly value="<?php echo set_value('id_cb'); ?><?= $kode; ?>">
												<?php echo form_error('id_cb'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label"></label>
											<div class="col-sm-6">
												<select class="form-control" id="idk">
													<option disabled selected >--Pilih Karyawan--</option>
														<?php foreach($idk as $id_) { ?>
															<option value="<?php echo $id_->id_kry;?>"><?php echo $id_->nik_kry;?> - <?php echo $id_->nama_kry;?></option>
														<?php } ?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Nama Karyawan</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="nama_cb" value="<?php echo set_value('nama_cb'); ?>">
												<?php echo form_error('nama_cb'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">NIK</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="nik_cb" value="<?php echo set_value('nik_cb'); ?>">
												<?php echo form_error('nik_cb'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Departemen</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="dep_cb" value="<?php echo set_value('dep_cb'); ?>">
												<?php echo form_error('dep_cb'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Jabatan</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="jabatan_cb" value="<?php echo set_value('jabatan_cb'); ?>">
												<?php echo form_error('jabatan_cb'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Tanggal Masuk</label>
											<div class="col-sm-6">
												<input id="tgl_kerja" type="text" class="form-control" name="tgl_masuk_cb" value="<?php echo set_value('tgl_masuk_cb'); ?>">
												<?php echo form_error('tgl_masuk_cb'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Jenis Percobaan</label>
											<div class="col-sm-6">
												<select class="form-control" name="jenis_cb" value="<?php echo set_value('jenis_cb'); ?>">
												<?php echo form_error('jenis_cb'); ?>
													<option value="disabled selected">--Pilih Jenis--</option>
														<?php foreach($krj as $kr_) { ?>
															<option value="<?php echo $kr_->status_kerja;?>"><?php echo $kr_->status_kerja;?></option>
														<?php } ?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Tanggal Mulai</label>
											<div class="col-sm-6">
												<input id="tgl_mulai" type="text" class="form-control" name="tgl_mulai_cb" value="<?php echo set_value('tgl_mulai_cb'); ?>">
												<?php echo form_error('tgl_mulai_cb'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Tanggal Selesai</label>
											<div class="col-sm-6">
												<input id="tgl_selesai" type="text" class="form-control" name="tgl_selesai_cb" value="<?php echo set_value('tgl_selesai_cb'); ?>">
												<?php echo form_error('tgl_selesai_cb'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Percobaan Ke</label>
											<div class="col-sm-6">
												<input type="number" class="form-control" name="percobaan_cb" value="<?php echo set_value('percobaan_cb'); ?>">
												<?php echo form_error('percobaan_cb'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Catatan HR/GA</label>
											<div class="col-sm-6">
												<textarea class="form-control" rows="5" cols="30" name="catatan_hr_cb"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Catatan Atasan Langsung</label>
											<div class="col-sm-6">
												<textarea class="form-control" rows="5" cols="30" name="catatan_atasan_cb"></textarea>
											</div>
										</div>
										<br>
										<div class="form-group row">
											<div class="col-sm-6">
												<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
												<a href="<?php echo site_url();?>admin/percobaan" class="btn btn-xs btn-danger" role="button">
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

        $('#tgl_mulai').datepicker({
			format: "dd-mm-yyyy",
			language: "id",
			endDate: "0d",
			autoclose: true
        });

		$('#tgl_selesai').datepicker({
			format: "dd-mm-yyyy",
			language: "id",
			endDate: "0d",
			autoclose: true
		});
	}); 

	$(document).ready(function(){
		$('#idk').on('input',function(){
                
            var idk = $(this).val();
            $.ajax({
                type : "POST",
				url  : "<?php echo base_url('admin/get_karyawan')?>",
                dataType : "JSON",
                data : {id: idk},
                cache:false,
                success: function(data){
                    $.each(data,function(id, nama, nik, departemen, tgl_masuk, jabatan){
                        $('[name="nama"]').val(data.nama);
                        $('[name="nik"]').val(data.nik);
                        $('[name="departemen"]').val(data.departemen);
                        $('[name="tgl_masuk"]').val(data.tgl_masuk);
                        $('[name="jabatan"]').val(data.jabatan);
                    });   
                }
            });
            return false;
        });

	});
</script>

</body>
</html>

