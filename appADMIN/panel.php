<?php 
	session_start();
	$session_user = isset($_SESSION['user']);

		//echo "session setada";
		include 'header.php';
		
		if ($_GET) {
			$typeTemplate = $_GET['template'];
			switch ($typeTemplate) {
				case '1':
					include 'TEMPLATES/users.php';
					break;
				case '2':
					include 'TEMPLATES/packing.php';
					break;
				
			}
		}else{
			include 'posts.php';
		}
		
	
	include 'footer.php';
 ?>