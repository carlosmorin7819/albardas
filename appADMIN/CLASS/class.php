<?php 
	include 'users.php';
	if ($_POST) {
		$index = $_POST['type_form'];
		//echo $index;
		switch ($index) {
			case 'validate_user':
					$email = $_POST['email'];
					$pass = $_POST['pass'];
					users_class::validate_user($email, $pass);
				break;

			case 'save_user':
					$name = $_POST['name'];
					$last_name = $_POST['last_name'];
					$mail = $_POST['mail'];
					$phone = $_POST['phone'];
					$nombre = $_FILES['imagen']['name'];
					$pass = $_POST['pass'];
					$gender = $_POST['gender'];
					$type_user = $_POST['type_user'];
					users_class::save_user($name, $last_name, $mail, $phone, $nombre, $pass, $gender, $type_user);				
				break;


	
		}
	}
	
 ?>	