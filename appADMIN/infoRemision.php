<?php 	
session_start();

if ($_POST) {

		foreach($_POST as $campo2 => $valor2) {
	        $_SESSION['productos'][$campo2] = $valor2; 
	    }
		
		
	}
	error_log( print_r($_SESSION,true));
	return false;
?>