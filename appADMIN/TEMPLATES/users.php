<?php 	
	include 'CLASS/connect.php';

		$sql = "SELECT * FROM users";
   		$result = mysqli_query($con, $sql);


	$user_master = $_SESSION['user']['type_user'] == 1;

	switch ($user_master) {
		case '1':
			$user_master = "MAESTRO";
			break;
		case '2':
			$user_master = "ADMIN";
			break;
		case '3':
			$user_master = "OPERADOR";
			break;
		default:
	
			
	}
	
?>
<div class="panelContainer">
	<h1 class="title">Administracion de usuarios</h1>
	
	<br>
		<?php 
		//var_dump($_SESSION['user']);
		if ($user_master): ?>
			<span class="buttonAdd"  onclick="modalUser();">
				<i class="fa fa-user-plus" aria-hidden="true"></i>
				Nuevo usuario
			</span>
			
		<?php endif ?>
	<br><br>
	<div class="containerTable">
		<table width="100%" border="0" id="tableUsers">
			<thead>	
				<tr>
					<td>ID</td>
					<td>Imagen</td>
					<td>Nombre</td>
					<td>Apellidos</td>
					<td>Correo</td>
					<td>Telefono</td>
					<td>Genero</td>
					<td>Usuario</td>
					<td>Editar</td>
					<?php if ($user_master): ?>
						<td>Eliminar</td>
					<?php endif ?>
				</tr>
			</thead>
			<tbody>	
			<?php 	
							    
				while($elemento = mysqli_fetch_array($result)){ ?>
				<tr>
					<th><?= $elemento['id']; ?></th>
					<th><img src="IMG/<?= $elemento['img_profile']; ?>" alt="" height="40"></th>
					<th><?= $elemento['name']; ?></th>
					<th><?= $elemento['last_name']; ?></th>
					<th><?= $elemento['email']; ?></th>
					<th><?= $elemento['phone']; ?></th>
					<th><?= $elemento['gender']; ?></th>
					<th><?= $elemento['type_user']; ?></th>
					<th>
						<a href="CLASS/editUser.php?id=<?= $elemento['id']; ?>" onclick="editUser(this);" class="buttonAdd" >
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</a>
					</th>
					<?php if ($user_master): ?>
						<th>
							<a href="CLASS/deleteUser.php?id=<?= $elemento['id']; ?>"  onclick="deleteUser(this);" class="buttonDelete delete">
								<i class="fa fa-trash-o" aria-hidden="true"></i>
							</a>

						</th>
					<?php endif ?>

				</tr>
			<?php } ?>
			</tbody>
		</table>	
	</div>
</div>
<div class="containerForm hidden">
	<h2 class="titileModal">Nuevo Usuario</h2>
	<form action="" method="post" id="formUser" onsubmit="save_user();">

		<div class="row"><!--Nombre-->
			<div class="col-lg-12">	
				<label for="name" class="s12">Nombres:</label>
				<input type="text" name="name" id="name" placeholder="Nombre (s)" class="inputStyle" required="">		
			</div>
		</div>

		<div class="clear"></div>
		<div class="row"><!--Apellidos-->
			<div class="col-lg-12">	
				<label for="last_name" class="s12">Apellidos:</label>
				<input type="text" name="last_name" id="last_name" placeholder="Apellidos" class="inputStyle"  required="">		
			</div>
		</div>
		<div class="clear"></div>
		<div class="row"><!--Email-->
			<div class="col-lg-12">	
				<label for="mail" class="s12">Correo electronico:</label>
				<input type="email" name="mail" id="mail" placeholder="Correo electronico" class="inputStyle"  required="">
			</div>
		</div>
		
		<div class="clear"></div>
		<div class="row"><!--Phone-->
			<div class="col-lg-12 col-md-12">	
				<label for="phone" class="s12">Telefono:</label>
				<input type="number" name="phone" id="phone" placeholder="555-555-55-55" class="inputStyle" maxlength="12"  required="Telefono" minlength="10" >		
			</div>
		</div>
		<div class="clear"></div>
		<div class="row"><!--Img perfil-->
			<div class="col-lg-12">	
				<label for="imagen" class="s12">Selecciona imagen de perfil:</label>
				<input type="file" name="imagen" id="imagen"  required="">
			</div>
		</div>
		<div class="clear"></div>
		<div class="row"><!--Contraseña-->
			<div class="col-lg-6">	
				<label for="pass" class="s12">Contraseña:</label>
				<input type="password" name="pass" id="pass" placeholder="Contraseña" class="inputStyle"  required=""> 		
			</div>
			<div class="col-lg-6">	
				<label for="r_pass" class="s12">Confirma contraseña:</label>
				<input type="password" name="r_pass" id="r_pass" placeholder="Contraseña" class="inputStyle"  required="">		
			</div>
		</div>
		<div class="clear"></div>
		<div class="row">
			<div class="col-lg-6 col-md-6">	
				<label for="gender" class="s12">Genero:</label>
				<select name="gender" id="gender" class="inputStyle">
					<option value="0">--SELECCIONA--</option>
					<option value="3">Hombre</option>
					<option value="2">Mujer</option>
				</select>
			</div>
			<div class="col-lg-6 col-md-6">	
				<label for="type_user" class="s12">Tipo de usuario:</label>
				<select name="type_user" id="type_user" class="inputStyle">
					<option value="0">--SELECCIONA--</option>
					<option value="3">OPERADOR</option>
					<option value="2">ADMIN</option>
					<option value="1">MASTER</option>
				</select>	
			</div>
		</div>
		<div class="clear"></div>
		
		<div class="row">	
			<div class="col-lg-3 col-md-6 col-lg-offset-9 " >
			<input type="hidden" name="type_form" value="save_user">
			<input type="submit" value="Guardar" class="buttonStyle bg-primary">
			
			</div>
		</div>
	</form>
</div>

<div id="bgBlack"  onclick="closeModal();"	>
	<div class="closeModal">
		<i class="fa fa-times" aria-hidden="true"></i>
	</div>
</div>
<div class="formEdit"></div>