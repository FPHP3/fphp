<?php
	/*
		Enunciado:
		
		Validar Si un usuario tiene permiso a acceder a cada módulo del sistema, dependiendo de su tipo de usuario:
			1.- Super Administrador
			2.- Administrador
			3.- Gerente
			4.- Jefe de Marketing
			5.- Personal de Maketing
			6.- Jefe de Contabilidad
			7.- Personal de Contabilidad
			8.- Jefe de RRHH
			9.- Jefe de Almacen
			10.- Personal de Almacen
		Sabiendo que los modulos exitentes en el sistema son:
			1.- Administración
			2.- Gerencia
			3.- Marketing
			4.- Contabilidad
			5.- RRHH
			6.- Almacen

	*/
	//Declaración de Variables (Entrada):
		$id_mod = rand(1, 6);
		$id_tipo = rand(1, 9);
		$sms = null;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Estructura Swtich</title>
		<!--Stylos CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php
			//Proceso
				switch ($id_mod) {
					case 2: //Gerencia
						switch ($id_tipo) {
							case 1: //Super Administrador
							case 2: //Administrador
							case 3: //Gerente
								$sms = 'Bienvenido al modulo de Gerencia';
							break;
							default:
								$sms = 'Usted no tiene permisos para acceder al modulo de Gerencia';
								header("Location: ../?idm=".$id_mod."&idt=".$id_tipo."&sms=".$sms);
								exit();
							break;
						}
					break;
					case 3: //Marketing
						switch ($id_tipo) {
							case 1: //Super Administrador
							case 2: //Administrador
							case 4: //Jefe de Marketing
							case 5: //Personal de Marketing
								$sms = 'Bienvenido al modulo de Marketing';
							break;
							default:
								$sms = 'Usted no tiene permisos para acceder al modulo de Marketing';
								header("Location: ../?idm=".$id_mod."&idt=".$id_tipo."&sms=".$sms);
								exit();
							break;
						}
					break;
					case 4: //Contabilidad
						switch ($id_tipo) {
							case 1: //Super Administrador
							case 2: //Administrador
							case 6: //Jefe de Contabilidad
							case 7: //Personal de Contabilidad
								$sms = 'Bienvenido al modulo de Contabilidad';
							break;
							default:
								$sms = 'Usted no tiene permisos para acceder al modulo de Contabilidad';
								header("Location: ../?idm=".$id_mod."&idt=".$id_tipo."&sms=".$sms);
								exit();
							break;
						}
					break;
					case 5: //RRHH
						switch ($id_tipo) {
							case 1: //Super Administrador
							case 2: //Administrador
							case 8: //Jefe de RRHH
								$sms = 'Bienvenido al modulo de RRHH';
							break;
							default:
								$sms = 'Usted no tiene permisos para acceder al modulo de RRHH';
								header("Location: ../?idm=".$id_mod."&idt=".$id_tipo."&sms=".$sms);
								exit();
							break;
						}
					break;
					case 6: //Almacen
						switch ($id_tipo) {
							case 1: //Super Administrador
							case 2: //Administrador
							case 9: //Jefe de Almacen
							case 10: //Personal de Almacen
								$sms = 'Bienvenido al modulo de Almacen';
							break;
							default:
								$sms = 'Usted no tiene permisos para acceder al modulo de Almacen';
								header("Location: ../?idm=".$id_mod."&idt=".$id_tipo."&sms=".$sms);
								exit();
							break;
						}
					break;
					default:
						switch ($id_tipo) {
							case 1: //Super Administrador
							case 2: //Administrador
								$sms = 'Bienvenido al modulo de Administración';
							break;
							default:
								$sms = 'Usted no tiene permisos para acceder al modulo de Administración';
								header("Location: ../?idm=".$id_mod."&idt=".$id_tipo."&sms=".$sms);
								exit();
							break;
						}
					break;
				}
			//Fin Proceso
		?>

		<div class="container mt-4">
			<div class="row mt-4">
				<div class="col-sm-12">
					<p><h3>Salida:</h3></p>
					<p>ID modulo: <?= $id_mod; ?></p>
					<p>ID tipo: <?= $id_tipo; ?></p>
					<p><?= $sms; ?></p>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>