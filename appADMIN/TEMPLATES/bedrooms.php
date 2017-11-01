<div class="panelContainer">
	<h1 class="title">Habitaciones</h1>
	<button class="buttonAdd" onclick="modalBed();">
		Añadir habitacion
	</button>
	<br><br>
	<div class="containerTable">
		<table width="100%" border="0">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Precio t.b</td>
					<td>Precio t.a</td>
					<td>Num H</td>
					<td>Hab Dis</td>
					<td>Descripcion</td>
					<td>Imagen 1</td>
					<td>Imagen 2</td>
					<td>Imagen 3</td>
					<td>Imagen 5</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>Nombre</th>
					<th>Precio t.b</th>
					<th>Precio t.a</th>
					<th>Num H</th>
					<th>Hab Dis</th>
					<th>Descripcion</th>
					<th>Imagen 1</th>
					<th>Imagen 2</th>
					<th>Imagen 3</th>
					<th>Imagen 5</th>
				</tr>
				<tr>
					<th>Nombre</th>
					<th>Precio t.b</th>
					<th>Precio t.a</th>
					<th>Num H</th>
					<th>Hab Dis</th>
					<th>Descripcion</th>
					<th>Imagen 1</th>
					<th>Imagen 2</th>
					<th>Imagen 3</th>
					<th>Imagen 5</th>
				</tr>
			</tbody>
		</table>
	</div>
	
	<div class="containerForm hidden">
		<form method="post" onsubmit="saveBed();">
			<h3 class="titileModal">Añadir habitacion</h3>
			<div class="row">
				<div class="col-lg-12">
					<label for="name" class="s12">Titulo de habitacion:</label>
					<input type="text" name="name" id="name" class="inputStyle" placeholder="Delux room">
				</div>
				<div class="clear">	</div>
				<div class="row noMargin">	
					<div class="col-lg-4 col-md-4">
						<label for="name" class="s12">Habitaciones disponibles:</label>
						<input type="number" name="bed_a" id="bed_a" class="inputStyle">
					</div>
					<div class="col-lg-4 col-md-4">
						<label for="name" class="s12">Precio t.b:</label>
						<input type="number" name="n_bed" id="n_bed" class="inputStyle">
					</div>
					<div class="col-lg-4 col-md-4">
						<label for="name" class="s12">Precio t.a:</label>
						<input type="number" name="n_bed" id="n_bed" class="inputStyle">
					</div>
				</div>
				<div class="clear">	</div>	
				<div class="row noMargin">	
					<div class="col-lg-12">
					<label for="name" class="s12">Imagen #1:</label>
						<input type="file" name="" id="">
					</div>
				</div>
				<div class="row noMargin">	
					<div class="col-lg-12">
					<label for="name" class="s12">Imagen #2:</label>
						<input type="file" name="" id="">
					</div>
				</div>
				<div class="row noMargin">	
					<div class="col-lg-12">
					<label for="name" class="s12">Imagen #3:</label>
						<input type="file" name="" id="">
					</div>
				</div>	
				<div class="row noMargin">	
					<div class="col-lg-12">
					<label for="name" class="s12">Imagen #4:</label>
						<input type="file" name="" id="">
					</div>
				</div>
				<div class="clear">	</div>
				<div class="row noMargin">	
					<div class="col-lg-12">
						<label for="name" class="s12">Descripcion:</label>
						<textarea name="" id="" cols="30" rows="10" class="inputStyle padd5 h70" ></textarea>
						
					</div>
					
				</div>
				
			</div>
			<input type="submit" value="Guardar" >
			
			
			
		</form>
	</div>
	<div id="bgBlack">
		<div class="closeModal" onclick="closeModal();">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
	</div>
</div>
