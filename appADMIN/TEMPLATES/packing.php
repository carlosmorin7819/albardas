<?php 	

	include 'CLASS/connect.php';
	if ($_POST) {
		require 'saveDriver.php';		
	}

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
	<h1 class="title">Empaque</h1>
	
	<br>
		<?php 
		
		//var_dump($_SESSION['user']);
		if ($user_master): ?>
			<span class="buttonAdd " onclick="modalUser();">
				<i class="fa fa-user-plus" aria-hidden="true"></i>
				Nuevo registro
			</span>
		<?php endif ?>
	<br><br>
	<div class="containerTable">
	

		
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

		    <h3>Registro  de tractor</h3>
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
</div>

<div id="bgBlack"  onclick="closeModal();"	>
	<div class="closeModal">
		<i class="fa fa-times" aria-hidden="true"></i>
	</div>
</div>
<div class="formEdit"></div>