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
          Produk
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="kategori.php?id=1"><i class="fa fa-angle-right"></i> AWP</a>
          <a class="dropdown-item" href="kategori.php?id=2"><i class="fa fa-angle-right"></i> RIFLE</a>
          <a class="dropdown-item" href="kategori.php?id=3"><i class="fa fa-angle-right"></i> PISTOL</a>
          <a class="dropdown-item" href="kategori.php?id=4"><i class="fa fa-angle-right"></i> SMG</a>
          <a class="dropdown-item" href="kategori.php?id=5"><i class="fa fa-angle-right"></i> HEAVY</a>
         
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-right">

    	<?php if(isset($_SESSION["pelanggan"])) : ?>
    		<?php //print_r($_SESSION)["pelanggan"]);?>
    		<?php $idp = ($_SESSION["pelanggan"]["id_pelanggan"]);?>

		      <li class="nav-item">
		        <a class="nav-link" href="order.php?id_order=<?php echo $idp; ?>"><i class="fa fa-truck"></i> Status Order </a>
		      </li>
     	<?php endif; ?>
      <li class="nav-item">
        <a class="nav-link" href="keranjang.php">
        	<?php if(isset($_SESSION["keranjang"])) : ?>
        		<?php $count = count($_SESSION["keranjang"]); ?>
        		<span class="badge badge-warning"><?php echo $count; ?></span>
        	<?php endif; ?>
        	<i class="fa fa-shopping-basket "></i> Keranjang <span class="sr-only">(current)</span></a>
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