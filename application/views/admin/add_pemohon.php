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
								<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-angle-double-left"></i></a> Master Data</h2>
								<ul class="breadcrumb">                          
									<li class="breadcrumb-item active">Master Data</li>
									<li class="breadcrumb-item active">Pemohon</li>
								</ul>
							</div>      
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 col-xl-12">						
									<div class="card mb-3">
										<div class="card-header">
											<h5><i class="fa fa-plus-square-o"></i> <?php echo $judul; ?></h5>
										</div>
											
										<div class="card-body">

											<?php echo form_open('admin/save_pemohon', ['class' => 'form-horizontal', 'method' => 'post']); ?>
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">Kode Pemohon</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" name="id_pemohon" readonly value="<?php echo set_value('id_pemohon'); ?><?= $kode; ?>"><?php echo form_error('id_pemohon'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label"></label>
												<div class="col-sm-6">
													<select class="form-control" name="id" id="idk">
														<option disabled selected>--Pilih Nama Pemohon--</option>
															<?php foreach($idk as $row) { ?>
																<option value="<?php echo $row->id_kry;?>"><?php echo $row->nik_kry;?> - <?php echo $row->nama_kry;?></option>
															<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">NIK</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="nik_kry" name="nik_pemohon"  value="<?php echo set_value('nik_pemohon'); ?>"><?php echo form_error('nik_pemohon'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">Nama pemohon</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="nama_kry" name="nama_pemohon"  value="<?php echo set_value('nama_pemohon'); ?>"><?php echo form_error('nama_pemohon'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-sm-3 col-form-label">Jabatan pemohon</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="jabatan_kry" name="jabatan_pemohon"  value="<?php echo set_value('jabatan_pemohon'); ?>"><?php echo form_error('jabatan_pemohon'); ?>
												</div>
											</div>
											<br>
											<div class="form-group row">
												<div class="col-sm-6">
													<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
													<a href="<?php echo site_url();?>admin/pemohon" class="btn btn-xs btn-danger" role="button">
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
<script type="text/javascript">
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
                    $.each(data,function(id_pemohon, nama_pemohon, nik_pemohon, jabatan_pemohon){
                        $('[id="nama"]').val(data.nama);
                        $('[id="nik"]').val(data.nik);
                        $('[id="jabatan"]').val(data.jabatan);
                    });   
                }
            });
            return false;
        });
	});
</script>

</body>
</html>

