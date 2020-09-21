<?php
	/*
		Enunciado:
		Desarrolle los bucles while que cuenten:
			1.- desde 50 hasta 40.
			2.- desde 40 hasta 30.
			3.- desde 30 hasta 20.
			4.- desde 20 hasta 0.
	*/
	//Declaración de Variables (Entrada):
		$num1=50;
		$num2=40;
		$num3=30;
		$num4=20;
		$sms=null;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Bucle While</title>
		<!--Stylos CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php
			//Proceso
				//desde 50 hasta 40
				$sms .= '<div class="col-sm-3">';
					$sms .= '<p>Desde 50 hasta 40</p>';
					while ($num1 >= 40) {
						$sms .= '<label class="form-control">'.$num1.'</label>';
						$num1--;
						//$num1 = $num1 - 1;
					}
				$sms .= '</div>';
				//desde 50 hasta 40
				$sms .= '<div class="col-sm-3">';
					$sms .= '<p>Desde 40 hasta 30</p>';
					while ($num2 >= 26) {
						$sms .= '<label class="form-control">'.$num2.'</label>';
						$num2--;
						//$num2 = $num2 - 1;
					}
				$sms .= '</div>';
				//desde 30 hasta 20
				$sms .= '<div class="col-sm-3">';
					$sms .= '<p>Desde 30 hasta 20</p>';
					while ($num3 >= 12) {
						$sms .= '<label class="form-control">'.$num3.'</label>';
						$num3--;
						//$num3 = $num3 - 1;
					}
				$sms .= '</div>';
				//desde 20 hasta 0
				$sms .= '<div class="col-sm-3">';
					$sms .= '<p>Desde 20 hasta 0</p>';
					while ($num4 >= 0) {
						$sms .= '<label class="form-control">'.$num4.'</label>';
						$num4--;
						//$num4 = $num4 - 1;
					}
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