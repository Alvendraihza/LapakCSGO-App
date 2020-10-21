<?php
	session_start();

	//mendapatkan id dari URL
	$id_produk = $_GET["id"];

	//jika sudah ada produk di keranjang, maka produk tambahkan +1
	if (isset($_SESSION["keranjang"][$id_produk])) {
		$_SESSION["keranjang"][$id_produk]+=1;
	} else {
		//jika belum ada isi dikeranjang
		$_SESSION["keranjang"][$id_produk]=1;
	}

	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";

	echo "<script>alert('Produk telah masuk ke keranjang belanja!')</script>";
	echo "<script>location='index.php'</script>";
?>