<?php 
	include 'koneksi.php';

	$nm = $_POST["namaku"];
	$em = $_POST["mailku"];
	$tl = $_POST["telpku"];
	$ps = $_POST["passku"];
	$al = $_POST["almt"];

	$sql = "INSERT INTO tbl_pelanggan(
		email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan,alamat) VALUES ('$em','$ps','$nm','$tl','$al')";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	if($query){
		header("location: daftar.php?success");
	} else {
		die (mysqli_error($konek));
	}
?>