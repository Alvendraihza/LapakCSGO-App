<?php 

	session_start();

	include "koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>HOME | LAPAK CSGO</title>

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
		<div id="slider"> 
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="assets/slide1.png" alt="First slide">
			      <div class="brand-text">
			      	<h1 class="display-1">M4A1-S</h1>
			      	<p class="lead">The M4A4 is a Counter-Terrorist rifle featured exclusively in CSGO, replacing the previous Maverick M4A1 Carbine. It has the M4A1-S as its alternative loadout. </p>
			      	<a class="btn-shop" href="">SHOP NOW!</a>
			      </div>
			    </div>
			    <div class="carousel-item">
			    	<div class="brand-text">
			      	<h1 class="display-1 bold-text">AK-47</h1>
			      	<p class="lead">Powerful and reliable, the AK-47 is one of the most popular assault rifles in the world.</p>
			      	<a class="btn-shop" href="">SHOP NOW!</a>
			      </div>
			      <img class="d-block w-100" src="assets/slide2.png" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			    	<div class="brand-text">
			      	<h1 class="display-1 bold-text">AWP</h1>
			      	<p class="lead">Powerful and reliable, the AWP is one of the most popular weapon in the world.</p>
			      	<a class="btn-shop" href="">SHOP NOW!</a>
			      </div>
			      <img class="d-block w-100" src="assets/slide3.png" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

		</div> <!-- end of slider -->
		<div id="content" class="martop30"> 
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="display-4"><i class="fa fa-space-shuttle" aria-hidden="true"></i> Weapons </h1>
						<hr>
					</div>
				</div>
				<div class="row">
					<?php 
						include "koneksi.php";
						$sql = "SELECT * FROM tbl_produk ORDER BY id_produk DESC";
						$query = mysqli_query($konek, $sql) or die (mysqli_error($konek));
						while($data = mysqli_fetch_array($query)){?>
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
		<div id="contex" class="martop30">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3>Dragon Lore</h3>
						<p>Powerful and reliable, the AWP is one of the most popular weapon in the world.</p>
						<button type="button" class="btn btn-primary btn-lg">SHOP NOW!</button>
					</div>
				</div>
			</div>
		</div> <!-- end of contex -->
		<div id="testimoni">
			<div class="container">
				<div class="row">
					<div class="col-md-12 martop30">
						<h1 class="display-4"><i class="fa fa-comments" aria-hidden="true"></i> Testimony </h1>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<blockquote class="blockquote">
						  <p class="mb-0">"I loved everything about buying from you! Quickly services!".</p>
						  <footer class="blockquote-footer">Alvendra - <cite title="Source Title">Marketer</cite></footer>
						</blockquote>
					</div>
					<div class="col-md-6">
						<blockquote class="blockquote">
						  <p class="mb-0">"Hi guys! I'm soo impressed!!! Your service is unbeaten, support staff is so friendly...very knowledgeable and professional team!".</p>
						  <footer class="blockquote-footer">Binta - <cite title="Source Title">Marketer</cite></footer>
						</blockquote>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<blockquote class="blockquote">
						  <p class="mb-0">"WOW!!! I have no words! It was a unique and very enjoyable experience. You have such a diverse variety of beautiful products of the highest quality plus superb service!".</p>
						  <footer class="blockquote-footer">Kresna - <cite title="Source Title">Marketer</cite></footer>
						</blockquote>
					</div>
					<div class="col-md-6">
						<blockquote class="blockquote">
						  <p class="mb-0">"I wanted to say thank you for the amazing product and for the fast processing and delivery. It was impressive, you weren't kidding!".</p>
						  <footer class="blockquote-footer">Amick - <cite title="Source Title">Marketer</cite></footer>
						</blockquote>
					</div>
				</div>
			</div>
		</div> <!-- end of testimoni -->
		<div id="box-image">
			<div class="w-box">
				<div class="w-imgl">
					<img src="assets/post-6.png">
				</div>
				<div class="w-imgr">
					<img src="assets/post-5.png">
				</div>
				<div class="w-imgl">
					<img src="assets/post-4.png">
				</div>
				<div class="w-imgr">
					<img src="assets/post-3.png">
				</div>
				<div class="w-imgl">
					<img src="assets/post-2.png">
				</div>
				<div class="w-imgr">
					<img src="assets/post-1.png">
				</div>
			</div>
		</div>
		<div id="contex-two">
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