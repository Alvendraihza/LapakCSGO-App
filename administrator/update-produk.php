<?php

	include "koneksi.php";

	$nama = $_POST["nm"];
	$harga = $_POST["hg"];
	$desk= $_POST["dk"];
	$kt = $_POST["kat"];
	$id = $_POST["idp"];

	//proses upload

	$nm_file = $_FILES["fileku"]["name"];
	$tp_file = $_FILES["fileku"]["tmp_name"];
	$jn_file = $_FILES["fileku"]["type"];
	$uk_file = $_FILES["fileku"]["size"];

	$sql = "UPDATE tbl_produk
			SET nama_produk='$nama',
				harga_produk='$harga',
				deskripsi_produk='$desk',
				kategori_produk='$kt',
				foto='$nm_file'
			WHERE id_produk='$id'";
	$query = mysqli_query($konek, $sql) or die (mysqli_error($konek));
	$dir = "hasil-upload/$nm_file";


	move_uploaded_file($tp_file, $dir);

	if($query){
		echo "<script type='text/javascript'>alert('Sukses tambah produk!')</script>
			<meta http-equiv='refresh' content='1; url=index.php?lproduk'>";
	} else {
		die (mysqli_error($konek));
	}

?>