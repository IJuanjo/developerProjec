	<div class="pagina-cabezado">		
		<h1>Guardar activos</h1>				
	</div>
	<div class="mx-auto">
		<div class="container">
			<div class="row" id="contenedor01">
				<div class="col" id="part-01">
					<form action="<?=base_url?>activos/save" method="POST">
						<div class="form-group">
						 	<label id="espacio-lineas">Nombre:</label>
							<input type="text" class="form-control" id="entrada-texto" name="nombre">
							<label id="espacio-lineas">Descripción técnica:</label>
							<textarea class="form-control" id="caja-texto01" name="descripcion"></textarea>
							<label id="espacio-lineas">Fecha de compra:</label>
							<div class="row">
								<div class="col">
									<input type="date" class="form-control" id="fecha-01" name="fecha">
								</div>
								<div class="col">
									<input type="time" class="form-control" id="tiempo-01" name="tiempo">
								</div>
							</div>
							<label id="espacio-lineas">Fecha de instalación:</label>
							<div class="row">
									<div class="col">
										<input type="date" class="form-control" id="fecha-01" name="fecha2">
									</div>
									<div class="col">
										<input type="time" class="form-control" id="tiempo-01" name="tiempo2">
									</div>
								</div>
							<label id="espacio-lineas">Horas de vida:</label>
                            <input type="text" class="form-control" id="fecha-01" name="horasv">
                            <input type="submit" class="btn btn-primary mt-4 d-block"> 
                        </div>
					</form>
					<br/>
				
				</div>
			</div>
		</div>
	</div>

	
</body>
</html>