
<?php
	
	if ($_POST) {
		session_start();
		include "connect.php";
		$total=0;
		$arreglo=$_SESSION['carrito'];
		$costumer = $_POST['costumer'];
		$type_event = $_POST['type_event'];
		
	}
	switch ($type_event) {
		case '1':
			$type_event = 'Boda';
			break;

		case '2':
			$type_event = 'Xv años';
			break;
		
		default:
			# code...
			break;
	}
	?>
		<label for="">Cliente: </label>
		<i><?= $_POST['costumer'];?></i><br>
		<label for="">Evento: </label>
		<i><?= $type_event ?></i>	
		<table border="1" width="600">
			<tr>
				<th>Name:</th>
				<th>Price_</th>
				<th>Cantidad:</th>
				<th>Total:</th>
			</tr>
	<?php 
		$total=0;
		for($i=0;$i<count($arreglo);$i++){
			
	?>
			<tr>
				<th><?= $arreglo[$i]['Nombre'];?></th>
				<th>$<?= $arreglo[$i]['Precio'];?></th>
				<th><?= $arreglo[$i]['Cantidad'];?></th>
				<th>$<?php echo  $arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']; ?></th>
			</tr>

			
	<?php 
		$totalN = ($arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio']) + $totalN ;
		} ?>
		<tr>
				<th></th>
				<th></th>
				<th>Total</th>
				<th>$<?php echo $totalN ?></th>
			</tr>
		</table>	
	<?php 
	



$html = '<table border="0" style=" font-family: arial; margin: 0 auto; height: 150px; border-top: 4px solid #b01c2e; padding: 20px 10	px;">
			<thead>
				<tr style="padding: 15px 0px;">
					<th style="border-bottom: 2px solid #b01c2e; padding: 10px;">
						<table width="100%">
							<tr>
								<th width="50%">
									<img src="../IMG/logoW.png" alt="PEROTE" width="150" style="float: left;">
								</th>
								<th width="50%" style="text-align: right; font-weight: 400;">
									<span style="font-size: 15px; font-weight: 400;">Parras de la Fuente, Coahuila./####.</span> <br>
									<span style="font-size: 15px; font-weight: 400;">Rancho Perote S/N </span><br>
									<span style="font-size: 15px; font-weight: 400;">Antigua Hacienda de Perote </span>
								</th>
							</tr>
						</table>
						
					</th>
					
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<th style="text-align: left; padding: 10px; font-weight: normal; font-size: 15px;" >
						Buen Día: <br>
						Por este medio le hago llegar la cotización solicitada para un evento de:  <b>'.$type_event.'</b> <br>
					</th>
				</tr>
				<tr>
					<th style="text-align: left; padding: 10px; font-weight: normal; font-size: 15px;" >
						La cotización quedo a nombre de: <b>'.$costumer.'</b> <br>
					</th>
				</tr>
				<tr>
					<th style="text-align: left; padding: 10px; font-weight: normal; font-size: 15px;" >
					Contenido de cotizacion: <br>
					<table border="1" width="600">
						<tr>
							<th>Nombre:</th>
							<th>Precio:</th>
							<th>Cantidad:</th>
							<th>Total:</th>
						</tr>';
							$total=0;
							for($i=0;$i<count($arreglo);$i++){
				$html .= '<tr>
							<th>'.$arreglo[$i]['Nombre'].'</th>
							<th>$'.$arreglo[$i]['Precio'].'</th>
							<th>'.$arreglo[$i]['Cantidad'].'</th>
							<th>$'.$arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad'].'</th>
						</tr>';
						}
				$html .= '<tr>
							<th></th>
							<th></th>
							<th>Total</th>
							<th>$'. $totalN .' </th>
						</tr>
					</table>	
					

					</th>
				</tr>
				<tr>
					<th style="text-align: left; padding: 10px; font-weight: normal; font-size: 15px;" >
						Las instalaciones de la Antigua Hacienda cuentan con: <br>
						Ø Servicio de restaurante de lunes a domingo de 8:00 a.m. a 9:00 p.m. <br>
						Ø Alberca (si no hay inconveniente climático) <br>
						Ø Renta de asadores <br>
						Ø Bodega de Vinos para su venta y degustación con horario de 8:00 a.m. a 7:00 p.m. <br>
						Ø Salón para todo tipo de eventos sociales <br>
						Ø Reserva natural de murciélagos <br>
						Favor de confirmar de recibido. <br>
						Quedando a sus órdenes para cualquier duda y/o aclaración: <br><br>

						<b><i>FIRMA DE</i></b>

					</th>
				</tr>

			</tbody>
			
		</table>';
 
	include("../../MPDF/mpdf.php");
	$mpdf=new mPDF();
	$mpdf->WriteHTML($html);
	ob_clean();
	$namePDF = str_shuffle("ab89".uniqid());

	$mpdf->Output('PDF/'.$namePDF.'.pdf', 'D');
?>