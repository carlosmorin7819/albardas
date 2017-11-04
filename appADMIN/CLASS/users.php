<?php 
	session_start();
	//require 'connect.php';

	include("connect.php");
	class users_class
	{
		
		public static function validate_user($email, $pass)
		{
			$con = mysqli_connect("localhost","root","","albardas_bd");
			$sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
   			$result = mysqli_query($con, $sql);

   			if (mysqli_num_rows($result) > 0) {

   				$row = mysqli_fetch_array($result);

				$_SESSION['user'] = $session = array(
													'name' => $row['name'],
													'user' => $row['email'], 
													'type_user' => $row['type_user'],
													'IMG' => $row['img_profile']
													);
				echo TRUE . "\n";
		   	} else {
		     	echo FALSE . "\n";
		   	}
		   	mysqli_close($con);
		}


		public static function save_user($name, $last_name, $mail, $pass, $phone, $type_user, $gender, $nombre)
		{

			$con = mysqli_connect("localhost","root","","albardas_bd");

			$nombrer = strtolower($nombre);
			$cd=$_FILES['imagen']['tmp_name'];
			$ruta = "../IMG/" . $_FILES['imagen']['name'];
			$destino = "../IMG/".$nombrer;
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

			
		
			// Attempt insert query execution
			$sql = "INSERT INTO users  VALUES ('','$name','$last_name','$mail','$phone','$pass','$gender','$type_user', '$nombre')";
			//$sql = "INSERT INTO users  VALUES ('','$name','$last_name','$mail','$nombre','$phone','$type_user','$pass', '$gender')";

			if(mysqli_query($con, $sql)){
			   	
			} else{
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}

		

			if (!empty($resultado)){

               	//mysql_query($conexion,"INSERT INTO users VALUES ('". $nombre."','" . $destino . "')"); 
                //echo "el archivo ha sido movido exitosamente";
	
				
                /**ARMAR TABLA PARA MOSTRAR POR AJAX**/
                $con = mysqli_connect("localhost","root","","albardas_bd");
			$sql = "SELECT * FROM users";
   			$query_users = mysqli_query($con, $sql);


	$table = '<table width="100%" border="0" id="tableUsers">';
	$table .= '<thead>	
					<tr>
						<td>ID</td>
						<td>Imagen</td>
						<td>Nombre</td>
						<td>Apellidos</td>
						<td>Correo</td>
						<td>Telefono</td>
						<td>Genero</td>
						<td>Usuario</td>
						<td>Edit</td>
						<td>Eliminar</td>
					</tr>
				</thead>';
	$table .= '<tbody>';
			while($elemento = mysqli_fetch_array($query_users)){ 
				$table .= '<tr>
				<th>'.$elemento['id'].'</th>
				<th><img src="IMG/'.$elemento['img_profile'].'" alt="" height="40"></th>
				<th>'.$elemento['name'].'</th>
				<th>'.$elemento['last_name'].'</th>
				<th>'.$elemento['email'].'</th>
				<th>'.$elemento['phone'].'</th>
				<th>'.$elemento['gender'].'</th>
				<th>'.$elemento['type_user'].'</th>
			
				<th>
					<a href="" class="buttonAdd" onclick="editUser">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</a>
				</th>
				
					<th>
						<a href="CLASS/deleteUser.php?id='.$elemento['id'].'" class="buttonDelete delete"  onclick="deleteUser(this);">
							<i class="fa fa-trash-o" aria-hidden="true"></i>
						</a>
						
					</th>
			

							</tr>';
				}
				$table .= '</tbody></table>';




				echo $table;

            }else{

                echo "Error al subir el archivo";

                }
                	mysqli_close($con);
			}

		public static function save_costumer($name, $last_name, $mail, $phone, $origin_place)
		{
			mysql_query("INSERT INTO costumers VALUES('','$name','$last_name','$phone','$mail','$origin_place','','')");
			//$resultUsers = mysql_query("SELECT * FROM users"); 
		}
		
	}
?>