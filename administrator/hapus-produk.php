<?php

	include "koneksi.php";

	$idh = $_GET["hapus_id"];

	$sql = "DELETE FROM tbl_produk WHERE id_produk='$idh'";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	if($query){
		echo "<script type='text/javascript'>alert('Sukses Hapus Produk!')</script>
			<meta http-equiv='refresh' content='0; url=index.php?lproduk'>";
	} else {
		mysqli_query(error());
	}

?>