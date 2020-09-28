<?php
	session_start();
	/*
		Enunciado:
	*/
	//Declaración de Variables (Entrada):
		$nombre=null;
		$apellido=null;
		$correo=null;
		$telefono=null;
		$sms=null;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Formularios</title>
		<!--Stylos CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php
			//Proceso
				//$_POST[];
				//$_GET[]; $_REQUEST[];
				if (isset($_SESSION['resp'])) {
					$sms = $_SESSION['resp'];
					unset($_SESSION['resp']);
				}
			//Fin Proceso
		?>

		<div class="container mt-4">
			<div class="row mt-4">
				<div class="col-sm-12 mb-4">
					<p><h3>Formulario GET:</h3></p>
					<div class="row">
						<form class="col-sm-12 row" method="GET" action="recibir.php" enctype="multipart/form-data" >
							<div class="col-sm-6">
								<div class="form-group">
									<label class="title">Nombre:</label>
									<input type="text" class="form-control" name="nombre" required="required">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label class="title">Apellido:</label>
									<input type="text" class="form-control" name="apellido" required="required">
								</div>
							</div>
							<div class="col-sm-12">
								<hr>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="title">Correo Electrónico:</label>
									<input type="email" class="form-control" name="correo" required="required">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="title">Teléfono:</label>
									<input type="number" class="form-control" name="telefono" required="required">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="title">Imagen:</label>
									<input type="file" class="form-control" name="foto_u" required="required">
								</div>
							</div>
							<div class="col-sm-12">
								<hr>
							</div>
							<div class="col-sm-6 pt-4">
								<div class="form-group">
									<a href="./" class="btn btn-outline-danger btn-block">Actualizar</a>
								</div>
							</div>
							<div class="col-sm-6 pt-4">
								<div class="form-group">
									<button name="btn_enviar" class="btn btn-outline-success btn-block">Enviar GET</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-sm-12 mb-4">
					<p><h3>Formulario POST:</h3></p>
					<div class="row">
						<form class="col-sm-12 row" method="POST" action="recibir.php" enctype="multipart/form-data" >
							<div class="col-sm-6">
								<div class="form-group">
									<label class="title">Nombre:</label>
									<input type="text" class="form-control" name="nombre" required="required">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label class="title">Apellido:</label>
									<input type="text" class="form-control" name="apellido" required="required">
								</div>
							</div>
							<div class="col-sm-12">
								<hr>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="title">Correo Electrónico:</label>
									<input type="email" class="form-control" name="correo" required="required">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="title">Teléfono:</label>
									<input type="number" class="form-control" name="telefono" required="required">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="title">Imagen:</label>
									<input type="file" class="form-control" name="foto_u" required="required">
								</div>
							</div>
							<div class="col-sm-12">
								<hr>
							</div>
							<div class="col-sm-6 pt-4">
								<div class="form-group">
									<a href="./" class="btn btn-outline-danger btn-block">Actualizar</a>
								</div>
							</div>
							<div class="col-sm-6 pt-4">
								<div class="form-group">
									<button name="btn_enviar" class="btn btn-outline-success btn-block">Enviar POST</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="container mt-4">
			<div class="row mt-4">
				<div class="col-sm-12">
					<p><h3>Salida:</h3></p>
					<div class="row"><?= $sms; ?></div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>