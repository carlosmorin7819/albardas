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
					include 'TEMPLATES/veiculos.php';
					break;
				case '3':
					include 'TEMPLATES/gasoline.php';
					break;
				case '7':
					include 'TEMPLATES/users.php';
					break;
				case '8':
					include 'TEMPLATES/quotation.php';
					break;
				
				default:
					include 'TEMPLATES/bodega.php';
					break;
			}
		}else{
			include 'posts.php';
		}
		
	
	include 'footer.php';
 ?>