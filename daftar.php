<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Daftar Anggota | LAPAK CSGO</title>

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
						<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
						  <a class="navbar-brand" href="index.php"><img class="mylogo" src="assets/logo.png"></a>
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
						          Produk
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="#"><i class="fa fa-angle-right"></i> AWP</a>
						          <a class="dropdown-item" href="#"><i class="fa fa-angle-right"></i> RIFLE</a>
						          <a class="dropdown-item" href="#"><i class="fa fa-angle-right"></i> PISTOL</a>
						          <a class="dropdown-item" href="#"><i class="fa fa-angle-right"></i> SMG</a>
						          <a class="dropdown-item" href="#"><i class="fa fa-angle-right"></i> HEAVY</a>
						         
						        </div>
						      </li>
						    </ul>
						    <ul class="navbar-nav navbar-right">
						      <li class="nav-item active">
						        <a class="nav-link" href="keranjang.php"><i class="fa fa-shopping-basket"></i> Keranjang <span class="sr-only">(current)</span></a>
						      </li>
						      <?php if(isset($_SESSION["pelanggan"])) : ?>
							      <li class="nav-item">
							        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
							      </li>
						      <?php else : ?>
							       <li class="nav-item">
							        <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i> Login</a>
							      </li>
							  <?php endif; ?>
							  <?php if(isset($_SESSION["pelanggan"])) : ?>
							       <li class="nav-item">
							        <a class="nav-link" href="#"><i class="fa fa-user"></i> <?php echo $_SESSION["pelanggan"]["nama_pelanggan"];?></a>
							      </li>
							  <?php else : ?>
							      <li class="nav-item">
							        <a class="nav-link" href="daftar.php"><i class="fa fa-pencil"></i> Daftar</a>
							      </li>
							  <?php endif; ?>
						    </ul>
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
						    <li class="breadcrumb-item active" aria-current="page">Login</li>
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
					<div class="col-md-5">
						<h4>Daftar Member</h4>

						<?php
							if(isset($_GET["success"])){?>
								<!-- Notif Error -->
								<div class="alert alert-success alert-dismissible fade show" role="alert">
								  <strong>Berhasil Daftar!</strong> Silahkan login dengan email dan password.
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>
							<?php }

						?>


						<form action="insert-daftar.php" method="post">
							<div class="form-group">
								<label>Nama lengkap</label>
								<input type="text" name="namaku" placeholder="Masukkan Nama" class="form-control" required="">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="mailku" placeholder="Masukkan Email" class="form-control" required="">
							</div>
							<div class="form-group">
								<label>No. Telepon</label>
								<input type="text" name="telpku" placeholder="Masukkan Nomor" class="form-control" required="">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="passku" placeholder="Buat Password" class="form-control" required="">
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<textarea name="almt" cols="30" rows="5" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-success" type="submit" name="daftar">Daftar</button>
								<button class="btn btn-danger" type="reset" name="reset">Cancel</button>
							</div>
						</form>
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