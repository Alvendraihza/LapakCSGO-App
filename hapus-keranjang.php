<?php
	session_start();

	$idproduk = $_GET["id"];

	//hilangkan barang dengan menghapus sesi dengan unset sesi php

	unset($_SESSION["keranjang"][$idproduk]);

	echo "<scipt>alert('Produk telah dihapus dari keranjang!')</script>";
	echo "<script>location='keranjang.php'</script>";
?>