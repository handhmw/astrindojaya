<!doctype html>
<html lang="en">

<?php include ('decorations/header.php');?>
<script>
  $(document).ready(function(){
    $("#kosong").hide();
  });
  </script>

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
									<li class="breadcrumb-item active">Karyawan</li>
								</ul>
							</div>      
						</div>
					</div>

                    <div class="row clearfix">
						<div class="col-lg-4">
                            <div class="card">
                                <div class="body">
                                    <form method="post" action="<?php echo base_url("admin/form_preview"); ?>" enctype="multipart/form-data">
                                        <div class="file-upload">
                                            <div class="file-select">
                                                <div class="file-select-button" id="fileName">Choose File</div>
                                                    <div class="file-select-name" id="noFile">No file chosen...</div> 
                                                    <input type="file" name="file" id="chooseFile">
                                            </div>
                                        </div><br>
                                        <!-- <input type="submit" name="preview" value="Preview" class="btn btn-xs btn-success" role="button"> -->
                                    </form>
                                    <form method="post" action="<?php echo base_url("admin/import"); ?>">
                                        <input type="submit" name="import" value="Import" class="btn btn-xs btn-primary" role="button">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                        <?php
                                            if(isset($_POST['preview'])){ 
                                                if(isset($upload_error)){ 
                                                echo "<div style='color: red;'>".$upload_error."</div>"; 
                                                die; 
                                                }
                                                
                                                echo "<form method='post' action='".base_url("admin/import")."'>";
                                                echo "<button type='submit' name='import' class='btn btn-xs btn-primary'>Import</button>";
                                                
                                                echo "<div style='color: red;' divisi='kosong'>
                                                Semua data belum diisi, Ada <span divisi='jumlah_kosong'></span> data yang belum diisi.
                                                </div>";
                                                
                                                echo "
                                                <table border='1'>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>NIK</th>
                                                    <th>Jabatan</th>
                                                    <th>Perangkat</th>
                                                    <th>Divisi</th>
                                                    <th>Departemen</th>
                                                    <th>Unit/Cabang</th>
                                                    <th>Nama Panggilan</th>
                                                    <th>Identitas</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Kewarganegaraan</th>
                                                    <th>Agama</th>
                                                    <th>NPWP</th>
                                                    <th>Alamat</th>
                                                    <th>Telp. Rumah</th>
                                                    <th>No. Handphone</th>
                                                    <th>Tanggal Masuk</th>
                                                    <th>Status Kerja</th>
                                                    <th>Status Pernikahan</th>
                                                    <th>Email</th>
                                                </tr>";
                                                
                                                $numrow = 1;
                                                $kosong = 0;
                                                
                                                foreach($sheet as $row){ 
                                                $id                = $row['A'];
                                                $nama              = $row['B'];
                                                $nik               = $row['C'];
                                                $jabatan           = $row['D'];
                                                $pangkat           = $row['E'];
                                                $divisi            = $row['F'];
                                                $departemen        = $row['G'];
                                                $unit              = $row['H'];
                                                $nama_panggilan    = $row['I'];
                                                $identitas         = $row['J'];
                                                $jk                = $row['K'];
                                                $tempat_lahir      = $row['L'];
                                                $tgl_lahir         = $row['M'];
                                                $negara            = $row['N'];
                                                $agama             = $row['O'];
                                                $npwp              = $row['P'];
                                                $alamat            = $row['Q'];
                                                $tlp_rumah         = $row['R'];
                                                $no_hp             = $row['S'];
                                                $tgl_masuk         = $row['T'];
                                                $status_kerja      = $row['U'];
                                                $status_nikah      = $row['V'];
                                                $email             = $row['W'];
                                                
                                                if(empty($id) 
                                                    && empty($nama) 
                                                    && empty($nik)
                                                    && empty($jabatan) 
                                                    && empty($pangkat) 
                                                    && empty($divisi) 
                                                    && empty($departemen) 
                                                    && empty($unit)
                                                    && empty($nama_panggilan) 
                                                    && empty($identitas) 
                                                    && empty($jk) 
                                                    && empty($tempat_lahir) 
                                                    && empty($tgl_lahir) 
                                                    && empty($negara)
                                                    && empty($agama) 
                                                    && empty($npwp) 
                                                    && empty($alamat) 
                                                    && empty($tlp_rumah) 
                                                    && empty($no_hp) 
                                                    && empty($tgl_masuk)
                                                    && empty($status_kerja) 
                                                    && empty($status_nikah) 
                                                    && empty($email) 
                                                    )

                                                    continue; 
                                                    if($numrow > 1){
                                                        $id_td              = ( ! empty($id))? "" : " style='background: #E07171;'"; 
                                                        $nama_td            = ( ! empty($nama))? "" : " style='background: #E07171;'"; 
                                                        $nik_td             = ( ! empty($nik))? "" : " style='background: #E07171;'";
                                                        $jabatan_td         = ( ! empty($jabatan))? "" : " style='background: #E07171;'"; 
                                                        $pangkat_td         = ( ! empty($pangkat))? "" : " style='background: #E07171;'"; 
                                                        $divisi_td          = ( ! empty($divisi))? "" : " style='background: #E07171;'";
                                                        $departemen_td      = ( ! empty($departemen))? "" : " style='background: #E07171;'"; 
                                                        $unit_td            = ( ! empty($unit))? "" : " style='background: #E07171;'";
                                                        $nama_panggilan_td  = ( ! empty($nama_panggilan))? "" : " style='background: #E07171;'"; 
                                                        $identitas_td       = ( ! empty($identitas))? "" : " style='background: #E07171;'"; 
                                                        $jk_td              = ( ! empty($jk))? "" : " style='background: #E07171;'";
                                                        $tempat_lahir_td    = ( ! empty($tempat_lahir))? "" : " style='background: #E07171;'"; 
                                                        $tgl_lahir_td       = ( ! empty($tgl_lahir))? "" : " style='background: #E07171;'";
                                                        $negara_td          = ( ! empty($negara))? "" : " style='background: #E07171;'"; 
                                                        $agama_td           = ( ! empty($agama))? "" : " style='background: #E07171;'"; 
                                                        $npwp_td            = ( ! empty($npwp))? "" : " style='background: #E07171;'";
                                                        $alamat_td          = ( ! empty($alamat))? "" : " style='background: #E07171;'"; 
                                                        $tlp_rumah_td       = ( ! empty($tlp_rumah))? "" : " style='background: #E07171;'";
                                                        $no_hp_td           = ( ! empty($no_hp))? "" : " style='background: #E07171;'"; 
                                                        $tgl_masuk_td       = ( ! empty($tgl_masuk))? "" : " style='background: #E07171;'";
                                                        $status_kerja_td    = ( ! empty($status_kerja))? "" : " style='background: #E07171;'"; 
                                                        $status_nikah_td    = ( ! empty($status_nikah))? "" : " style='background: #E07171;'";
                                                        $email_td           = ( ! empty($email))? "" : " style='background: #E07171;'";
                                                                                            
                                                    if(empty($is) or empty($nama) or empty($jabatan) or empty($pangkat)){
                                                        $kosong++; 
                                                        }
                                                                                            
                                                        echo "<tr>";
                                                            echo "<td".$id_td.">".$id."</td>";                                  
                                                            echo "<td".$nama_td.">".$nama."</td>";
                                                            echo "<td".$nik_td.">".$nik."</td>";
                                                            echo "<td".$jabatan_td.">".$jabatan."</td>";
                                                            echo "<td".$pangkat_td.">".$pangkat."</td>";
                                                            echo "<td".$divisi_td.">".$divisi."</td>";
                                                            echo "<td".$departemen_td.">".$departemen."</td>";
                                                            echo "<td".$unit_td.">".$unit."</td>";
                                                            echo "<td".$nama_panggilan_td.">".$nama_panggilan."</td>";
                                                            echo "<td".$identitas_td.">".$identitas."</td>";
                                                            echo "<td".$jk_td.">".$jk."</td>";
                                                            echo "<td".$tempat_lahir_td.">".$tempat_lahir."</td>";
                                                            echo "<td".$tgl_lahir_td.">".$tgl_lahir."</td>";
                                                            echo "<td".$negara_td.">".$negara."</td>";
                                                            echo "<td".$agama_td.">".$agama."</td>";
                                                            echo "<td".$npwp_td.">".$npwp."</td>";
                                                            echo "<td".$alamat_td.">".$alamat."</td>";
                                                            echo "<td".$tlp_rumah_td.">".$tlp_rumah."</td>";
                                                            echo "<td".$no_hp_td.">".$no_hp."</td>";
                                                            echo "<td".$tgl_masuk_td.">".$tgl_masuk."</td>";
                                                            echo "<td".$status_kerja_td.">".$status_kerja."</td>";
                                                            echo "<td".$status_nikah_td.">".$status_nikah."</td>";
                                                            echo "<td".$email_td.">".$email."</td>";
                                                        echo "</tr>";
                                                    }
                                                $numrow++;
                                                }
                                                
                                                echo "</table>";
                                                
                                                if($kosong > 0){
                                                ?>  
                                                <script>
                                                $(document).ready(function(){
                                                    $("#jumlah_kosong").html('<?php echo $kosong; ?>');
                                                    $("#kosong").show();
                                                });
                                                </script>
                                                <?php
                                                }else{ 
                                                echo "<hr>";
                                                
                                                echo "<button type='submit' name='import'>Import</button>";
                                                echo "<a href='".base_url("admin/data_karyawan")."'>Cancel</a>";
                                                }
                                                echo "</form>";
                                            }
                                        ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<!-- End Main Content -->
</div>

<?php include ('decorations/footer.php');?>
<script src="<?php echo base_url() ?>assets/js/upload.js"></script>
</body>
<!-- Mirrored from thememakker.com/templates/lucid/hr/html/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Aug 2018 03:23:51 GMT -->
</html>
