<?php
	session_start();

	$_SESSION["tiket_admin"] = "";

	session_start();
	session_destroy();

	header("location: index.php");

?>