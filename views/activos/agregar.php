	<div class="pagina-cabezado">		
		<h1>Guardar activos</h1>
		<?php  if(isset($_SESSION) && isset($_SESSION['resultado'])): ?>
		<h3 class="color-primary"><?=$_SESSION['resultado']?></h3>
<?php endif; ?>
		<?php 
			$helper=new helpers();
			$helper::borrarsession('resultado');
		?>
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
							
							</div>
							<label id="espacio-lineas">Fecha de instalación:</label>
							<div class="row">
									<div class="col">
										<input type="date" class="form-control" id="fecha-01" name="fecha2">
									</div>
									
								</div>
							<label id="espacio-lineas">Horas de vida:</label>
                            <input type="text" class="form-control" id="fecha-01" name="horasv">
							<div class="row mt-3">
								<div class="col-6">
	<input type="submit" class="btn btn-primary">
								</div>
								<div class="col-6">
								<a href="<?=base_url?>" class="btn btn-warning">Volver</a>			
									</div>
							</div>
                        </div>
					</form>
					<br/>
				
				</div>
			</div>
		</div>
	</div>

	
</body>
</html>