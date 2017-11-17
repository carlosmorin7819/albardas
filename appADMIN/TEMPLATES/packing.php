<?php 	

	include 'CLASS/connect.php';
	if ($_POST) {
		require 'saveDriver.php';		
	}
		//CONSULTA DATOS DE EMPRESAS
		$sql = "SELECT * FROM employes";
   		$result = mysqli_query($con, $sql);


   		//CONSULTA DE CLIENTES
   		$sql_costumers = "SELECT * FROM costumers";
   		$result_costumers = mysqli_query($con, $sql_costumers);


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
	<h1 class="title">Empaque</h1>
	
	<br>
		<?php 
			date_default_timezone_set("America/Mexico_City");

		
				$hora = date ("h:i");
				$fecha = date ("j/n/Y");


		
	
		
		//var_dump($_SESSION['user']);
		if ($user_master): ?>
			<button class="buttonAdd" onclick="modalUser(this);">
				<i class="fa fa-user-plus" aria-hidden="true"></i>
				Nuevo registro
			</button>
			
		<?php endif ?>
	<br><br>
	<div class="containerTable">
		
		
		<!--FORMULARIO DE INFORMACION DE LAS EMPRESAS-->
		<form action="gasoline.php" method="post" id="formRemision" class="" onsubmit="infoEmploye();">
			<input type="hidden" name="type_form" value="registro">
			<div class="row">
				<div class="col-lg-12 text-left">
					<h3>Remision de salida</h3>
					<hr>	
				</div>
			</div>
			<div class="row">
				<div class="col-lg-1 ">
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
				
				<div class="col-lg-4 text-left">
					<select name="name" id="name" class="inputStyle" onchange="search_employe(this);">
						<option value="">SELECCIONA</option>
						<?php  while($elemento = mysqli_fetch_array($result)){ ?>
						<option value="<?= $elemento['id_employe']; ?>"><?= $elemento['name']; ?></option>
						<?php } ?>
					</select>
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
				<div class="col-lg-1 ">
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
				<div class="col-lg-4 ">
					<select name="name_costumer" id="name_costumer" class="inputStyle" onchange="search_costumer(this);">
						<option value="">SELECCIONA</option>
						<?php  while($elemento = mysqli_fetch_array($result_costumers)){ ?>
						<option value="<?= $elemento['id_costumer']; ?>"><?= $elemento['name']; ?></option>
						<?php } ?>
					</select>

					<div id="dataCostumer">
						<input type="text" name="" id="rfc_costumer" value="--" class="inputStyle mTop5"><br>
						<input type="text" name="" id="adress_costumer" value="--" class="inputStyle mTop5"><br>
					</div>
				</div>
			</div>
			<input type="submit" value="ENVIAR">
			<hr>
		</form>
		
		<!--FORMULARIO DE CAMPOS DINAMICOS-->
		<form action="" id="formProductos" method="post" onsubmit="infoProductos();">
			
			<div class="container noMargin" id="contentProd">
				<div class="col-lg-12">	
					<h4>Registro de productos</h4>
				</div>

				<div id="rowP" class="row">
					<input type="hidden" name="type_form" value="productos">
					<div class="col-lg-1 ">
						<div class="block">
							<label for="">Cantidad</label>
							<input type="text" class="inputStyle" name="caant0">
						</div>
					</div>
					<div class="col-lg-5 ">
						<div class="block">
							<label for="">Producto</label>
							<input type="text" class="inputStyle" name="prod0">
						</div>
					</div>

					<div class="col-lg-1 ">
						<div class="block">
							<label for="">KG</label>
							<input type="text" class="inputStyle" name="kg0">
						</div>
					</div>
					<div class="col-lg-2 ">
						<div class="block">
							<label for="">Precio</label>
							<input type="text" class="inputStyle" name="price0">
						</div>
					</div>
					<div class="col-lg-2 ">
						<div class="block">
							<label for="">Importe</label>
							<input type="text" class="inputStyle" name="import0">
						</div>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 ">
					<br>		
					<button class="buttonStyle bg-primary pull-right w100 text-600" type="button" id="addProducto">
						Añadir producto <i class="fa fa-plus" aria-hidden="true"></i>
					</button>
				</div>
			</div>
			<input type="submit" value="enviar">
		</form>
			<div class="clear"></div>
			<div class="clear"></div>
			<div class="clear"></div>
			<div class="clear"></div>
			<div class="clear"></div>

			<div class="row">
				<div class="col-lg-3 col-lg-offset-4">
					<button type="button" onclick="cleanForm();">Limpiar formuluario</button>

				</div>
				<div class="col-lg-3">
					<input type="submit" value="Generar remision" class="buttonStyle bgBlue" onclick="sendRemision();">
				</div>
			</div>
			

	</div>

<div id="bgBlack"  onclick="closeModal();">	
	<div class="closeModal">
		<i class="fa fa-times" aria-hidden="true"></i>
	</div>
</div>

