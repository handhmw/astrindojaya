<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Maintenance</title>
</head>

<?php include ('decorations/header.php');?>

<body class="theme-cyan">
			<!-- Start Main Content -->
			<div id="wrapper">
				<div class="vertical-align-wrap">
					<div class="vertical-align-middle maintenance">

					<div class="text-center">
						<article>
							<h1>Assalamualaikum, <?php echo $this->session->userdata('name');?>.</h1>
							<div>
								<p>Mohon maaf halaman yang anda akses belum bisa digunakan karena masih dalam proses pengembangan.
								<br>Untuk info lebih lanjut bisa hubungi divisi developer kami.</p>
								<p>&mdash; The Team</p>
							</div>
						</article>
						<div class="margin-top-30">
							<a href="<?php echo site_url('staff/logout');?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> <span>Go Back</span></a>
							<a href="<?php echo site_url('staff/logout');?>" class="btn btn-info"><i class="fa fa-home"></i> <span>Home</span></a>
						</div>
					</div>
					</div>
				</div>
</div>
			<!-- End Main Content -->
    
</div>


</body>
<!-- Mirrored from thememakker.com/templates/lucid/hr/html/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Aug 2018 03:23:51 GMT -->
</html>
