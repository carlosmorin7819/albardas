<?php 

	//CAMPOS DE LA TABLA DRIVERS
	$name_driver = $_POST['name_driver'];
	$phone_driver = $_POST['phone_driver'];
	$name_reference = $_POST['name_reference'];
	$phone_reference = $_POST['phone_reference'];


	//CAMPOS PARA LA TABLA DRIVER_TRACTOR
	$bus_brand = $_POST['bus_brand'];
	$bus_model = $_POST['bus_model'];
	$bus_color = $_POST['bus_color'];
	$n_econ = $_POST['n_econ'];
	$placas = $_POST['placas'];

	//CAMPOS PARA LA TABLA DRIVER_BOX
	$placas_box = $_POST['placas_box'];
	$n_econBox = $_POST['n_econBox'];
	$long = $_POST['long'];
	$type_box = $_POST['type_box'];
	$charge = $_POST['charge'];




	
			//$sql = "INSERT INTO users  VALUES ('','$name','$last_name','$mail','$nombre','$phone','$type_user','$pass', '$gender')";



	$chars = "abcdefghijkmnopqrstuvw-xyz-0123456789"; 
	function generate_code($chars){
			   
	    srand((double)microtime()*1000000); 
	    $i = 0; 
	    $code_driver = ''; 

	    while ($i <= 5) { 
	        $num = rand() % 33; 
	        $tmp = substr($chars, $num, 1); 
	        $code_driver = $code_driver . $tmp; 
	        $i++; 
	    } 
	    return $code_driver;
	}

	$code_driverr = generate_code($chars);
	$code_tractor = generate_code($chars);
	$code_box= generate_code($chars);

	//SQL PARA LA TABLA DE CHOFERES
	//$sql_box = "INSERT INTO drivers_box (id,placas,n_econ,long,type_box,type,id_driver,id_tractor,id_box) VALUES ('','$placas_box','$n_econBox','$long','$type_box','$charge','$code_driverr','$code_tractor','$code_box')";

	
	
	$sql_driver = "INSERT INTO drivers_emb VALUES ('', '$code_driverr', '$name_driver', '$phone_driver', '$name_reference', '$phone_reference', '')";

	$sql_box = "INSERT INTO driver_box VALUES ('','$placas_box','$n_econBox','$long','$type_box','$charge','$code_driverr','$code_tractor','$code_box')";

	$sql_tractor = "INSERT INTO driver_tractor VALUES ('','$bus_model','$bus_brand','$bus_color','$n_econ','$placas','$code_driverr','$code_tractor')";


	//$sql_driver = "INSERT INTO drivers_emb (id,id_driver,name,phone,name_reference,phone_reference,photo_lic) VALUES ('', '$code_driverr', '$name_driver', '$phone_driver', '$name_reference', '$phone_reference', '')";

	
	//SQL PARA LA TABLA DE DRIVERS ( CAJA DE TRAILER )
	

	//SQL PARA LA TABLA DE TRACTOR
 	

 	//$sql_tractor = "INSERT INTO drivers_tractor (id,model,brand,color,n_econ,placas,id_driver,id_tractor) VALUES ('','$bus_model','$bus_brand','$bus_color','$n_econ','$placas','$code_driverr','$code_tractor')";


	mysqli_query($con, $sql_box);
	mysqli_query($con, $sql_driver);
	mysqli_query($con, $sql_tractor);
	
	
	
 ?>