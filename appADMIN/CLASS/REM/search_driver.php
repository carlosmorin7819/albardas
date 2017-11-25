<?php

	require_once("../connect.php");


	if(!empty($_POST["keyword"])) {
		//AUTO COMPLETADO DE CHOFER
		$query ="SELECT * FROM drivers_emb WHERE name like '" . $_POST["keyword"] . "%' ORDER BY name LIMIT 0,6";
		$result = mysqli_query($con , $query);
		if(!empty($result)) {
			foreach($result as $driver) {?>

			<li class="list"><?php echo $driver["name"]; ?></li>

		<?php } 
		} 
	}else if (!empty($_POST["name"])) {
		//AUTO COMPLETADO DE CHOFER CAMPOS
		$sql = "SELECT * FROM drivers_emb where name = '".$_POST["name"]."'";
	
		if(mysqli_query($con, $sql)){
	   	
		} else{
	    	echo "ERROR: Could not able to execute $sql." . mysqli_error($con);
		}
 		$query_users = mysqli_query($con, $sql);
		$result = mysqli_fetch_array($query_users);

		$employe = '<input type="text" name="phone_driver" value="'.$result['phone'].'" id="phone_driver" class="inputStyle mTop5">';


		echo $employe;

	}else if (!empty($_POST["tractor"])) {		
		//AUTOCOMPLETADO DE TRACTOR
		$query ="SELECT * FROM driver_tractor WHERE brand like '". $_POST["tractor"]."%' ORDER BY brand LIMIT 0,6";

		$result = mysqli_query($con , $query);

		error_log(print_r($result,true ));
		

		if(!empty($result)) {?>
			<?php
			foreach($result as $driver) {?>
				<li class="list"><?php echo $driver["brand"]; ?></li>
			<?php }}
	}else if (!empty($_POST["brand"])) {	
		//CAMPO DE TRACTORES 
		//AUTO COMPLETADO DE CHOFER CAMPOS
		$sql = "SELECT * FROM driver_tractor where brand = '".$_POST["brand"]."'";
	
		if(mysqli_query($con, $sql)){
	   	
		} else{
	    	echo "ERROR: Could not able to execute $sql." . mysqli_error($con);
		}
 		$query_users = mysqli_query($con, $sql);
		$result = mysqli_fetch_array($query_users);

		$tractor = '<input type="text" name="n_econ" id="n_econ" value="'.$result['n_econ'].'" class="inputStyle mTop5"><br>';
		$tractor .= '<input type="text" name="model" id="model" value="'.$result['model'].'" class="inputStyle mTop5"><br>';
		$tractor .= '<input type="text" name="placas_tractor" id="placas_tractor" value="'.$result['placas'].'" class="inputStyle mTop5"><br>';

	
			
		echo $tractor;
		
	}else if (!empty($_POST["brand_box"])) {		
		//AUTOCOMPLETADO DE CAJA
		$query ="SELECT * FROM driver_box WHERE brand like '". $_POST["brand_box"]."%' ORDER BY brand LIMIT 0,6";

		$result = mysqli_query($con , $query);

		error_log(print_r($result,true ));
		

		if(!empty($result)) {?>
			<?php
			foreach($result as $driver) {?>
				<li class="list"><?php echo $driver["brand"]; ?></li>
			<?php }}
	}else if (!empty($_POST["brand_box2"])) {	
		//CAMPO DE TRACTORES 
		//AUTO COMPLETADO DE CHOFER CAMPOS
		$sql = "SELECT * FROM driver_box where brand = '".$_POST["brand_box2"]."'";
	
		if(mysqli_query($con, $sql)){
	   	
		} else{
	    	echo "ERROR: Could not able to execute $sql." . mysqli_error($con);
		}
 		$query_users = mysqli_query($con, $sql);
		$result = mysqli_fetch_array($query_users);

		$tractor = '<input type="text" name="type_box" id="type_box" value="'.$result['type_box'].'" class="inputStyle mTop5"><br>';
		$tractor .= '<input type="text" name="placas_box" id="placas_box" value="'.$result['placas'].'" class="inputStyle mTop5"><br>';
		$tractor .= '<input type="text" name="n_econ_box" id="n_econ_box" value="'.$result['n_econ'].'" class="inputStyle mTop5"><br>';
		$tractor .= '<input type="text" name="temp" id="temp" value="--" class="inputStyle mTop5"><br>';

	
			
		echo $tractor;
		
	}



	
?>