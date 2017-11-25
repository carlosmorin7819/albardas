<?php 	
session_start();

if ($_POST) {

		foreach($_POST as $campo3 => $valor3) {
	        $_SESSION['moreInfo'][$campo3] = $valor3; 
	    }
		
		
	}
	error_log( print_r($_SESSION,true));
	return false;
?>