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
								<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Dashboard</h2>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>                            
									<li class="breadcrumb-item active">Karyawan</li>
									<li class="breadcrumb-item active">Penilaian Karyawan</li>
								</ul>
							</div>      
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 col-xl-12">						
									<div class="card mb-3">
										<div class="card-header">
											<h5><i class="fa fa-plus-square-o"></i><?php echo $judul; ?></h5>
										</div>
											
										<div class="card-body">
											<div class="alert alert-info alert-dismissible" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<i class="fa fa-info-circle"></i> <b>PETUNJUK PENILAIAN</b> <br>
												<p>Nilai dibawah ini digunakan untuk penilaian karyawan:</p>
												<p><b>4 Sangat Baik :</b> Secara keseluruhan kinerja Karyawan istimewa dan melampaui standar/target yang diberikan. 
												Berjasa memberi nilai tambah suatu hasil  ilai kerja, menghasilkan karya yang meningkatkan produktifitas/kualitas secara nyata.</p>
												<p><b>3 Baik :</b> Kinerja Karyawan sesuai/sedikit diatas standar/target yang ditetapkan. Target terlampaui. Bisa diandalkan dan diberi tanggung jawab lebih.</p>
												<p><b>2 Cukup :</b> Kinerja Karyawan sedkit dibawah standar. Beberapa target tidak tercapai. Masih memerlukan bantuan/arahan/bimbingan.</p>
												<p><b>1 Sangat Kurang :</b> Kinerja Karyawan dibawah standar. Hampir tidak memenuhi semua standar/target kerja. Membutuhkan bantuan/arahan/bimbingan yang sangat intensif.</p>
												<p><b>-1 Buruk :</b> Kinerja Karyawan jauh dibawah standar, tidak memenuhi semua standar/target kerja. Kerja Karyawan perlu ditinjau kembali.</p>
											</div>

											<?php echo form_open('admin/save_penilaian', ['class' => 'form-horizontal', 'method' => 'post']); ?>
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">ID Penilaian</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" name="id" readonly value="<?php echo set_value('id'); ?><?= $kode; ?>"><?php echo form_error('id'); ?>
												</div>
											</div>
											<!-- <div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">ID Karyawan</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" name="kode" id="kode" value="<?php echo set_value('id'); ?>"><?php echo form_error('id'); ?>
												</div>
											</div> -->
											<div class="form-group row">
												<label for="dep" class="col-sm-3 col-form-label">Nama Lengkap</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama'); ?>"><?php echo form_error('nama'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="nama_pemohon" class="col-sm-3 col-form-label">NIK</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" name="nik" value="<?php echo set_value('nik'); ?>"><?php echo form_error('nik'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="jbt" class="col-sm-3 col-form-label">Departemen</label>
												<div class="col-sm-6">
												<select class="form-control" name="departemen" value="<?php echo set_value('departemen'); ?>"><?php echo form_error('departemen'); ?>
													<option value="disabled selected">-Pilih Departemen-</option>
														<?php foreach($dep as $dep) { ?>
															<option value="<?php echo $dep->departemen;?>"><?php echo $dep->departemen;?></option>
														<?php } ?>
												</select>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">Tanggal Masuk</label>
												<div class="col-sm-6">
													<input id="tgl_masuk" type="text" name="tgl_masuk" class="form-control" placeholder="13/06/2018">
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">Jabatan</label>
												<div class="col-sm-6">
												<select class="form-control" name="jabatan" value="<?php echo set_value('jabatan'); ?>"><?php echo form_error('jabatan'); ?>
													<option value="disabled selected">-Pilih Jabatan-</option>                   
														<?php foreach($jbt as $jbt) { ?>
															<option value="<?php echo $jbt->jabatan;?>"><?php echo $jbt->jabatan;?></option>
														<?php } ?>
												</select>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">Penilai</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" name="penilai" value="<?php echo set_value('penilai'); ?>"><?php echo form_error('penilai'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">Jabatan Penilai</label>
												<div class="col-sm-6">
												<select class="form-control" name="jabatan_penilai" value="<?php echo set_value('jabatan_penilai'); ?>"><?php echo form_error('jabatan_penilai'); ?>
													<option value="disabled selected">-Pilih Jabatan-</option>                   
														<?php foreach($jbt2 as $jbt) { ?>
															<option value="<?php echo $jbt->jabatan;?>"><?php echo $jbt->jabatan;?></option>
														<?php } ?>
												</select>
												</div>
											</div>
											<br>
											<div class="form-group row">
												<div class="col-sm-6">
													<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
													<a href="<?php echo site_url();?>admin/penilaian" class="btn btn-xs btn-danger" role="button">
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
    $(document).ready(function () {
		$('#tgl_masuk').datepicker({
			locale:'id',
            format: "dd/mm/yyyy",
            autoclose: true
        });
	}); 

	$(document).ready(function(){
			 $('#kode').on('input',function(){
                
                var kode=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('admin/add_penilaian')?>",
                    dataType : "JSON",
                    data : {kode: kode},
                    cache:false,
                    success: function(data){
                        $.each(data,function(kode, nama, nik, departemen, tgl_masuk, jabatan){
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
<!-- Mirrored from thememakker.com/templates/lucid/hr/html/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Aug 2018 03:23:51 GMT -->
</html>

