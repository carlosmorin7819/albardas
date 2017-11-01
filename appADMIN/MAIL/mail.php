<?php 

	$name = $_POST['name'];
	$mail = $_POST['mail'];

 ?>
 

<?php 

$destinatario = $mail; 
$asunto = "NOCHE BOHEMIA"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Prueba de correo</title> 
</head> 
<body style=" background: #f6f6f6; width:100%;"> 
<h1>Hola '.$name.'!</h1>
<p>Te invitamos a nuestro gran evento este 11 de Agosto.</p> 
</body> 
</html> <table style="background: #000; font-family: Arial; width: 100%; max-width: 600px; margin: 0 auto;">
		<thead 	>
			<tr >
				<th width="100%" style="background: url(http://hoteldonfelipe.com.mx/example/banner.JPG); height: 300px; background-position: center; text-align: left; vertical-align: top; padding: 10px;">
					<img src="http://hoteldonfelipe.com.mx/example/logoW.PNG" alt="" width="180" >
				</th>
			</tr>	
		</thead>
		<tbody>
			<tr>
				<th style="text-align: left; padding: 15px;">
					<h1 style="font-size: 30px; color: #fff; margin:0px 10px;">GRAN NOCHE BOHEMIA</h1>
					<span style="font-size: 12px; color: #fff; margin:0px 10px;">SABADO 11 DE AGOSTO</span>
				</th>
			</tr>
			<tr>
				<th style="text-align: left;">
					<table>
						<tr>
							<th width="80%" style="padding: 15px; text-align: left;">
						
								<span style="font-size: 14px; color: #fff; margin:10px; max-width: 300px; font-weight: 400; text-align: left;">	
								Ven y disfruta esta gran noche bohemia con tu pareja.
								Habrá muchas sorpresas, cena, vinos cabernet sauvignon, invitados especiales, concierto exclusivo, etc. <br><br>
								Cooperación: $1600 <br>
								Dudas y/o preguntas: <br>
								Teléfono: 01842.4221698 <br>
								Email: reservaciones_perote@hotmail.com	<br>
								</span>
								<br><br>
								<a href="https://www.youtube.com/watch?v=Gew2jy2h8EA" target="_blank" style="padding: 10px; background: #ccc; color: #000; text-decoration: none; font-weight: normal; font-size: 14px; border-radius: 3px;">Escuchar a nicho ></a>
							</th>
							<th width="50%"></th>
					
						</tr>
					</table>

									
				</th>
				
			</tr>
			<tr>
				<th>
					<table width="100%">
						<tr>
							<th width="50%" style="text-align: left; padding: 10px;">
								<span style="text-align: left; color: #fff; font-weight: normal; font-size: 12px;">
									<strong>© 2017</strong> Antigua Hacienda de Perote<br>
									
								</span>
							</th>
							<th width="50%">
							<a href="https://www.instagram.com/haciendadeperote/?hl=es" target="_blank">
								<img src="http://hoteldonfelipe.com.mx/example/facebook.png" alt="" width="30">
							</a>
							<a href="https://www.facebook.com/Antiguahaciendadeperote/?ref=br_rs" target="_blank">
								<img src="http://hoteldonfelipe.com.mx/example/instagram.png" alt="" width="30">
							</a>
							</th>
						</tr>
					</table>
				</th>
			</tr>
		</tbody>
		
	</table>
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Hacienda de Perote <reservaciones_perote@hotmail.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: reservaciones_perote@hotmail.com\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: reservaciones_perote@hotmail.com\r\n"; 

//direcciones que recibián copia 
$headers .= "Cc: reservaciones_perote@hotmail.com.com\r\n"; 

//direcciones que recibirán copia oculta 
$headers .= "Bcc: carlosmorin7819@hotmail.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);
?>
