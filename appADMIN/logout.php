<?php 
	session_start();
	session_destroy();
	echo "cerrando session";
	header("location: index.php");

 ?>