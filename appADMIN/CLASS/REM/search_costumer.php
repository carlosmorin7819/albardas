<?php 
include '../connect.php';
	$name_costumer = $_POST['name_costumer'];

	//$query = "delete from users where id = '$id'";  
	//mysql_query("DELETE FROM users WHERE id = '$id'");

	$sql = "SELECT * FROM costumers where id_costumer  = '".$name_costumer."'";
	
	if(mysqli_query($con, $sql)){
	   	
	} else{
	    echo "ERROR: Could not able to execute $sql." . mysqli_error($con);
	}

 	$query_users = mysqli_query($con, $sql);
	$result = mysqli_fetch_array($query_users);

	$employe = '<input type="text" name="rfc_costumer" id="rfc_costumer" value="'.$result['rfc'].'" class="inputStyle mTop5"><br>';
	$employe .= '<input type="text" name="phone_costumer" id="phone_costumer" value="'.$result['phone'].'" class="inputStyle mTop5"><br>';

	$employe .= '<input type="hidden" name="name_costumer1" id="phone_costumer" value="'.$result['name'].'" class="inputStyle mTop5"><br>';

	
	echo $employe;
 ?>