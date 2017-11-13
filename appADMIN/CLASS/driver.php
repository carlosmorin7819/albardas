<?php 
	session_start();
	//require 'connect.php';

	include("connect.php");
	
	class driver_class
	{
		public static function generate_code($chars){
			   
		    srand((double)microtime()*1000000); 
		    $i = 0; 
		    $code = ''; 

		    while ($i <= 5) { 
		        $num = rand() % 33; 
		        $tmp = substr($chars, $num, 1); 
		        $code = $code . $tmp; 
		        $i++; 
		    } 
		    return $code;
		}
		
		//FUNCION OARA REGISTAR CHOFER
		public static function save_driver($name_driver, $phone_driver, $name_reference, $phone_reference, $nombre)
		{

			$con = mysqli_connect("localhost","root","","albardas_bd");

			$nombrer = strtolower($nombre);
			$cd=$_FILES['imagen']['tmp_name'];
			$ruta = "../IMG_DRIVERS/" . $_FILES['imagen']['name'];
			$destino = "../IMG_DRIVERS/".$nombrer;
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

			$chars = "abcdefghijkmnopqrstuvw-xyz-0123456789"; 
			$codee = driver_class::generate_code($chars);
			// Attempt insert query execution
			$sql = "INSERT INTO drivers_emb  VALUES ('','$codee','$name_driver','$phone_driver','$name_reference','$phone_reference','$nombre')";
			//$sql = "INSERT INTO users  VALUES ('','$name','$last_name','$mail','$nombre','$phone','$type_user','$pass', '$gender')";

			if(mysqli_query($con, $sql)){
			   	
			} else{
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}

		}

		//FUNCION PARA REGISTAR TRACTOR
		public static function save_tractor($brand_tractor, $model_tractor, $color_tractor, $placas, $n_econ, $nombre)
		{

			$con = mysqli_connect("localhost","root","","albardas_bd");

			$nombrer = strtolower($nombre);
			$cd=$_FILES['imagen']['tmp_name'];
			$ruta = "../IMG_DRIVERS/" . $_FILES['imagen']['name'];
			$destino = "../IMG_DRIVERS/".$nombrer;
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

			$chars = "abcdefghijkmnopqrstuvw-xyz-0123456789"; 
			$codee = driver_class::generate_code($chars);
			// Attempt insert query execution
			$sql = "INSERT INTO driver_tractor  VALUES ('','$codee','$model_tractor','$brand_tractor','$color_tractor','$n_econ','$placas','$nombre')";
			//$sql = "INSERT INTO users  VALUES ('','$name','$last_name','$mail','$nombre','$phone','$type_user','$pass', '$gender')";

			if(mysqli_query($con, $sql)){
			   	
			} else{
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}

		}

		public static function save_box($placas, $n_econ, $long, $type_box, $type)
		{

			$con = mysqli_connect("localhost","root","","albardas_bd");


			$chars = "abcdefghijkmnopqrstuvw-xyz-0123456789"; 
			$codee = driver_class::generate_code($chars);
			// Attempt insert query execution
			$sql = "INSERT INTO driver_box VALUES ('','$placas','$n_econ','$long','$type_box','$type','$codee')";
			//$sql = "INSERT INTO users  VALUES ('','$name','$last_name','$mail','$nombre','$phone','$type_user','$pass', '$gender')";

			if(mysqli_query($con, $sql)){
			   	
			} else{
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}

		}

		public static function save_boxFull($placas, $n_econ, $long, $type_box, $type)
		{

			$con = mysqli_connect("localhost","root","","albardas_bd");


			$chars = "abcdefghijkmnopqrstuvw-xyz-0123456789"; 
			$codee = driver_class::generate_code($chars);
			// Attempt insert query execution
			$sql = "INSERT INTO driver_box VALUES ('','$placas','$n_econ','$long','$type_box','$type','$codee')";
			//$sql = "INSERT INTO users  VALUES ('','$name','$last_name','$mail','$nombre','$phone','$type_user','$pass', '$gender')";

			if(mysqli_query($con, $sql)){
			   	
			} else{
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}

		}

	}

		

	

	
?>