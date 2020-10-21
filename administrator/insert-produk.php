<?php

	include "koneksi.php";

	$nama = $_POST["nm"];
	$harga = $_POST["hg"];
	$desk= $_POST["dk"];
	$kt = $_POST["kat"];

	//proses upload

	$nm_file = $_FILES["fileku"]["name"];
	$tp_file = $_FILES["fileku"]["tmp_name"];
	$jn_file = $_FILES["fileku"]["type"];
	$uk_file = $_FILES["fileku"]["size"];

	$dir = "hasil-upload/$nm_file";
	move_uploaded_file($tp_file, $dir);

	$sql = "INSERT INTO tbl_produk(nama_produk,harga_produk,deskripsi_produk,kategori_produk,foto) 
		VALUES ('$nama','$harga','$desk','$kt','$nm_file')";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	if($query){
		echo "<script type='text/javascript'>alert('Sukses tambah produk!')</script>
			<meta http-equiv='refresh' content='1; url=index.php?lproduk'>";
	} else {
		die (mysqli_error($konek));
	}

?>