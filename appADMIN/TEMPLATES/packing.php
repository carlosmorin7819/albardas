<?php 	

	include 'CLASS/connect.php';
	
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
		<div class="row">
			<div class="col-lg-2 ">
				
				<button class="tooltip buttonAdd bgBlue" id="modalPordcutos">
					<i class="fa fa-archive" aria-hidden="true"></i>
					<span class="tooltiptext">Agregar nuevo producto</span>
				</button>
			</div>
		</div>
		<button class="buttonAdd" id="buttonP">
			<i class="fa fa-user-plus" aria-hidden="true"></i>
			Nuevo registro
		</button>
			
		<?php endif ?>
	<br><br>
	
	<!-- ##### FORULARIO DE REGISTRO DE PRODUCTOS ##### -->
	<div class="row hidden">
		<div class="col-lg-6">
			<form action="" id="formProducts" onsubmit="save_product();">

				<h2>Nuevo producto</h2>
				<input type="hidden" name="type_form" value="save_product">
				<label for="name">Concepto: </label>
				<input type="text" class="inputStyle" name="name" id="name" placeholder="Nombre" required=""><br>	
				<label for="type_pack">Empaque: </label>
				<select name="type_pack" id="type_pack" required="" class="inputStyle">
					<option value="">--SELECCIONA--</option>
					<option value="arpilla">Arpilla</option>
					<option value="caja">Caja</option>
					<option value="kg">Kilogramo</option>F
					<option value="Pieza">Pieza</option>
				</select> 
				<label for="imagen">Fotografia de producto</label>
					<input type="file" name="imagen" id="imagen"  required="">

			
				<input type="submit" value="Guardar" class="buttonStyle bg-primary">	
			</form>
		</div>
	</div>
	<div class="clear"></div>

	<!--#######################################-->
	<div class="containerTable">
		<table width="100%" border="0" id="tableUsers">
			<thead>	
				<tr>
					<td>ID</td>
					<td>Fecha</td>
					<td>Folio de flete</td>
					<td>Folio embarque</td>
					<td>Folio de carga</td>
					<td>Usuario</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>
			</thead>
			<tbody>	
			<?php 	
							    
				while($elemento = mysqli_fetch_array($result)){ ?>
				<tr>
					<th>1</th>
					<th>11/24/2017</th>
					<th>f-hio2879</th>
					<th>fniklnln09</th>
					<th><a href="">fniklnln09</a></th>
					<th>Doña monse</th>
				
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
	<div class="containerTable hidden">
		<div id="remision-div">

	    <h3>Empresas</h3>
	    <section>
	        <form action="gasoline.php" method="post" id="formRemision" class="" onsubmit="infoEmploye();">
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
					
					<div class="col-lg-6 text-left">
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
					<div class="col-lg-6 ">
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

	    </section>

	    <h3>Productos</h3>
	    <section>
	       <!--FORMULARIO DE CAMPOS DINAMICOS-->
		<form action="" id="formProductos" method="post" onsubmit="infoProductos();">
			
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

					<div class="col-lg-1">
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
					<button class="buttonStyle bg-primary pull-right w100 text-600" type="button" id="addProducto">
						Añadir producto <i class="fa fa-plus" aria-hidden="true"></i>
					</button>
				</div>
			</div>
			<input type="submit" value="enviar">
		</form>
	    </section>

	    <h3>Chofer</h3>
	    <section>
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
						<ul class="caja-box">
							
						</ul>
						<div class="inputCaja">
							<input type="text" name="n_econ" id="n_econ" class="inputStyle mTop5"><br>
							<input type="text" name="model" id="model" class="inputStyle mTop5"><br>
							<input type="text" name="placas_tractor" id="placas_tractor" class="inputStyle mTop5"><br>
						</div>
					</div>
				</div>		
				<!--#######################################-->
				
				
				
				<input type="submit" value="Enviar">
			</form>
	
	    </section>
	</div>
		<!--FORMULARIO DE INFORMACION DE LAS EMPRESAS-->
	
		
		

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
					<input type="submit" value="Generar vista" class="buttonStyle bgBlue" onclick="sendRemision();">
				</div>
			</div>
			

	</div>

<div id="bgBlack" >	
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

		    <h3 class="text-600">Registro  de tractor</h3>
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
