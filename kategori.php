<?php 

	session_start();

	include "koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kategori | LAPAK CSGO</title>

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
				<div class="row">
					<div class="col-md-12">
						<h1 class="display-4"><i class="fa fa-space-shuttle" aria-hidden="true"></i> Kategori Produk </h1>
						<hr>
					</div>
				</div>
				<div class="row">
					<?php 
						include "koneksi.php";

						$idk = $_GET["id"];
						$sql = "SELECT * FROM tbl_produk WHERE kategori_produk = '$idk'";
						$query = mysqli_query($konek, $sql) or die (mysqli_error($konek));
						while($data = mysqli_fetch_array($query)){
							//print_r($data);?>

							<div class="col-md-4 martop30">
								<div class="card">
								  <a class="img-opa" href="#">
										<img class="card-img-top" src="administrator/hasil-upload/<?php echo $data["foto"];?>" alt="Card image cap">
								  </a>	
								  <div class="card-body">
								    <h5 class="card-title"><?php echo $data["nama_produk"];?></h5>
								    <p class="card-text"><?php echo $data["deskripsi_produk"];?></p>
								    <a href="beli.php?id=<?php echo $data["id_produk"];?>" class="btn btn-success">Beli</a>
								    <a href="detail.php?detail_id=<?php echo $data["id_produk"];?>" class="btn btn-primary">Detail</a>
								  </div>
								</div>
							</div>
						<?php }
					?>
					
				</div>		
			</div>
		</div> <!-- end of content -->
		<div id="contex-two" class="martop30">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="display-4 martop30">Newsletter</h1>
						<form action="insert-news.php" method="post">
							<div class="form-group">
								<input type="text" class="form-control" name="subs" placeholder="Masukkan E-mail anda">
							</div>
							<div class="form-group">
								<button class="btn btn-dark">SUBSCRIBE</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> <!-- end of contex-two -->
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

	<!-- modal preloader -->
	<script type="text/javascript">
		$(document).ready(function(){
			$("#myModal").modal('show');
		});
	</script>

</body>
</html>