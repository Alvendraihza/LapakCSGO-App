<?php
	session_start();
	include "koneksi.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Keranjang | LAPAK CSGO</title>

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
		<div id="content" class="martop100"> 
			<div class="container">
				<?php 
					include "koneksi.php";

					$idn = $_GET["nota_id"];

					$sql = "SELECT * FROM tbl_pembelian
					JOIN tbl_pelanggan
					ON tbl_pembelian.id_pelanggan = tbl_pelanggan.id_pelanggan
					JOIN tbl_produk
					ON tbl_pembelian.id_produk = tbl_produk.id_produk
					WHERE id_pembelian='$idn'";
				$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
				$data =  mysqli_fetch_array($query);
				?>
				<div class="row">
					<div class="col-md-12">
						<h1 class="display-4">
							<i class="fa fa-book" aria-hidden="true"></i> 
							ID #<span class="kodeku"><?php echo $data["rkode"];?></span>
						</h1>
						<hr>
					</div>
				</div>

				<div class="row">
					<dl>
						<dt>Nama Pelanggan</dt>
						<dd><?php echo $data["nama_pelanggan"];?></dd>
						<dt>Tanggal Pembelian</dt>
						<dd><?php echo $data["tanggal_pembelian"];?></dd>
					</dl>
					<div class="table table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Produk</th>
									<th>Harga</th>
									<th>Jumlah</th>
									<th>Subharga</th>
								</tr>
							</thead>
							<tbody>
								
								<?php 
									$no = 1; //nomor urut
									$totalbelanja = 0;
									
										$sql = "SELECT * FROM tbl_pembelian_produk
												JOIN tbl_produk
												ON tbl_pembelian_produk.id_produk = tbl_produk.id_produk
												WHERE id_pembelian='$idn'";
										$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

										while ($data = mysqli_fetch_array($query)) {?>

										<?php $jmlproduk = $data["harga_produk"] * $data["jumlah"]; ?>

											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $data["nama_produk"];?></td>
												<td><?php echo $data["harga_produk"];?></td>
												<td><?php echo $data["jumlah"];?></td>
												<td><?php echo number_format($jmlproduk);?></td>
											</tr>
											<?php $no++; ?>
											<?php $totalbelanja+=$jmlproduk; ?>
										<?php }
								?>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="3"></th>
									<th>Total Belanja</th>
									<th>Rp. <?php echo number_format($totalbelanja);?></th>
								</tr>
							</tfoot>
						</table>
						<div class="alert alert-info" role="alert">
							<p>Silahkan segera melakukan pembayaran dan simpan ID Order</p>
							<p>
								Nomor Rekening BCA A.N. Muhammad Alvendra Ihza<br>
								Bank BCA, Jakarta<br>
								0660 949 429
							</p>
						</div>
					</div>
					
				</div>
								
			</div>
		</div> <!-- end of content -->
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