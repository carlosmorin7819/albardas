<?php 	
	include 'CLASS/connect.php';
	$query_users = mysql_query("SELECT * FROM costumers") or die(mysql_error());

	$user_master = $_SESSION['user']['type_user'] == 1;
	
?>
<div class="panelContainer">
	<h1 class="title">Clientes</h1>

		<?php 
		//var_dump($_SESSION['user']);
		if ($user_master): ?>
			<span class="buttonAdd" onclick="modalUser();">
				<i class="fa fa-user-plus" aria-hidden="true"></i>
				Nuevo cliente
			</span>
		<?php endif ?>
	

	<br><br>	
	<div class="containerTable">
	<table width="100%" border="0">
		<thead>	
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Apellidos</td>
				<td>Telefono</td>
				<td>Mail</td>
				<td>Lugar de origen</td>
				<td>Editar</td>
				<?php if ($user_master): ?>
					<td>Eliminar</td>
				<?php endif ?>
			</tr>
		</thead>
		<tbody>	
		<?php 	
						    
			while($elemento = mysql_fetch_array($query_users)){ ?>
			<tr>
				<th><?= $elemento['id']; ?></th>
				<th><?= $elemento['name']; ?></th>
				<th><?= $elemento['last_name']; ?></th>
				<th><?= $elemento['phone']; ?></th>
				<th><?= $elemento['mail']; ?></th>
				<th><?= $elemento['origin_place']; ?></th>
				
				<th>
					<a href="" class="buttonAdd">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</a>
				</th>
				<?php if ($user_master): ?>
					<th>
						<a href="CLASS/cotizar.php?id=<?= $elemento['id']; ?>" class="buttonDelete delete">
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
	<h2 class="titileModal">Nuevo Cliente</h2>
	<form action="" method="post" id="formCostumer" onsubmit="save_costumer();">
		<div class="row">	
			<div class="col-lg-12">	
				<label for="name" class="s12">Nombre(s):</label>
				<input type="text" name="name" id="name" placeholder="Nombre" class="inputStyle">		
			</div>
		</div>
		<div class="clear"></div>
		<div class="row">	
			<div class="col-lg-12">	
				<label for="last_name" class="s12">Apellidos:</label>
				<input type="text" name="last_name" id="last_name" placeholder="Apellidos" class="inputStyle">		
			</div>
		</div>
		<div class="clear"></div>
		<div class="row">	
			<div class="col-lg-12">	
				<label for="mail" class="s12">Email:</label>
				<input type="text" name="mail" id="mail" placeholder="Email" class="inputStyle">		
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
			<div class="col-lg-12 col-md-12">	
				<label for="origin_place" class="s12">Lugar de origen:</label>
				<input type="text" name="origin_place" id="origin_place" placeholder="Lugar origen" class="inputStyle">		
			</div>
		</div>
		<div class="clear"></div>
		
		<div class="row">	
			<div class="col-lg-6 col-md-6">
			<input type="hidden" name="type_form" value="save_costumer">
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