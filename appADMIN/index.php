<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOG IN</title>
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="stylesheet" href="CSS/ICONS/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="IMG/icon.ico" type="image/x-icon"/>

</head>
<style>	
	.panelLogin{
		width: 100%;
		max-width: 400px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translateX(-50%)  translateY(-50%);
		background: red;
	}
	.headerPanel{
		display: block;
		background: #b01c2e;
		color: #fff;
		text-align: center;
		padding: 30px;

	}
	.imgContent{
		background-color: #fff;
		margin: 0 auto;
		width: 100px;
		height: 100px;
		border-radius: 100%;
		padding: 10px;
		margin-bottom: 10px;

	}
	.iconUser{
		width: 40px;
		height: 40px;
		background: rgba(0,0,0,.2);
		text-align: center;
		padding-top: 10px;
		box-sizing: border-box;
		border-radius: 10px;
		font-size: 18px;
		margin-bottom: 5px;
	}
	.formPanel{
		display: block;
		height: 240px;
		background: #fff;
		position: relative;
		padding: 30px 40px;		
		box-sizing: border-box;
	}

	.formPanel::after{
		content: "";
		position: absolute;
		z-index: 10;
		top: -12px;
		left: 50%;
		transform: translateX(-50%);
		border-left: 15px solid transparent;
		border-right: 15px solid transparent;
		border-bottom: 15px solid #fff;
	}
	.inputStyle2{
		width: 100%;
	    height: 40px;
	    border-radius: 3px;
	    outline: none;
	   	padding: 5px;
	    color: #000 !important;
	    border: 1px solid #adb1b3;
	    margin-bottom: 10px;
	    box-sizing: border-box;

	}
	input:focus{
		border: 1px solid #4646bb;
	}
	body{
		background: #ccc;
	}
	input.button{
		padding: 16px 10px;
    	border-radius: 4px;
	    background: #b01c2e;
	    border: none;
	    display: block;
	    width: 100%;
	    margin-top: 10px;
	    color: #fff;
	    cursor: pointer;
	    border-bottom: 4px solid #811522;
	    border-left: 2px solid #811522;
	    outline: none;
	    transition: all .3s;

	}
	input.button:focus{
		border: none;
	}
	.erromsg{
		font-size: 12px;
		color: #b01c2e;
		text-align: center;
		padding: 5px;
		font-weight: 600;
		display: block;
	}
	.hidden{
		display: none;
	}
</style>
<body>	
	
	<div class="panelLogin">	
		<div class="headerPanel">
			<div class="imgContent">
				<img src="../IMG/logo.png" width="100%">
			</div>
		</div>
		<div class="formPanel">	
			<form autocomplete="off" method="post" onsubmit="login_validate();" id="formLogin">
				<input type="mail" name="email" class="inputStyle2" placeholder="Nombre de usuario">
				<input type="password" name="pass" class="inputStyle2" placeholder="Contraseña">
				<p class="erromsg hidden">usuario / contraseña incorrectos </p>
				<input type="hidden" name="type_form" value="validate_user">
				<input type="submit" value="Entrar" class="button">
			</form>
			
		</div>
	</div>
	<script src="JS/jquery-3.2.1.min.js"></script>
	<script src="JS/action.js"></script>
	<script src="JS/ajax.js"></script>
</body>
</html>