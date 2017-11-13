<?php
include 'CLASS/connect.php';

		$sql = "SELECT * FROM vehicles";
   		$result = mysqli_query($con, $sql);


	
	
?>
<div class="panelContainer">
	<h1 class="title">Administracion de vehiculos</h1>
	<br>
		<span class="buttonAdd " onclick="modalUser();">
			<i class="fa fa-plus" aria-hidden="true"></i>
			Nuevo vehiculo
		</span>
	<br><br>
	<div class="containerTable">
		<table width="100%" border="0" id="tableUsers">
			<thead>	
				<tr>
					<td>ID</td>
					<td>Imagen</td>
					<td>Nombre</td>
					<td>Placas</td>
					<td>Status</td>
					<td>km por litro</td>
					<td>Status</td>
					<td>Km</td>
			
					
						<td>Eliminar</td>
		
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
						<a href="CLASS/editUser.php?id=<?= $elemento['id']; ?>" onclick="editUser(this);"	 class="buttonAdd" >
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</a>
					</th>
				

				</tr>
			<?php } ?>
			</tbody>
		</table>	
	</div>
</div>

<div class="containerForm hidden">
	<h2 class="titileModal">Nuevo vehiculo</h2>
	<form action="" method="post" id="formUser" onsubmit="save_user();">

		<ul class="tabs">
			<li class="active" rel="tab1">Chofer</li>
			<li rel="tab2">Vehiculo</li>
			<li rel="tab3">Km</li>
			<li rel="tab4">Tab 4</li>
		</ul>
		<div class="tab_container">

			<!-- #tab1 informacion del chofer-->
		  	<h3 class="d_active tab_drawer_heading" rel="tab1">Informacion del chofer</h3>
		  	<div id="tab1" class="tab_content">
			  	<h2>Informacion del chofer</h2>
			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac metus augue.</p>
			</div>
		  	
		  	<!-- #tab2 informacion del vehiculo-->
		  	<h3 class="tab_drawer_heading" rel="tab2">Informacion del vehiculo</h3>
		  	<div id="tab2" class="tab_content">
		 	 	<h2>Tab 2 content</h2>
		    	<p>Nunc dui velit, scelerisque eu placerat volutpat, dapibus eu nisi. Vivamus eleifend vestibulum odio non vulputate.</p>
		  	</div>
		  
		  <h3 class="tab_drawer_heading" rel="tab3">Tab 3</h3>
		  <div id="tab3" class="tab_content">
		  <h2>Tab 3 content</h2>
		    <p>Nulla eleifend felis vitae velit tristique imperdiet. Etiam nec imperdiet elit. Pellentesque sem lorem, scelerisque sed facilisis sed, vestibulum sit amet eros.</p>
		  </div>
		  <!-- #tab3 -->
		  <h3 class="tab_drawer_heading" rel="tab4">Tab 4</h3>
		  <div id="tab4" class="tab_content">
		  <h2>Tab 4 content</h2>
		    <p>Integer ultrices lacus sit amet lorem viverra consequat. Vivamus lacinia interdum sapien non faucibus. Maecenas bibendum, lectus at ultrices viverra, elit magna egestas magna, a adipiscing mauris justo nec eros.</p>
		  </div>
		  <!-- #tab4 --> 
		</div>
	</form>
</div>

<div id="bgBlack"  onclick="closeModal();"	>
	<div class="closeModal">
		<i class="fa fa-times" aria-hidden="true"></i>
	</div>
</div>
<div class="formEdit"></div>