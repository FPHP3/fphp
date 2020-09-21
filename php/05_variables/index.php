<?php
	//declaración de Variables:
	$var1=null;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Variables</title>
		<!--Stylos CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php
			//asignacion de mis variables:

			//tipo entero o numérica (integer => int)
			$var1=50;
			echo '<h3>'.$var1.'</h3><br>';

			//tipo decimal (double => float => money => real)
			$var1=6473.04;
			echo '<h3>'.$var1.'</h3><br>';

			//tipo texto 1 (text => varchar => char)
			$var1='Texto numero 1';
			echo '<h3>'.$var1.'</h3><br>';

			//tipo texto 2 (text => varchar => char)
			$var1="Texto numero 2";
			echo '<h3>'.$var1.'</h3><br>';

			//tipo bool (bool => boolean)
			$var1=true;
			echo '<h3>'.$var1.'</h3><br>';
			$var1=false;
			echo '<h3>'.$var1.'</h3><br>';
		?>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>