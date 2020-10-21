<?php 
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "toko_csgo";

	$konek = mysqli_connect($server,$user,$pass,$database) or die (mysql_error($konek));
?>