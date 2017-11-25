<?php 	
session_start();
$time = time();
include 'CLASS/REM/folios.php';
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
										<span style="font-weight: normal; padding:3px; text-transform: uppercase;">
											<?php echo $_SESSION['info_employes']['name_employe']; ?>
										</span><br>

										<span style="font-weight: normal; padding:3px; text-transform: uppercase;">
											<?php echo $_SESSION['info_employes']['rfc']; ?>
										</span><br>

										<span style="font-weight: normal; padding:3px; text-transform: uppercase;">
											<?php echo $_SESSION['info_employes']['adress']; ?>
										</span><br>

										<span style="font-weight: normal; padding:3px; text-transform: uppercase;">	
											<?php echo $_SESSION['info_employes']['city']; ?>
										</span><br>
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
										<span style="font-weight: normal; text-transform: uppercase;"> <?=$fecha; ?></span><br>
										<span style="font-weight: normal; text-transform: uppercase;"> 
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
											<b>TELEFONO	:</b>
										</div>
										<div style="padding: 2px;"> 
											<b>RFC	:</b>
										</div>
										<div style="padding: 2px;"> 
											<b>FOLIO DE CARGA	:</b>
										</div>
										<div style="padding: 2px;"> 
											<b>FOLIO EMBARQUE:</b>
										</div>
										
								
									</th>
									<th width="70%" style="text-align: left; font-size: 14px; ">
										<div style="padding: 2px;">
										 	<span style="font-weight: normal; text-transform: uppercase;">
										 		<?php echo $_SESSION['info_employes']['name_costumer1']; ?>
										 	</span>
										</div>
										<div style="padding: 2px;">
										 	<span style="font-weight: normal; text-transform: uppercase;">
										 		<?php echo $_SESSION['info_employes']['phone_costumer']; ?>
										 	</span>
										</div>
										<div style="padding: 2px;">
											<span style="font-weight: normal; text-transform: uppercase;">
												<?php echo $_SESSION['info_employes']['rfc_costumer']; ?>
										 	</span>
											
										</div>
										<div style="padding: 2px;">
											<span style="font-weight: normal; text-transform: uppercase;">
										 		<?php echo folio_carga($_SESSION['info_employes']['name_costumer1']); ?>
										 	</span>
										</div>
										<div style="padding: 2px;">
											<span style="font-weight: normal; text-transform: uppercase;">
										 		
										 		<?php echo folio_embarque($con); ?>
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
				<th style=" min-height: 200px; height: auto; vertical-align: top; ">
					<table style=" margin-top: 10px;"  width="100%" border="0">
						<thead style=" ">
							<tr style=""  width="100%" >
								<td style="padding: 2px;  font-weight:bold;border-bottom: 1px solid #000; margin: 0px; text-align: center;">
									Cantidad
								</td>
								<td style="padding: 2px;  font-weight:bold;border-bottom: 1px solid #000;  text-align: center;">
									Concepto
								</td>
								<td style="padding: 2px;  font-weight:bold;border-bottom: 1px solid #000;  text-align: center;">
									Kg
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
							  $totalunit=0;
							  $totalkg=0;
							  $totalImp=0;

    
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
							<th style="padding: 2px; border-bottom: .5px solid #ccc;">
								<span style="font-weight: normal; font-size: 14px; text-transform: uppercase;">
									<?php 
										$total = $_SESSION['productos']['kg'.$i.''] * $_SESSION['productos']['price'.$i.'']; 
										echo "$".$total;
									?>
								</span>
							</th>
						</tr>
					
					<?php  
						$totalunit += $_SESSION['productos']['caant'.$i.''];
						$totalkg += $_SESSION['productos']['kg'.$i.''];
						$totalImp += $total;
						$i++;  	
					} ?>
					<tr>
						<th >
							<br>
						</th>
						<th >
							<br>
						</th>
						<th >
							<br>
						</th>
						<th >
							<br>
						</th>
						<th >
							<br>
						</th>
					</tr>
					<tr style="">
							<th style="border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 5px 0px;">
								<span style="font-weight: bold; font-size: 15px; text-transform: uppercase;">
									<?=	 $totalunit; ?>
								</span>
							</th>
							<th style="border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 5px 0px;">
								<span style="font-weight: bold; font-size: 14px; text-transform: uppercase;">
								</span>
							</th>
							<th style="border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 5px 0px;">
								<span style="font-weight: bold; font-size: 14px; ">
									<?=	 $totalkg; ?> Kg
								</span>
							</th>
							<th style="border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 5px 0px;">
								<span style="font-weight: bold; font-size: 14px; text-transform: uppercase;">
									
								</span>
							</th>
							<th style="border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 5px 0px;">
								<span style="font-weight: bold; font-size: 14px; text-transform: uppercase;">
									<?=	 "$".$totalImp; ?> 
								</span>
							</th>
						</tr>
					</table>

				</th>
			</tr>

			<!--TABLA DE CONTENIDO-->
			<tr>	
				<th>	
					<table width="100%" style=" border-bottom: .5px solid #000;">	
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
								<span>Chofer: <?php echo $_SESSION['moreInfo']['name_driver']; ?></span>
							</th>
							<th width="30%">
								<span>Tel: <?php echo $_SESSION['moreInfo']['phone_driver']; ?></span>
							</th>
							<th width="30%">
								
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
											<span style="font-weight: 400; font-size: 14px;">
												<?php echo $_SESSION['moreInfo']['tractor']; ?>
											</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">Modelo:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">
												<?php echo $_SESSION['moreInfo']['model']; ?>
											</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">N economico:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">
												<?php echo $_SESSION['moreInfo']['n_econ']; ?>
											</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">PLACAS:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">
												<?php echo $_SESSION['moreInfo']['placas_tractor']; ?>
											</span>
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
											<span style="font-weight: 400; font-size: 14px;">
												<?php echo $_SESSION['moreInfo']['type_box']; ?>
											</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">Placas:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">
												<?php echo $_SESSION['moreInfo']['placas_box']; ?>
											</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">N economico:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">
												<?php echo $_SESSION['moreInfo']['n_econ_box']; ?>
											</span>
										</th>
									</tr>
									<tr>
										<th width="50%">
											<span style="font-weight: 400; font-size: 14px;">Temperatura:</span>
										</th width="50%">
										<th>
											<span style="font-weight: 400; font-size: 14px;">
												<?php echo $_SESSION['moreInfo']['temp']; ?>
											</span>
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
	<form action="http://localhost/Proyecto_Albardas/appAdmin/gasoline.php" method="post">
		<input type="hidden" name="confirm">
		<input type="submit" value="Generar remision">
	</form>
	<?php 
 if (isset($_POST['confirm'])) {
 	
 	unset($_SESSION['productos']);
 	unset($_SESSION['moreInfo']);
 	unset($_SESSION['info_employes']);
 	unset($_SESSION['moreInfo']);
 	echo "hola";
 }
	  ?>