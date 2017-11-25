<?php include 'CLASS/connect.php';
	
	//CONSULTA DATOS DE EMPRESAS
	$sql = "SELECT * FROM employes";
		$result = mysqli_query($con, $sql);

	//CONSULTA DE CLIENTES
	$sql_costumers = "SELECT * FROM costumers";
	$result_costumers = mysqli_query($con, $sql_costumers); 
?>
<div class="panelContainer">
	<div class="clear"></div>
	<div class="clear"></div>
	

	<div class="tab">
		<div class="row noMargin">
		<div class="col-lg-2	 ">
			<div class="block">
				<label for="consolid" class="mr5 cBlack s16	">Flete consolidado: </label>
				<input type="checkbox" name="consolid" id="consolid" value="1">
			</div>
		</div>
		<div class="col-lg-4 ">
			<div class="selectEmb hidden">
				<label for="num_emb" class="cBlack">Numero de embarques</label><br>
				<select name="num_emb" id="num_emb" class="cBlack">
					<option value="">-- SELECCIONA --</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
			</div>
		</div>
	</div>
		<!-- / TABS DINAMICOS DE ACUERDO CON EL VALOR DEL SELECT -->
		<ul class="tabs" id="tabs"></ul> 
		
		<!-- / FORMULARIOS DINAMICOS DE ACUERDO CON EL VALOR DEL SELECT-->
		<div class="tab_content" id="tab_content"></div> 

	</div> <!-- / tab -->

</div> 
