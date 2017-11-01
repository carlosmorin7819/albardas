<?php
	session_start();		
	include 'connect.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$re=mysql_query("select * from services_events where id=".$_GET['id']);
						while ($f=mysql_fetch_array($re)) {
							$nombre=$f['name'];
							$precio=$f['price'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}
	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysql_query("select * from services_events where id=".$_GET['id']);
			while ($f=mysql_fetch_array($re)) {
				$nombre=$f['name'];
				$precio=$f['price'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
</head>
<body>
	
	<section>
	<table border="1" class="table">
			<tr>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Total	</th>
			</tr>
		<?php
			$total=0;
			if(isset($_SESSION['carrito'])){
			$datos=$_SESSION['carrito'];
			$total=0;
			for($i=0;$i<count($datos);$i++){
				
	?>
		
			<tr>
				<th><?php echo $datos[$i]['Nombre'];?></th>
				<th><?php echo $datos[$i]['Precio'];?></th>
				<th><?php echo $datos[$i]['Cantidad'];?></th>
				<th><?php echo $datos[$i]['Precio'] * $datos[$i]['Cantidad']?></th>

			</tr>
		
			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
			}
				
			}else{
				echo '<center><h2>No has añadido ningun producto</h2></center>';
			}
			if($total!=0){
					//echo '<center><a href="./compras/compras.php" class="aceptar">Comprar</a></center>';
			?>
			<tr>
				<th></th>
				<th></th>
				<th>Total:</th>
				<th><?= $total?></th>
			</tr>
		</table>
				
				<form action="CLASS/pdfC.php" method="post" id="formGPfg">
					<label for="costumer">Cliente: </label>
					<input type="text" name="costumer" id="costumer" placeholder="Nombre cliente">
					<label for="costumer">Tipo de evento: </label>
					<select name="type_event" id="type_event">
						<option value="">--SELECCIONA--</option>
						<option value="1">Boda</option>
						<option value="2">Xv años</option>
						<option value="3">Bautizo</option>
						<option value="4">Presentación</option>
						<option value="5">Cumpleaños infantil</option>
						<option value="6">Reunión</option>
					</select>
					<input type="hidden" name="pdf" value="generatePdf">
					<?php 

						for($i=0;$i<count($datos);$i++){
					?>
						<input type="hidden" name="item_name_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Nombre'];?>">
						<input type="hidden" name="amount_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Precio'];?>">
						<input	type="hidden" name="quantity_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Cantidad'];?>"><br>	
					<?php 
						}
					?>
						

					<center><input  type="submit" value="Generar cotizacion" class="aceptar" style="width:200px"></center>
			</form>
			<?php }	?>
		<center><a href="./">Ver catalogo</a></center>

		
	</section>
</body>
</html>