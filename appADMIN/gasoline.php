<?php 	
session_start();
$time = time();

 date_default_timezone_set("America/Mexico_City");
	$hora = date ("H:i",time('H:i:s'));
	$fecha = date ("d-m-Y");

foreach($_POST as $campo => $valor) {
	        $_SESSION['info_employes'][$campo] = $valor; 
	    }

	error_log(print_r($_SESSION, TRUE));	
?>
<table style="max-width:750px; border: 2px double #000; padding: 10px; width: 100%; height: 100px; background: #f9f9f9; margin: 0 auto; font-family: Arial; font-size: 15px; background: url(../IMG/logo2.png); background-position: center; background-size: 100%;">
		<thead>
			
			<tr>
				<th>
					<h4 style="font-family: 15px !important;">REMISION DE SALIDA</h4>
				</th>
			</tr>
			<tr>
				<th>
				<table style="font-size: 14px; border-bottom: 2px solid #000;" width="100%;" >
					<tr>

						<th style="text-align: left; " width="70%">
							<table width="100%">
								<tr>
									<th width="32%" style="text-align: right; font-size: 14px;">
										<span style="padding:3px;"> <b>EMPRESA	:</b></span><br>
										<span style="padding:3px;"> <b>RFC	:</b></span><br>
										<span style="padding:3px;"> <b>DOMICILIO	:</b></span><br>
										<span style="padding:3px;"> <b>CIUDAD	:</b></span><br>
									</th>
									<th width="68%" style="text-align: left; font-size: 14px;">
										<span style="font-weight: normal; padding:3px;">

										<?php echo $_SESSION['info_employes']['name_employe']; ?>
										</span><br>
										<span style="font-weight: normal; padding:3px;">
											<?php echo $_SESSION['info_employes']['rfc']; ?></b></span><br>
										<span style="font-weight: normal; padding:3px;">
											<?php echo $_SESSION['info_employes']['adress']; ?></b></span><br>
										<span style="font-weight: normal; padding:3px;">	<?php echo $_SESSION['info_employes']['city']; ?></b></span><br>
									</th>
								</tr>
							</table>
						</th>

						<th style="text-align: left;" width="30%">
							<table width="100%">
								<tr>
									<th width="50%" style="text-align: right; font-size: 14px;">
										<span> <b>FECHA	:</b></span><br>
										<span> <b>HORA	:</b></span><br>
										<span> <b>TEL	:</b></span><br><br>
										
									</th>
									<th width="50%" style="text-align: left; font-size: 14px;">
										<span style="font-weight: normal;"> <?=$fecha; ?></span><br>
										<span style="font-weight: normal;"> 
											<?=$hora; ?></span><br>
										<span style="font-weight: normal;"><?php echo $_SESSION['info_employes']['tel']; ?></span><br><br>
										
									</th>
								</tr>
							</table>
						</th>

					</tr>
				</table>
				</th>
			</tr>
		</thead>

		<tbody>
		
			<tr>
				<th>
				<table style="font-size: 14px; border-bottom: 2px solid #000; " width="100%;" >
					<tr>
						<th style="text-align: left; " width="100%">
							<table width="100%">
								<tr>
									<th width="20%" style="text-align: right; font-size: 14px;">
										<div style="padding: 2px;"> 
											<b>CLIENTE	:</b>
										</div>
										<div style="padding: 2px;"> 
											<b>DOMICILIO	:</b>
										</div>
										<div style="padding: 2px;"> 
											<b>TELEFONO	:</b>
										</div>
										<div style="padding: 2px;"> 
											<b>RFC	:</b>
										</div>
										<div style="padding: 2px;"> 
											<b>FOLIO DE CARGA	:</b>
										</div>
										<div style="padding: 2px;"> 
											<b>OBSERVACIONES	:</b>
										</div>
								
									</th>
									<th width="70%" style="text-align: left; font-size: 14px;">
										<div style="padding: 2px;">
										 	<span style="font-weight: normal;">
										 		SWEET SUPERIOR FRUIT LTD CO
										 	</span>
										</div>
										<div style="padding: 2px;">
										 	<span style="font-weight: normal;">
										 		2101 W MILITARI HWY UNIT K6-K7, MCALLEN TX CP 78503
										 	</span>
										</div>
										<div style="padding: 2px;">
											<span style="font-weight: normal;">
												GUERRERO #14 COL. CENTRO
										 	</span>
											
										</div>
										<div style="padding: 2px;">
											<span style="font-weight: normal;">
										 		PARRAS DE LA FUENTE
										 	</span>
										</div>
										<div style="padding: 2px;">
											<span style="font-weight: normal;">
										 		2017 SS-0016
										 	</span>
										</div>
										<div style="padding: 2px;">
											<span style="font-weight: normal;">
										 		Lorem ipsum dolor sit amet.
										 	</span>
										</div>
									</th>
								</tr>
							</table>
						</th>
						
					</tr>
				</table>
				</th>

			</tr>
			<!--TABLA DE CONTENIDO-->
			<tr width="100%">
				<th style="height: 250px; vertical-align: top;">
					<table style=" margin-top: 10px;"  width="100%" border="0">
						<thead style=" ">
							<tr style=""  width="100%" >
								<td style="padding: 2px;  font-weight:bold;border-bottom: 1px solid #000; margin: 0px; text-align: center;">
									Cantidad
								</td>
								<td style="padding: 2px;  font-weight:bold;border-bottom: 1px solid #000;  text-align: center;">
									Concepto
								</td>
								<td style="padding: 2px; font-weight:bold; border-bottom: 1px solid #000;  text-align: center;">
									Precio
								</td>
								<td style="padding: 2px; font-weight:bold; border-bottom: 1px solid #000;  text-align: center;">
									Importe
								</td>
							</tr>
						</thead>
						<?php 
							   $i=0;
    
  							 $numrows = count($_SESSION['productos'])/6-1;
							while($i <= $numrows){ 
    						$id = $i+1;
  
						 ?>
						<tr style="">
							<th style="padding: 2px; border-bottom: .5px solid #ccc;">
								<span style="font-weight: normal; font-size: 14px; text-transform: uppercase;">
									<?php echo $_SESSION['productos']['caant'.$i.'']; ?>
								</span>
							</th>
							<th style="padding: 2px; border-bottom: .5px solid #ccc;">
								<span style="font-weight: normal; font-size: 14px; text-transform: uppercase;">
									<?php echo $_SESSION['productos']['prod'.$i.'']; ?>
								</span>
							</th>
							<th style="padding: 2px; border-bottom: .5px solid #ccc;">
								<span style="font-weight: normal; font-size: 14px; text-transform: uppercase;">
									<?php echo $_SESSION['productos']['kg'.$i.'']; ?>
								</span>
							</th>
							<th style="padding: 2px; border-bottom: .5px solid #ccc;">
								<span style="font-weight: normal; font-size: 14px; text-transform: uppercase;">
									<?php echo "$" . $_SESSION['productos']['price'.$i.'']; ?>
								</span>
							</th>
						</tr>

					<?php  
						$i++;  	
					} ?>

					</table>

				</th>
			</tr>

			<!--TABLA DE CONTENIDO-->
			<tr>	
				<th>	
					<table width="100%" style=" border-bottom: .5px solid #000;">	
						<tr style="  width: 100%;" >

								<td style="	 border-top: 1px solid #000; border-bottom: 1px solid #000;" width="20%">
									<span style="font-weight: bold;">	Total bultos:</span>
								</td>

								<td style="padding: 5px; border-top: 1px solid #000; border-bottom: 1px solid #000;" width="10%">
									<span style="font-weight: bold;">	900</span>
								</td>

								<td style="padding: 5px; border-top: 1px solid #000; border-bottom: 1px solid #000;" width="10%">
									<span style="font-weight: bold; color: white">	</span>
								</td>

								<td style="padding: 5px; border-top: 1px solid #000; border-bottom: 1px solid #000;" width="10%">
									<span style="font-weight: bold; color: white;">	</span>
								</td>

								<td style="padding: 5px; border-top: 1px solid #000; border-bottom: 1px solid #000;" width="10%">
									<span style="font-weight: bold; color: white;">	</span>
								</td>

								<td style="text-align: right; padding: 5px; border-top: 1px solid #000; border-bottom: 1px solid #000;" width="10%">
									Subtotal:
								</td>

								<td style="padding: 5px; border-top: 1px solid #000; border-bottom: 1px solid #000;" width="10%">
									$1800
								</td>
						</tr>
						
						<tr style="  width: 100%;" >

								<td style="" width="20%">
									<span style="font-weight: bold;">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold;">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold; color: white">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold; color: white;">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold; color: white;">	</span>
								</td>

								<td style="text-align: right; font-size: 14px;" width="10%">
									SEGURO:
								</td>

								<td style="font-size: 14px;" width="10%">
									$0.00
								</td>
						</tr>

						<tr style="  width: 100%;" >

								<td style="" width="20%">
									<span style="font-weight: bold;">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold;">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold; color: white">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold; color: white;">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold; color: white;">	</span>
								</td>

								<td style="text-align: right; font-size: 14px;" width="10%">
									I.V.A:
								</td>

								<td style="font-size: 14px;" width="10%">
									$0.00
								</td>
						</tr>
						<tr style="  width: 100%;" >

								<td style="" width="20%">
									<span style="font-weight: bold;">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold;">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold; color: white">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold; color: white;">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold; color: white;">	</span>
								</td>

								<td style="text-align: right; font-size: 14px;" width="10%">
									OTROS:
								</td>

								<td style="font-size: 14px;" width="10%">
									$0.00
								</td>
						</tr>
						<tr style="  width: 100%;" >

								<td style="" width="20%">
									<span style="font-weight: bold;">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold;">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold; color: white">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold; color: white;">	</span>
								</td>

								<td style="" width="10%">
									<span style="font-weight: bold; color: white;">	</span>
								</td>

								<td style="text-align: right; font-size: 14px;"  width="10%">
									TOTAL:
								</td>

								<td style=" font-size: 14px;" width="10%">
									$0.00
								</td>
						</tr>
					</table>
				</th>
			</tr>

		</tbody>

		<footer>
			<tr>
				<th>
					<br>
					<table width="100%">
						<tr>
							<th width="40%" style="text-align: left; padding: 0px 15px;">
								<span>Chofer: Jose Carlos Morin Riojas</span>
								
								
							</th>
							<th width="30%">
								<span>Edad: 38</span>
							</th>
							<th width="30%">
								<span>Tel: 871 784 84 s47</span>
							</th>
						</tr>
					</table>
					<table width="100%">
						<tr>
							<th width="33.33%" style="padding: 15px; text-align: left;">
								<span>Tractor</span>
								<table width="100%">
									
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">Marca:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">KW</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">Modelo:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">2007</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">N economico:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">2007</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">PLACAS:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">WK-2390</span>
										</th>
									</tr>
								</table>

							</th>
							<th width="33.33%" style="padding: 15px; text-align: left;">
								<span>Caja</span>
								<table width="100%">
									
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">Tipo de caja:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">Termo</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">Placas:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">AS-3SSW</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">N economico:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">123</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">Temperatura:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">50 f</span>
										</th>
									</tr>
								</table>

							</th>
							<th width="33.33%" style="padding: 15px; text-align: left; vertical-align: top;">
								<span>Otros</span>
								<table width="100%">
								
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">CAAT:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">1245</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">ALPHA:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">ASRH</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">ICCMX:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">577442</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">US DOT:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">155972Z</span>
										</th>
									</tr>
							
								</table>
							</th>
						</tr>
					</table>
				</th>
			</tr>

			<tr>
				<th>
					<table width="100%">
						<tr>
							<th width="45%" style="padding: 15px;">
								<div style="border-top: 1px solid #000; margin-top: 45px;"></div><div style="padding: 2px;"></div>
								<span style="font-weight: 300; padding: 5px; margin: 2px; font-size: 13px;">Persona que formula</span>
							</th>
							<th width="45%" style="padding: 15px;">
								<div style="border-top: 1px solid #000; margin-top: 45px;"></div><div style="padding: 2px;"></div>
								<span style="font-weight: 300; padding: 5px; margin: 2px; font-size: 13px;">Persona que recibe</span>
							</th>
						</tr>
					</table>
				</th>
			</tr>

		</footer>
	</table>