<?php
	session_start();
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>DETAILS | LAPAK CSGO</title>

	<!-- Font awesome -->
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="custom-css/custom.css">

	<!-- CSS Bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="zoom-master/zoom.css">

	<!-- CSS owl Carousell -->
	<link rel="stylesheet" type="text/css" href="owlcarousel/assets/owl.carousel.css">

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
						<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
						  <a class="navbar-brand" href="index.php"><img class="mylogo" src="assets/logo4.png"></a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <ul class="navbar-nav mr-auto">
						      <li class="nav-item active">
						        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						      </li>
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Product
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="#">Gadgets</a>
						          <a class="dropdown-item" href="#">Accesories</a>
						          <div class="dropdown-divider"></div>
						          <a class="dropdown-item" href="#">Lainnya</a>
						        </div>
						      </li>
						    </ul>
						    <form class="form-inline my-2 my-lg-0">
						      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						    </form>
						  </div>
						</nav>
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
						    <li class="breadcrumb-item active" aria-current="page">Detail Barang</li>
						  </ol>
						</nav>
					</div>
				</div>
				<div class="row">

					<?php
						$idp = $_GET["detail_id"];

						$sql = "SELECT * FROM tbl_produk  WHERE id_produk='$idp'";
						$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
						$data = mysqli_fetch_array($query);
					?>
					<div class="col-md-3">
						<span class='zoom' id='ex1'>
							<img src='administrator/hasil-upload/<?php echo $data["foto"];?>' class="img-fluid" alt='Daisy on the Ohoopee'/>
						</span>
					</div>
					<div class="col-md-6">
						<h4 style="font-family: 'roboto';"><b style="padding-right: 300px;"><?php echo $data["nama_produk"];?></b>
						Rp. <?php echo $data["harga_produk"];?></h4>
						<hr>
						<p style="font-family: 'roboto'">
							<dl>
								<dd>Nama Senjata</dd>
								<dt><?php echo $data["nama_produk"];?></dt>
								<dd>Deskripsi</dd>
								<dt><?php echo $data["deskripsi_produk"];?></dt>
							</dl>	
						</p>
						<a href="beli.php?id=<?php echo $data["id_produk"];?>"><button class="btn btn-success btn-block btn-lg">Buy Now</button></a>
					</div>
					<div class="col-md-3">
						<ul class="list-group">
						  <li class="list-group-item active">DESCRIPTION</li>
						  <a href="https://www.macworld.co.uk/review/iphone/iphone-6s-review-3623611/"><li class="list-group-item">REVIEWS</li></a>
						  <a href="https://www.youtube.com/watch?v=uFysf4--Agg"><li class="list-group-item">VIDEO</li></a>
						  <a href="#"><li class="list-group-item">ADDITIONAL INFORMATION</li></a>
						  <a href="#"><li class="list-group-item">TAGS</li></a>
						</ul>
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 martop30">
						<h1 class="display-4"><i class="fa fa-codepen" aria-hidden="true"></i> Similars </h1>
						<hr>
					</div>
				</div>
			</div>
		</div>
		<div id="owl-carousel">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel">
							
							<?php

								$idp = $_GET["detail_id"];

								$sql = "SELECT * FROM tbl_produk ORDER BY id_produk DESC";
								$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
								while ($data = mysqli_fetch_array($query)) {?>

									<div class="item">
										<div class="col-md-2 martop30" style="max-width: 160%;">
											<div class="card">
											  <img class="card-img-top" src="administrator/hasil-upload/<?php echo $data["foto"];?>" alt="Card image cap">
											  <div class="card-body">
											    <h5 class="card-title"><?php echo $data["nama_produk"];?></h5>
											    <a href="detail.php?detail_id=<?php echo $data["id_produk"]?>" class="btn btn-primary">Detail</a>
											  </div>
											</div>
										</div>
									</div>
									
								<?php }
							?>
							
							
						</div>
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
							<?php if (isset($_SESSION['tiket_user'])):?>
								<li><a href="logout.php">Logout</a></li>
							<?php else: ?>
								<li><a href="login.php">Sign in</a></li>
							<?php endif ?>

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

	<!-- jquery zoom master -->

	<script type="text/javascript" src="zoom-master/jquery.zoom.js"></script>

	<!-- owl carousel -->
	<script type="text/javascript" src="owlcarousel/owl.carousel.js"></script>

	<script>
		$(document).ready(function(){
			$('#ex1').zoom();
			$('#ex2').zoom({ on:'grab' });
			$('#ex3').zoom({ on:'click' });			 
			$('#ex4').zoom({ on:'toggle' });
		});
	</script>

	<!-- Trigger Owl Carousel -->
	<script type="text/javascript">
		var owl = $('.owl-carousel');
		owl.owlCarousel({
		    items:4,
		    loop:true,
		    margin:10,
		    autoplay:true,
		    autoplayTimeout:2000,
		    autoplayHoverPause:true
		});
		$('.play').on('click',function(){
		    owl.trigger('play.owl.autoplay',[2000])
		})
		$('.stop').on('click',function(){
		    owl.trigger('stop.owl.autoplay')
		})
	</script>

</body>
</html>