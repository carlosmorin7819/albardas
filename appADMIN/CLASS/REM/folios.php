<?php 
	include 'CLASS/connect.php';
	function folio_carga($cadena)
	{
		
	    list($palabra1, $palabra2) = explode(' ', $cadena);

	    date_default_timezone_set("America/Mexico_City");
		$year = date ("Y");


	  	$lastNumbern = "0019";
	   	$folio_carga = $lastNumbern + 1;

		$resultado1 = substr($palabra1 , -0 , 1);
		$resultado2 = substr($palabra2, -0 , 1);
		$resultado3 = substr($palabra2, 1 , 1);
		if ($resultado1 == $resultado2) {
			
			return $year."-".$resultado1.$resultado3."- 00".$folio_carga;
			# code...
		}else{
		
			return $year."-".$resultado1.$resultado2."- 00".$folio_carga;

			# code...
		}
	}

	function folio_flete($cadena)
	{
		
	    list($palabra1, $palabra2) = explode(' ', $cadena);

	    date_default_timezone_set("America/Mexico_City");
		$year = date ("Y");


	  	$lastNumbern = "0019";
	   	$folio_carga = $lastNumbern + 1;

		$resultado1 = substr($palabra1 , -0 , 1);
		$resultado2 = substr($palabra2, -0 , 1);
		$resultado3 = substr($palabra2, 1 , 1);
		if ($resultado1 == $resultado2) {
			
			return $year."-".$resultado1.$resultado3."- 00".$folio_carga;
			# code...
		}else{
		
			return $year."-".$resultado1.$resultado2."- 00".$folio_carga;

			# code...
		}
	}

	function folio_embarque($con)
	{
		
		$sql = "SELECT * FROM folios";
		$result = mysqli_query($con, $sql);
		$result_folio = mysqli_fetch_array($result);



		date_default_timezone_set("America/Mexico_City");
		$year = date ("Y");
		$year1 = substr($year , -2 , 2);

   		$folio_embarque = $result_folio['folio_embarque'];

   		$result_new = $folio_embarque + 1;

   		$update_folio = "UPDATE folios SET folio_embarque = '$result_new'";
   		//mysqli_query($con, $update_folio);

		return $year1."0".$result_new;
		
	}

 ?>