
<div class="panelContainer">
	<h1 class="title padd5">Administración de vehículos </h1>

		<?php 
		//var_dump($_SESSION['user']);
		if ($user_master): ?>
			<span class="buttonAdd" onclick="modalUser();">
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
				<td>Nombre</td>
				<td>Mail</td>
				<td>Tipo Usario</td>
				<td>Genero</td>
				<td>Telefono</td>
				<td>Editar</td>
				<?php if ($user_master): ?>
					<td>Eliminar</td>
				<?php endif ?>
			</tr>
		</thead>
		<tbody>	
		<?php 	
						    
			while($elemento = mysqli_fetch_array($query_users)){ ?>
			<tr>
				<th><?= $elemento['id']; ?></th>
				<th><?= $elemento['name']; ?></th>
				<th><?= $elemento['email']; ?></th>
				<th><?= $elemento['type_user']; ?></th>
				<th><?= $elemento['gender']; ?></th>
				<th><?= $elemento['phone']; ?></th>
				<th>
					<a href="" class="buttonAdd">
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
	<h2 class="titileModal">Nuevo Usario</h2>
	<form action="" method="post" id="formUser" onsubmit="save_user();">
		<div class="row">	
			<div class="col-lg-12">	
				<label for="name" class="s12">Nombre:</label>
				<input type="text" name="name" id="name" placeholder="Nombre" class="inputStyle">		
			</div>
		</div>
		<div class="clear"></div>
		<div class="row">	
			<div class="col-lg-12">	
				<label for="email" class="s12">Email:</label>
				<input type="text" name="email" id="email" placeholder="Mail" class="inputStyle">		
			</div>
		</div>
		<div class="clear"></div>
		<div class="row">	
			<div class="col-lg-12">	
				<label for="mail" class="s12">imagen:</label>
				<input type="file" name="imagen" id="imagen">
			</div>
		</div>
		<div class="clear"></div>
		<div class="row">	
			<div class="col-lg-12">	
				<label for="pass" class="s12">Contrseña:</label>
				<input type="password" name="pass" id="pass" placeholder="Contraseña" class="inputStyle">		
			</div>
		</div>
		<div class="clear"></div>
		<div class="row">	
			<div class="col-lg-12 col-md-12">	
				<label for="phone" class="s12">Telefono:</label>
				<input type="text" name="phone" id="phone" placeholder="555-555-55-55" class="inputStyle">		
			</div>
		</div>
		<div class="clear"></div>
		<div class="row">	
			<div class="col-lg-6 col-md-6">	
				<label for="type_user" class="s12">Tipo de usuario:</label>
				<select name="type_user" id="type_user" class="inputStyle">
					<option value="0">--SELECCIONA--</option>
					<option value="3">OPERADOR</option>
					<option value="2">ADMIN</option>
					<option value="1">MASTER</option>
				</select>	
			</div>
			<div class="col-lg-6">	
				<label for="gender" class="s12">Genero:</label>
				<select name="gender" id="gender" class="inputStyle">
					<option value="0">--SELECCIONA--</option>
					<option value="3">Hombre</option>
					<option value="2">Mujer</option>
				</select>
			</div>
		</div>
		<div class="row">	
			<div class="col-lg-6 col-md-6">
			<input type="hidden" name="type_form" value="save_user">
			<input type="submit" value="Enviar">
			
			</div>
		</div>
	</form>
</div>

<div id="bgBlack">
	<div class="closeModal" onclick="closeModal();">
		<i class="fa fa-times" aria-hidden="true"></i>
	</div>
</div>