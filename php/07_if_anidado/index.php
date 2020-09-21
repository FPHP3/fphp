<?php
	/*
		Calcular el sueldo del mes de un programador de acuerdo a sus años de experiencia:
			1.- Si el empleado tiene mas de 25 años de experiencia:
				El sueldo será: 31 dias * 8 horas * 35 PEN
			2.- Si el empleado tiene entre de 25 y 15 años de experiencia:
				El sueldo será: 31 dias * 8 horas * 29 PEN
			3.- Si el empleado tiene entre de 5 y 14 años de experiencia:
				El sueldo será: 31 dias * 8 horas * 23 PEN
			3.- Si el empleado tiene menos de 5 años de experiencia:
				El sueldo será: 31 dias * 8 horas * 10.09 PEN
	*/
	//Declaración de Variables:
		//entradas
		$years = rand(1,30);
		$days = 31;
		$hours = 8;
		$cxh = 0;
		//salidas
		$sueldo = 0.00;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>IF Anidado</title>
		<!--Stylos CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php
			if ($years > 25) {
				$cxh = 35;
			}else if($years <= 25 && $years > 15){
				$cxh = 29;
			}else if($years <= 15 && $years > 5) {
				$cxh = 23;
			}else{
				$cxh = 10.09;
			}
			//Proceso
			$sueldo = ($days * $hours) * $cxh;

			echo "<p>El empleado tiene ".$years." años de experiencia.</p>";
			echo "<p>El costo por Hora es: S/. ".$cxh." (PEN)</p>";
			echo "<p>El sueldo del empleado es: S/. ".$sueldo." (PEN)</p>";
		?>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>