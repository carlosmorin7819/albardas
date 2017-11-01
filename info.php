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

	.nombre{

		width: 100%;
		height: 50px;
		background: #d27b0c;
		margin-top: -15px;
		font-size: 20px;
		text-align: center;
	}

	.logo{

		height: 181px;
		background-: red;
		background-image: url(IMG/pizza.jpg);
		background-position: center;
		background-size: cover;

	}

		.info{
			height: 280px;

	background: rgba(210, 123, 12, 0.36);
	
	}

	.opcion{
		background-position: center;
 	background-size: cover;	
 	border: 2px solid #fff !important;
 	background:  rgba(210, 123, 12, 0.88);
	}

	/** SLIDER**/
	#slider {
  position: relative;
  overflow: hidden;

  border-radius: 4px;
}

#slider ul {
  position: relative;
  margin: 0;
  padding: 0;
  height: 200px;
  list-style: none;
  overflow: hidden;
}

#slider ul li {
  position: relative;
  display: block;
  float: left;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 200px;
  background: #ccc;
  text-align: center;
  line-height: 200px;
}

a.control_prev, a.control_next {
  position: absolute;
  top: 40%;
  z-index: 999;
  display: block;
  padding: 4% 3%;
  width: auto;
  height: auto;
  background: #2a2a2a;
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  font-size: 18px;
  opacity: 0.8;
  cursor: pointer;
}

a.control_prev:hover, a.control_next:hover {
  opacity: 1;
  -webkit-transition: all 0.2s ease;
}

a.control_prev {
  border-radius: 0 2px 2px 0;
}

a.control_next {
  right: 0;
  border-radius: 2px 0 0 2px;
}

.slider_option {
  position: relative;
  margin: 10px auto;
  width: 160px;
  font-size: 18px;
}

</style>
<?php
 include 'conexion.php';

 $query_users = mysql_query("SELECT * FROM restaurantes where id='6' ") or die(mysql_error());
 ?>

<?php 	
						    
			while($elemento = mysql_fetch_array($query_users)){ ?>
<body>
	<header>
		
	</header>
	<body>
		<div align="center">
		<table border="0" class=" middle text-center" width="100%">	
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
					<div class="logo block" >
						<div class="content  bottom text-left">
							<span class="s20 text-600 cWhite shadow padd20">Pizzas To go</span>
							
						</div>
						
					</div>
					<div id="slider">
					  
					  <ul>
					    <li>SLIDE 1</li>
					    <li style="background: #aaa;">SLIDE 2</li>
					    <li>SLIDE 3</li>
					    <li style="background: #aaa;">SLIDE 4</li>
					  </ul>  
					</div>
					<a href="#" class="control_next">>></a>
  <a href="#" class="control_prev"><</a>

  <div class="slider_option">
  <input type="checkbox" id="checkbox">
  <label for="checkbox">Autoplay Slider</label>
</div> 
				</td>
			</tr>
			<td>
					<div class="nombre">
						 <img src=" <?= "logorestaurantes/".$elemento['imagen']; ?>"  height="10px" >
						<h2 class="  cWhite text-shadow" aria-hidden="true">
							
						</h2>
					</div>
				</td>
			
			<tr  class="info  "   >
				<td >   <br>  <?= $elemento['desc']; }?> </td>
			
		</table>
</div>
	</body>
	<footer>
		<script src="appAdmin/JS/jquery-3.2.1.min.js"></script>
		<script src="JS/action.js"></script>
	</footer>
</body>
</html>