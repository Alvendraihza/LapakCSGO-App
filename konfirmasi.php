<?php 
	session_start();
	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Konfirmasi Pembayaran | LAPAK CSGO</title>

	<!-- Font awesome -->
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="custom-css/custom.css">

	<!-- CSS Bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css">

	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

	<style type="text/css">
		.kodeku{
			width: 200px;
			font-size: 50px;
			height: 100px;
			color: #e74c3c;
			font-family: 'Abril Fatface', cursive;
			border: none;
			background: none !important;
		}
	</style>

	<!-- chat -->
	<!--Start of Zendesk Chat Script-->
	<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
		$.src="https://v2.zopim.com/?642Il2m6pTaNQ3vnqc9Edd9EpqVeCSuT";z.t=+new Date;$.
		type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
	</script>
		<!--End of Zendesk Chat Script-->

</head>
<body>
	<div id="wrapper">
		<div id="header"> 
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php include "nav-page/navigasi.php";?>
					</div>
				</div>
			</div>

		</div> <!-- end of header -->
		<div id="content-detail" class="martop100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Ruang Member</li>
						  </ol>
						</nav>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<ul class="list-group">
						  <li class="list-group-item active">INFORMATION</li>
						  <li class="list-group-item"><a href="#">SERVICES</a></li>
						  <li class="list-group-item"><a href="#">BLOG</a></li>
						  <li class="list-group-item"><a href="#">ABOUT</a></li>
						  <li class="list-group-item"><a href="#">CONTACT</a></li>
						</ul>
					</div>
					<div class="col-md-9">
						<h4>Konfirmasi Pembayaran</h4>
						<p>Silahkan Upload Bukti Pembayaran</p>

						<?php

							include "koneksi.php";

							$sid = $_GET["struk_id"];

							$sql = "SELECT * FROM tbl_pembelian WHERE id_pembelian='$sid'";
							$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
							$data =  mysqli_fetch_array($query);
						?>

						<form action="insert-struk.php" method="post" enctype="multipart/form-data">
							<input type="hidden" name="idk" value="<?php echo $data["id_pembelian"];?>">
							<div class="form-group">
								<label>KODE PRODUK #</label>
								<input readonly class="form-control kodeku" type="text" name="rkd" value="<?php echo $data["rkode"];?>">
							</div>
							<div class="form-group">
								<input type="file" name="fileku" class="form-control-file">
							</div>
							<div class="form-group">
								<label>NO. Telepon / HP</label>
								<input type="text" name="tlp" placeholder="Masukkan Nomor Telepon" class="form-control" style="width: 50%;">
							</div>
							<div class="form-group">
								<button class="btn btn-primary" type="submit" name="submit">Upload</button>
								<button class="btn btn-danger" type="reset" name="reset">Clear</button>
							</div>
						</form>
						<ol style="font-style: italic; font-size: 11px;">
							<li>*Ukuran file maksimal 1MB</li>
							<li>*File yang diupload format gambar dengan ekstensi .jpg, .jpeg, .png</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<div id="footer"> 
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h4>INFORMATION</h4>
						<ul>
							<li><a href="#">Tentang kami</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Kebijakan</a></li>
							<li><a href="#">Hubungi kami</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h4>STORE ADDRESS</h4>
						<address>
							<ul>
								<li>
									<i class="fa fa-map-marker fa-fw"></i> <a href="#">Lokasi</a>
								</li>
								<li>
									<i class="fa fa-phone fa-fw"></i> <a href="#">021-02820245</a>
								</li>
								<li>
									<i class="fa fa-envelope-open fa-fw"></i> <a href="#">lapakcsgo@gmail.com</a>
								</li>
								<li>
									<i class="fa fa-clock-o fa-fw"></i> <a href="#">9:00 am to 7:00 pm</a>
								</li>
							</ul>
						</address>
					</div>
					<div class="col-md-3">
						<h4>MY ACCOUNT</h4>
						<ul>
							<li><a href="login.php">Sign in</a></li>
							<li><a href="#">View cart</a></li>
							<li><a href="#">Help</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h4>FOLLOW US</h4>
						<ul>
							<li><a class="soc" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="soc" href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a class="soc" href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a class="soc" href="#"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text-center">Hak cipta &copy; <?php echo date("Y"); ?> | oleh Alvendra </p>
					</div>
				</div>
			</div>

		</div> <!-- end of footer -->
		
	</div> <!-- end of wrapper -->

	<!-- Jquery -->
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<!-- Popper -->
	<script type="text/javascript" src="js/popper.js"></script>
	<!-- Bootstrap Plugin -->
	<script type="text/javascript" src="bootstrap-4.1.3-dist/js/bootstrap.js"></script>

</body>
</html>