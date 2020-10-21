<?php
	session_start();

	//print_r($_SESSION["pelanggan"]);

	include "koneksi.php";

	date_default_timezone_get("Asia/Jakarta");
	$time = time();
	$idp = $_SESSION["pelanggan"]["id_pelanggan"];
	$idk = $_POST["idk"];
	$rkd = $_POST["rkd"];
	$tl = $_POST["tlp"];
	$tglu = date("Y-m-d");
	$wktu = date("Y-m-d H:i:s", $time);

	$nm_file = $_FILES["fileku"]["name"];
	$tp_file = $_FILES["fileku"]["tmp_name"];
	$uk_file = $_FILES["fileku"]["size"];
	$jn_file = $_FILES["fileku"]["type"];

	$dir = "administrator/upload-bukti/$nm_file";
	move_uploaded_file($tp_file, $dir);

	$sql = "INSERT INTO tbl_bukti(rkode,tanggal_upload,waktu_upload,foto_bukti,notlp) VALUES ('$rkd','$tglu','$wktu','$nm_file','$tl')";

	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	echo "<script type='text/javascript'>alert('Berhasil upload bukti!')</script>";
	echo "<script type='text/javascript'>location='order.php?id_order=$idp'</script>";
?>