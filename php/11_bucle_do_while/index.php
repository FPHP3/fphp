<?php
	/*
		Enunciado:
		Desarrolle los bucles do while que cuenten:
			1.- desde 100 hasta 90.
			2.- desde 90 hasta 80.
			3.- desde 80 hasta 70.
			4.- desde 70 hasta 50.
	*/
	//Declaración de Variables (Entrada):
		$num1=100;
		$num2=90;
		$num3=80;
		$num4=70;
		$sms=null;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Bucle Do While</title>
		<!--Stylos CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php
			//Proceso
				$sms .= '<div class="col-sm-3">';
					$sms .= '<p>Desde 100 hasta 90</p>';
					do {
						$sms .= '<label class="form-control">'.$num1.'</label>';
						$num1--;
					} while ($num1 >= 90);
				$sms .= '</div>';
				$sms .= '<div class="col-sm-3">';
					$sms .= '<p>Desde 90 hasta 80</p>';
					do {
						$sms .= '<label class="form-control">'.$num2.'</label>';
						$num2--;
					} while ($num2 >= 76);
				$sms .= '</div>';
				$sms .= '<div class="col-sm-3">';
					$sms .= '<p>Desde 80 hasta 70</p>';
					do {
						$sms .= '<label class="form-control">'.$num3.'</label>';
						$num3--;
					} while ($num3 >= 62);
				$sms .= '</div>';
				$sms .= '<div class="col-sm-3">';
					$sms .= '<p>Desde 70 hasta 50</p>';
					do {
						$sms .= '<label class="form-control">'.$num4.'</label>';
						$num4--;
					} while ($num4 >= 50);
				$sms .= '</div>';
			//Fin Proceso
		?>

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