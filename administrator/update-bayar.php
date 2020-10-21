<?php

	include "koneksi.php";

	$idu = $_POST["idb"];
	$by = $_POST["byr"];

	$sql = "UPDATE tbl_pembelian SET status_pembayaran='$by' WHERE id_pembelian='$idu'";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	if ($query) {
		echo "<script type='text/javascript'>alert('Sukses melakukan konfirmasi!')</script>
			 <meta http-equiv='refresh' content='1; url=index.php?lpembeli'>";
	} else {
		die (mysqli_error($konek));
	}

?>