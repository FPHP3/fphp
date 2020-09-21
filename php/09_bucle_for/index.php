<?php
	/*
		Enunciado:
		Desarrolle la tabla de Sumar, Restar, Multiplicar y Dividir de un N número
		
	*/
	//Declaración de Variables (Entrada):
		$num = rand(1,50);
		$res = 0;
		$sms=null;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Bucle For</title>
		<!--Stylos CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php
			//Proceso
				//Suma
				$sms .= '<div class="col-sm-3">';
					$sms .= '<p>Suma:</p>';
					for ($i=1; $i < 16; $i++) { 
						$res = $num + $i;
						$sms .= '<label class="form-control">'.$num.' + '.$i.' = '.$res.'</label>';
					}
				$sms .= '</div>';
				//Resta
				$sms .= '<div class="col-sm-3">';
					$sms .= '<p>Resta:</p>';
					for ($i=1; $i < 16; $i++) {
						$res = $num - $i;
						$sms .= '<label class="form-control">'.$num.' - '.$i.' = '.$res.'</label>';
					}
				$sms .= '</div>';
				//Multiplicación
				$sms .= '<div class="col-sm-3">';
					$sms .= '<p>Multiplicación:</p>';
					for ($i=1; $i < 16; $i++) {
						$res = $num * $i;
						$sms .= '<label class="form-control">'.$num.' x '.$i.' = '.$res.'</label>';
					}
				$sms .= '</div>';
				//Divición
				$sms .= '<div class="col-sm-3">';
					$sms .= '<p>Divición:</p>';
					for ($i=1; $i < 16; $i++) { 
						$res = $num / $i;
						$sms .= '<label class="form-control">'.$num.' / '.$i.' = '.number_format($res, 2, '.', '').'</label>';
					}
				$sms .= '</div>';
			//Fin Proceso
		?>

		<div class="container mt-4">
			<div class="row mt-4">
				<div class="col-sm-12">
					<p><h3>Salida:</h3></p>
					<div class="row"><?= $sms; ?></div>
					<p>
						Number Format:
						<?php
							$num = 123456789.1254367;
							echo number_format($num, 2, '.', '');
						?>
					</p>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>