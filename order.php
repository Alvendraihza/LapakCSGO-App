<?php 
	session_start();
	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Ruang Anggota | LAPAK CSGO</title>

	<!-- Font awesome -->
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="custom-css/custom.css">

	<!-- CSS Bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css">

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
						<h4>Status Order dan Pembayaran</h4>

						<table class="table table-bordered table-striped table-hover" id="tabelku">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Beli</th>
									<th>Nama Produk</th>
									<th>Tanggal Pembelian</th>
									<th>Waktu</th>
									<th>Total</th>
									<th>Status</th>
									<th>Konfirmasi</th>
								</tr>
							</thead>
							<tbody>
								<?php
									include "koneksi.php";

									$idd = $_GET["id_order"];

									$sql = "SELECT * FROM tbl_pembelian
											JOIN tbl_produk
											ON tbl_pembelian.id_produk = tbl_produk.id_produk
											WHERE id_pelanggan = '$idd'
											ORDER BY id_pembelian DESC";
									$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

									$no = 1; //nomor urut
									date_default_timezone_set("Asia/Jakarta");
									while ($data = mysqli_fetch_array($query)) {
										$kdb = $data["rkode"];
										$nmp = $data["nama_produk"];
										$tgl = $data["tanggal_pembelian"];
										$wkt = $data["waktu"];
										$wkt2 = date ("H:i:s", strtotime($wkt));
										$ttb = $data["total_pembelian"];
										$sts = $data["status_pembayaran"];
										$idp = $data["id_pembelian"];

										echo "<tr>
												<td>$no</td>
												<td>$kdb</td>
												<td>$nmp</td>
												<td>$tgl</td>
												<td>$wkt2</td>
												<td>$ttb</td>
												<td>$sts</td>
												<td><a href='konfirmasi.php?struk_id=$idp'>Upload</td>
											</tr>";
											$no++;
									}
								?>
								
							</tbody>
						</table>
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