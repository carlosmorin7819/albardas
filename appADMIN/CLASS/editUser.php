<?php 
	// Actualizamos en funcion del id que recibimos 
	include 'connect.php';
	$id = $_GET['id'];  

	//$query = "delete from users where id = '$id'";  
	//mysql_query("DELETE FROM users WHERE id = '$id'");

	$sql = "SELECT * FROM users where id = '".$id."'";

	if(mysqli_query($con, $sql)){
	   	
	} else{
	    echo "ERROR: Could not able to execute $sql." . mysqli_error($con);
	}

	$query_users = mysqli_query($con, $sql);
	$elemento = mysqli_fetch_array($query_users);
	
	//error_log(print_r($elemento, TRUE)); 
	
	
	
 	
	//$query_users = mysql_query("SELECT * FROM users");

	
	//FORMULARIO PARA EDITAR USUARIO
	$formEditUser = '
	<div class="modalUpdate ">
		<h2 class="titileModal">Modificar Usuario</h2>
		<form action="" method="post" id="formUpdateUser" onsubmit="updateUser();">
			<input type="hidden" name="idUser" id="idUser" value="'.$elemento['id'].'">	
			<div class="row"><!--Nombre-->
				<div class="col-lg-12">	
					<label for="name" class="s12">Nombres:</label>
					<input type="text" name="name" id="name" value="'.$elemento['name'].'" placeholder="Nombre (s)" class="inputStyle">		
				</div>
			</div>
			<div class="clear"></div>
			<div class="row"><!--Apellidos-->
				<div class="col-lg-12">	
					<label for="last_name" class="s12">Apellidos:</label>
					<input type="text" name="last_name" id="last_name" value="'.$elemento['last_name'].'" placeholder="Apellidos" class="inputStyle">		
				</div>
			</div>
			<div class="clear"></div>
			<div class="row"><!--Email-->
				<div class="col-lg-12">	
					<label for="mail" class="s12">Correo electronico:</label>
					<input type="text" name="mail" id="mail" value="'.$elemento['email'].'" placeholder="Correo electronico" class="inputStyle">
				</div>
			</div>
			
			<div class="clear"></div>
			<div class="row"><!--Phone-->
				<div class="col-lg-12 col-md-12">	
					<label for="phone" class="s12">Telefono:</label>
					<input type="number" name="phone" id="phone" value="'.$elemento['phone'].'" placeholder="555-555-55-55" class="inputStyle" maxlength="12">		
				</div>
			</div>
			
			<div class="clear"></div>
			<div class="row"><!--Contraseña-->
				<div class="col-lg-6">	
					<label for="pass" class="s12">Contraseña:</label>
					<input type="password" name="pass" id="pass" value="'.$elemento['pass'].'" placeholder="Contraseña" class="inputStyle">		
				</div>
				<div class="col-lg-6">	
					<label for="r_pass" class="s12">Confirma contraseña:</label>
					<input type="password" name="r_pass" id="r_pass" value="'.$elemento['pass'].'" placeholder="Contraseña" class="inputStyle">		
				</div>
			</div>
			<div class="clear"></div>
			<div class="row">
				<div class="col-lg-12">	
					<label for="gender" class="s12">Genero:</label>
					<select name="gender" id="gender" class="inputStyle">
						<option value="0">--SELECCIONA--</option>
						<option value="3">Hombre</option>
						<option value="2">Mujer</option>
					</select>
				</div>
			</div>
			<div class="clear"></div>
			<div class="row">	
				<div class="col-lg-12 col-md-12">	
					<label for="type_user" class="s12">Tipo de usuario:</label>
					<select name="type_user" id="type_user" class="inputStyle">
						<option value="0">--SELECCIONA--</option>
						<option value="3">OPERADOR</option>
						<option value="2">ADMIN</option>
						<option value="1">MASTER</option>
					</select>	
				</div>
			</div>

			<div class="row">	
				<div class="col-lg-3 col-md-6 col-lg-offset-9 " >
				<input type="hidden" name="type_form" value="save_user">
				<input type="submit" value="Actualizar" class="buttonStyle bg-primary">
				
				</div>
			</div>
		</form>
	</div>
	<div id="bgBlack2"  onclick="closeModal2();"	>
		<div class="closeModal">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
	</div>';

echo $formEditUser;



?> 


