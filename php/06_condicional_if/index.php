<?php
	/*
		Si a > b entonces:
		Escribir: "A es el ganador" agregando la diferencia entre ambos
		Si no:
		Escribir: "B es el ganador" agregando la diferencia entre ambos
	*/
	//Declarar mis Variables:
	$a = rand(0,500);
	$b = rand(0,500);
	$diferencia = 0;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Estructuras Condicionales IF</title>
		<!--Stylos CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php
			if ($a > $b) {
				//Si se cumple la condición.
				//realizará esto
				$diferencia = $a - $b;
				echo "El valor de A es: ".$a." puntos<br>";
				echo "El valor de B es: ".$b." puntos<br>";
				echo "A es el ganador, por: ".$diferencia." puntos";
			}else{
				//Si no se cumple la condición.
				//realizará esto
				$diferencia = $b - $a;
				echo "El valor de B es: ".$b." puntos<br>";
				echo "El valor de A es: ".$a." puntos<br>";
				echo "B es el ganador, por: ".$diferencia." puntos";
			}
		?>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>