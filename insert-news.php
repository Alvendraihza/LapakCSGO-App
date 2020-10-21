<?php
	include "koneksi.php";

	$sb = $_POST["subs"];

	$sql = "INSERT INTO tbl_news(langganan) VALUES('$sb')";
	$query = mysqli_query($konek, $sql) or die (mysqli_error($konek));

	// redirect

	if($query){
		echo "<script type='text/javascript'>alert('Thank you for subsribing!')</script>
			<meta http-equiv='refresh' content='0; url=index.php'>";
	} else {
		mysqli_query(error());
	}
?>