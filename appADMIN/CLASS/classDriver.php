<?php 
	include 'driver.php';
	if ($_POST) {
		$index = $_POST['type_form'];
		//echo $index;
		switch ($index) {

			case 'save_driver':
					$name_driver = $_POST['name_driver'];
					$phone_driver = $_POST['phone_driver'];

					$name_reference = $_POST['name_reference'];
					$phone_reference = $_POST['phone_reference'];

					$nombre = $_FILES['imagen']['name'];

					driver_class::save_driver($name_driver, $phone_driver, $name_reference, $phone_reference, $nombre);				
				break;

			case 'save_tractor':
					$brand_tractor = $_POST['brand_tractor'];
					$model_tractor = $_POST['model_tractor'];
					$color_tractor = $_POST['color_tractor'];
					$n_econ = $_POST['n_econ'];
					$placas = $_POST['placas'];
					$nombre = $_FILES['imagen']['name'];

					driver_class::save_tractor($brand_tractor, $model_tractor, $color_tractor, $n_econ, $placas, $nombre);				
				break;

			case 'save_box':

				$placas = $_POST['placas'];
				$type = $_POST['type'];
				$n_econ = $_POST['n_econ'];
				$long = $_POST['long'];
				$type_box = $_POST['type_box'];

				driver_class::save_box($placas, $n_econ, $long, $type_box, $type);				
			break;
		}
	}
	
 ?>	