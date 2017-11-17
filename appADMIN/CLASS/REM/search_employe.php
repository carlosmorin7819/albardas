<?php 
include '../connect.php';
	$name = $_POST['name'];

	

	//$query = "delete from users where id = '$id'";  
	//mysql_query("DELETE FROM users WHERE id = '$id'");

	$sql = "SELECT * FROM employes where id_employe  = '".$name."'";
	
	if(mysqli_query($con, $sql)){
	   	
	} else{
	    echo "ERROR: Could not able to execute $sql." . mysqli_error($con);
	}
 	$query_users = mysqli_query($con, $sql);
	$result = mysqli_fetch_array($query_users);

	$employe = '<input type="text" name="rfc" id="rfc" value="'.$result['rfc'].'" class="inputStyle mTop5"><br>';
	$employe .= '<input type="hidden" name="name_employe" value="'.$result['name'].'">';
	$employe .= '<input type="text" name="adress" id="adress" value="'.$result['addres'].'" class="inputStyle mTop5"><br>';
	$employe .= '<input type="text" name="city" id="city" value="'.$result['city'].'" class="inputStyle mTop5"><br>';
	$employe .= '<input type="hidden" name="tel" id="tel" value="'.$result['tel'].'" class="inputStyle mTop5"><br>';

	echo $employe;
 ?>