<div class="panelContainer">
	<h1 class="title">Panel de cotizaciones</h1>

	<h2 class="title">Servicios</h2>
	
	<div class="containerTable">
		<table width="100%" border="0">
			<thead>
				<tr>
					<td>Cod</td>
					<td>Nombre</td>
					<td>price</td>
					<td>Add</td>
				
					
				</tr>
			</thead>
			<tbody>
				<?php 
					include 'CLASS/connect.php';
					$query_hotel = mysql_query("SELECT * FROM services_events") or die(mysql_error());
					while($elemento= mysql_fetch_array($query_hotel)){
			 	?>
				<tr>
					<th><?= $elemento['cod'];?></th>
					<th><?= $elemento['name'];?></th>
					<th><?= $elemento['price'];?></th>
					<th><a href="CLASS/cotizar.php?id=<?=$elemento['id'];?>" class="add">Añadir</a></th>
					
				
				</tr>
				<?php } ?>
			</tbody>
			<!--<tfoot>
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th>Total</th>
					<th>$1500</th>
				</tr>
			</tfoot>-->
		</table>
	</div>
	<button class="view">ver</button>
	<div class="response"></div>


</div>