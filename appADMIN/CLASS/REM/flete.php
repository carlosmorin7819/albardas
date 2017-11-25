<?php 
	include '../connect.php';
	//CONSULTA DATOS DE EMPRESAS
	$sql = "SELECT * FROM employes";
	$result = mysqli_query($con, $sql);

	//CONSULTA DE CLIENTES
	$sql_costumers = "SELECT * FROM costumers";
	$result_costumers = mysqli_query($con, $sql_costumers); 

	$form = '<div class="tabs_item">
				<h5 class="text-600 cBlack">Paso 1: Empresas</h5>
				<div class="lineBlock"></div>
				<form action="gasoline.php" method="post" id="formRemision" class="formRemision" onsubmit="infoEmploye(this);">
					<input type="hidden" name="type_form" value="registro">
					<div class="clear">	</div>
					<div class="row">
						<div class="col-lg-2 ">
							<label for="">
								EMPRESA:
							</label>
							<br>	<br>	
							<label for="">
								RFC:
							</label>
							<br>	<br>	
							<label for="">
								DOMICILIO:
							</label>	
							<br>	<br>	
							<label for="">
								CIUDAD:
							</label>		
						</div>
						
						<div class="col-lg-5 text-left">
							<select name="name" id="name" class="inputStyle" onchange="search_employe(this);">
								<option value="">SELECCIONA</option>';
					while($elemento = mysqli_fetch_array($result)){ 
					$form .= '<option value='.$elemento['id_employe'].'>'.$elemento['name'].'</option>';
						}
								
					$form .= '</select>
							<div id="dataEmploye">
								<input type="hidden" name="name_employe" value="">
								<input type="text" name="rfc" id="rfc" value="--" class="inputStyle mTop5"><br>
								<input type="text" name="adress" id="adress" value="--" class="inputStyle mTop5"><br>
								<input type="text" name="city" id="city" value="--" class="inputStyle mTop5"><br>
								<input type="hidden" name="tel" id="tel" value="--" class="inputStyle mTop5"><br>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">	
						<div class="col-lg-2 ">
							<label for="">
								CLIENTE:
							</label>
							<br>	<br>	
							<label for="">
								RFC:
							</label>
							<br>	<br>	
							<label for="">
								TELEFONO:
							</label>	
						</div>
						<div class="col-lg-5 ">
							<select name="name_costumer" id="name_costumer" class="inputStyle" onchange="search_costumer(this);">
								<option value="">SELECCIONA</option>';
								while($elemento = mysqli_fetch_array($result_costumers)){
						$form .= '<option value='.$elemento['id_costumer'].'>'.$elemento['name'].'</option>';
								}
						$form .= '</select>

							<div id="dataCostumer">
								<input type="text" name="" id="rfc_costumer" value="--" class="inputStyle mTop5"><br>
								<input type="text" name="" id="adress_costumer" value="--" class="inputStyle mTop5"><br>
							</div>
						</div>
					</div>
					<input type="submit" value="ENVIAR" class="hidden">
					<hr>
				</form>

				<h5 class="text-600 cBlack">Paso 2: Productos</h5>
				<div class="lineBlock"></div>
				<div class="clear"></div>
				<form action="" id="formProductos" class="formProductos" method="post" onsubmit="infoProductos(this);">
				
					<div class="container noMargin" id="contentProd">
					
						<div id="rowP" class="row">
							<input type="hidden" name="type_form" value="productos">
							<div class="col-lg-1">
								<div class="block">
									<label for="">Cantidad</label>
									<input type="text" class="inputStyle" name="caant0" value="0">
								</div>
							</div>
							<div class="col-lg-5">
								<div class="block">
									<label for="">Producto</label>
									<input type="text" class="inputStyle search_product" name="prod0" autocomplete="off">
									<ul id="suggesstion-box" class="suggesstion-box">
										
									</ul>
								</div>
							</div>

							<div class="col-lg-1 hidden">
								<div class="block">
									<label for="">KG</label>
									<input type="text" class="inputStyle" name="kg0" value="0">
								</div>
							</div>
							<div class="col-lg-2">
								<div class="block">
									<label for="">Precio</label>
									<input type="text" class="inputStyle" name="price0" value="0">
								</div>
							</div>
							<div class="col-lg-2 hidden">
								<div class="block">
									<label for="">Importe</label>
									<input type="hidden" class="inputStyle" name="import0" value="0">
								</div>
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-lg-4 col-lg-offset-4 ">
							<br>		
							<button class="buttonStyle bg-primary pull-right w100 text-600 addProducto" type="button" id="addProducto">
								Añadir producto <i class="fa fa-plus" aria-hidden="true"></i>
							</button>
						</div>
					</div>
					<input type="submit" value="enviar">
				</form>
				
				<h5 class="text-600 cBlack">Paso 3: Trasporte</h5>
				<div class="lineBlock"></div>
				<div class="clear"></div>
				<form action="" method="post" id="searchDriver" onsubmit="infoMore();">
					<div class="row">
						<div class="col-lg-2">
							<label for="">CHOFER</label><br><br>
							<label for="">TELEFONO</label>
						</div>
						<div class="col-lg-4">
							<input type="text" name="name_driver" id="name_driver" autocomplete="off" class="inputStyle">
							<ul class="drivers-box">
								
							</ul>
						
							<div class="input">	
								<input type="text" name="phone_driver" id="phone_driver" class="inputStyle mTop5">
							</div>

						</div>
					</div>
					<div>
						<div class="clear"></div>	
						<div class="lineBlock"></div>
						<div class="clear"></div>	
					
					<div class="row">
						<div class="col-lg-2">

							<label for="">TRACTOR</label><br><br>
							<label for="">N ECON</label><br><br>
							<label for="">MODELO</label><br><br>
							<label for="">PLACAS</label>
						</div>
						<div class="col-lg-4 ">
							<input type="text" name="tractor" id="tractor" autocomplete="off" placeholder="Marca de tractor" class="inputStyle mTop5">
							<ul class="tractor-box">
								
							</ul>
							<div class="inputTractor">
								<input type="text" name="n_econ" id="n_econ" class="inputStyle mTop5"><br>
								<input type="text" name="model" id="model" class="inputStyle mTop5"><br>
								<input type="text" name="placas_tractor" id="placas_tractor" class="inputStyle mTop5"><br>
							</div>
						</div>
					</div>
					<div class="clear"></div>		
					<div class="lineBlock"></div>
					<div class="clear"></div>	
					<div class="row">
						<div class="col-lg-2">
							<label for="">MARCA CAJA</label><br><br>
							<label for="">TIPO CAJA</label><br><br>
							<label for="">MODELO</label><br><br>
							<label for="">PLACAS</label><br><br>
							<label for="">TEMPERATURA</label>
						</div>
						<div class="col-lg-4 ">
							<input type="text" name="caja" id="caja" autocomplete="off" placeholder="Marca de caja" class="inputStyle mTop5">
							<ul class="caja-box"></ul>
							<div class="inputCaja">
								<input type="text" name="n_econ" id="n_econ" class="inputStyle mTop5"><br>
								<input type="text" name="model" id="model" class="inputStyle mTop5"><br>
								<input type="text" name="placas_tractor" id="placas_tractor" class="inputStyle mTop5"><br>
							</div>
						</div>
					</div>		
					<input type="submit" value="Enviar">
				</form>
				<input type="submit" value="Generar vista" class="buttonStyle bgBlue buttonSent" id="buttonSent">
			</div> ';

	echo $form;

 ?>