<div class="containerForm hidden">
	<h2 class="titileModal">Nuevo Usuario</h2>
	<div id="example-manipulation">
		    <h3>Registro  de chofer</h3>
		    <section>
		        <form action="" id="formDriver" method="post" onsubmit="save_driver();">
		        	<input type="hidden" name="type_form" value="save_driver">
		        	<div class="row">
		        		<div class="col-lg-12">
		        			<label for="name_driver">Nombre*</label>
		            		<input id="name_driver" name="name_driver" type="text" class="required inputStyle" required="">
		        		</div>
		        	</div>
		        	<div class="clear"></div>
		        	<div class="row">
		        		<div class="col-lg-12">
		        			<label for="phone_driver">Telefono*</label>
		            		<input id="phone_driver" name="phone_driver" type="text" class="required inputStyle" required="">
		        		</div>
		        	</div>
		        	<div class="clear"></div>
		        	<div class="row">
		        		<div class="col-lg-12">
		        			<label for="name_reference">Nombre de referencia*</label>
		            		<input id="name_reference" name="name_reference" type="text" class="required inputStyle" required="">
		        		</div>
		        	</div>
		        	<div class="clear"></div>
		        	<div class="row">
		        		<div class="col-lg-12">
		        			<label for="phone_reference">Telefono de referencia*</label>
		            		<input id="phone_reference" name="phone_reference" type="text" class="required inputStyle" required="">

		            		
		        		</div>
		        	</div>
					<div class="row">
		        		<div class="col-lg-12">
		        			<label for="phone_reference">Fotografia de licencia*</label>
		            		<input type="file" name="imagen" id="imagen"  required="">
							
		            		<input type="submit" value="enviar" class=" bg-primary buttonStyle">
		        		</div>
		        	</div>

		        </form>
		    </section>

		    <h2 class="text-600">Registro  de tractor</h2>
		    <section>
		        <form action="" id="formTractor" method="post" onsubmit="save_tractor();">
		        	<input type="hidden" name="type_form" value="save_tractor">
		        	<div class="row">
		        		<div class="col-lg-12">
		        			<label for="brand_tractor">Marca *</label>
		            		<input id="brand_tractor" name="brand_tractor" type="text" class="required inputStyle" required="">
		        		</div>
		        	</div>
		        	<div class="clear"></div>
		        	<div class="row">
		        		<div class="col-lg-12">
		        			<label for="model_tractor">Modelo *</label>
		            		<input id="model_tractor" name="model_tractor" type="text" class="required inputStyle" required="">
		        		</div>
		        	</div>
		        	<div class="clear"></div>
		        	<div class="row">
		        		<div class="col-lg-12">
		        			<label for="color_tractor">Color*</label>
		            		<input id="color_tractor" name="color_tractor" type="text" class="required inputStyle" required="">
		        		</div>
		        	</div>
		        	<div class="clear"></div>
		        	<div class="row">
		        		<div class="col-lg-12">
		        			<label for="n_econ">Numero economico*</label>
		            		<input id="n_econ" name="n_econ" type="text" class="required inputStyle" required="">
		        		</div>
		        	</div>
		        	<div class="clear"></div>
					<div class="row">
		        		<div class="col-lg-12">
		        			<label for="placas">Placas</label>
		            		<input id="placas" name="placas" type="text" class="required inputStyle" required="">
		        		</div>
		        	</div>
		        	<div class="row">
		        		<div class="col-lg-12">
		        			<label for="placas">Imagen tractor</label>
		            		
							<input type="file" name="imagen" id="imagen"  required="">

		            		<input type="submit" value="Guardar" class=" bg-primary buttonStyle text-600">
		        		</div>
		        	</div>

		        </form>
		    </section>


		    <h3>Registro  de cajas</h3>
		    <section>
		       
		    	<div class="row">	
					<div class="col-lg-12" id="formSimple">	
							<form action="" id="formSencillo" onsubmit="save_boxF_S();">
								<input type="hidden" name="type_form" value="save_box">
								 <div class="row">
						    		<div class="col-lg-3">
						    			<label for="simple">Sencillo: </label>
						    			<input type="radio" name="type" class="holis" class="type" value="simple">
						    		</div>
						    		<div class="col-lg-3">
						    			<label for="full">Full: </label>
						    			<input type="radio" name="type" class="holis" class="type" value="full">
						    		</div>
						    	</div>
						    	
						    	<label for="placas">Placas</label>
		            			<input id="placas" name="placas" type="text" class="required inputStyle" required=""><br><br>	
		            			<label for="n_econ">Numero economico</label>
		            			<input id="n_econ" name="n_econ" type="text" class="required inputStyle" required=""><br><br>	
		            			<label for="long">Longitud</label>
		            			<input id="long" name="long" type="text" class="required inputStyle" required=""><br><br>
		            			<label for="type_box">Type box:</label><br><br>
		            			<select name="type_box" id="type_box" class="required inputStyle">
		            				<option value="seca">SECA</option>
		            				<option value="termo">TERMO</option>
		            			</select>
								<div class="clear"></div>
								<input type="submit" value="Guardar" class="buttonStyle bg-primary text-600">
							</form>
							<h3>	
					</div>

					<div class="col-lg-12 hidden" id="formFull">	
							<br>		
							<h3>Caja doble</h3>
							<form action="" id="formDoble" method="post">
								<input type="hidden" name="dobel" value="1">
								<label for="placas">Placas</label>
		            			<input id="placas" name="placas" type="text" class="required inputStyle" required=""><br><br>	
		            			<label for="n_econ">Numero economico</label>
		            			<input id="n_econ" name="n_econ" type="text" class="required inputStyle" required=""><br><br>	
		            			<label for="long">Longitud</label>
		            			<input id="long" name="long" type="text" class="required inputStyle" required=""><br><br>
		            			<label for="type_box">Type box:</label><br><br>
		            			<select name="type_box" id="type_box" class="required inputStyle">
		            				<option value="seca">SECA</option>
		            				<option value="termo">TERMO</option>
		            			</select>
								
								<input type="submit" value="ENVIAR" >
		            			

							</form>
							<button class="Dobleclick inputStyle bg-primary" id="dBclick" onclick="hola();"> Double click</button>
					</div>
		    	</div>
		    </section>

			</div>
		</div>

<div class="formEdit"></div>