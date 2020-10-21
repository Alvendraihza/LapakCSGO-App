<?php
	session_start();

	session_unset();
	session_destroy();

	echo "<script type='text/javascript'>alert('Berhasil Logout')</script>
		  <meta http-equiv='refresh' content='0; url=index.php'>";
?>