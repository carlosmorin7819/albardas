<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>PARRAS</title>
	<link href="https://fonts.googleapis.com/css?family=Arsenal" rel="stylesheet">
	<link href="CSS/icons/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="CSS/helpers.css">
	<link rel="stylesheet" href="CSS/style.css">
</head>
<style type="text/css">
	.menu{

		width: 100%;
		height: 50px;
		background: #d27b0c;
		margin-top: -15px;
		font-size: 20px;
		text-align: left;
	}

	.logo{

	background: rgba(210, 123, 12, 0.36);
	}

	.opcion{
		background-position: center;
 	background-size: cover;	
 	border: 2px solid #fff !important;
 	background:  rgba(210, 123, 12, 0.88);
	}

</style>
<?php
 include 'conexion.php';

 $query_users = mysql_query("SELECT * FROM restaurantes") or die(mysql_error());
 ?>


<body>
	<header>
		
	</header>
	<body>
		<div align="center">
		<table border="0" class="content middle text-center">	
			<tr>
				<td>
					<div class="menu">
						<h3 class="fa fa-list-ul  cWhite text-shadow" aria-hidden="true">
							MENU
						</h3>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="logo">
						<img src="img/logo.png">
						</h3>
					</div>
				</td>
			</tr>
			<?php 	
						    
			while($elemento = mysql_fetch_array($query_users)){ ?>
			<tr  class="opcion col-xs-6   h120 block  "  >
				<td >  <a href="" class="cWhite text-shadow s20 text-600"> <img src=" <?= "logorestaurantes/".$elemento['imagen']; ?>"  height="50"> <br>  <?= $elemento['nombre']; }?></a> </td>
			
		</table>
</div>
	</body>
	<footer>
		
	</footer>
</body>
</html>