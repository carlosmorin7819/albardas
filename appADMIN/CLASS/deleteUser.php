<?php 
	// Actualizamos en funcion del id que recibimos 
	include 'connect.php';
	$id = $_GET['id'];  

	//$query = "delete from users where id = '$id'";  
	//mysql_query("DELETE FROM users WHERE id = '$id'");

	$sql = "DELETE FROM users WHERE id = '$id'";

	if(mysqli_query($con, $sql)){
	   	
	} else{
	    echo "ERROR: Could not able to execute $sql." . mysqli_error($con);
	}
 	$sql = "SELECT * FROM users";
   	$query_users = mysqli_query($con, $sql);



	//$query_users = mysql_query("SELECT * FROM users");

	$table = '<table width="100%" border="0" id="tableUsers">';
	$table .= '<thead>	
					<tr>
						<td>ID</td>
						<td>Nombre</td>
						<td>Mail</td>
						<td>Tipo Usario</td>
						<td>Genero</td>
						<td>Telefono</td>
						<td>Editar</td>
						<td>Eliminar</td>
					</tr>
				</thead>';
	$table .= '<tbody>';
	while($elemento = mysqli_fetch_array($query_users)){ 
	$table .= '<tr>
				<th>'.$elemento['id'].'</th>
				<th>'.$elemento['name'].'</th>
				<th>'.$elemento['email'].'</th>
				<th>'.$elemento['type_user'].'</th>
				<th>'.$elemento['gender'].'</th>
				<th>'.$elemento['phone'].'</th>
			
				<th>
					<a href="" class="buttonAdd">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</a>
				</th>
				
					<th>
						<a href="CLASS/deleteUser.php?id='.$elemento['id'].'" class="buttonDelete delete" onclick="deleteUser(this);">
							<i class="fa fa-trash-o" aria-hidden="true"></i>
						</a>
						
					</th>
			

			</tr>';
		}
	$table .= '</tbody>
		</table>';




	echo $table;



?> 


