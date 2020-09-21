<?php
	/*
		Enunciado:
		Uso de funciones de PHP para strings (Talvez los más usados)
	*/
	//Declaración de Variables (Entrada):
		$html = '<p><h1>¡Hola Mundo!,</h1><br> <h2>Soy Frank Moreno.</h2><br> ¡Y este es mi cadena de Texto! Prueba de su funcionamiento de Búsqueda y funciones para texto con PHP</p>';
		$sin_html=strip_tags($html);
		$cadena='¡Hola Mundo!, Soy Frank Moreno. ¡Y este es mi cadena de Texto!. Prueba de su funcionamiento de Búsqueda y funciones para texto con PHP';
		$busq1 = '!';
		$busq2 = '.';
		$busq3 = 'K';
		$busq4 = 'Y';
		$busq5 = 'Frank Moreno.';
		$busq6 = 'PHP';
		$sms=null;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Funciones con Cadenas de PHP</title>
		<!--Stylos CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php
			//Proceso
			$sms.='<div class="col-sm-3">';
				$sms .= '<label>Posiciones:</label>';
				$sms .= '<div style="overflow: auto; height: 845px;">';
					for ($i=0; $i < strlen($cadena); $i++) {
						if ($i < 10) {
							$sms.= '__'.$i.': '.utf8_encode(substr($cadena, $i, 1)).'<br>';
						}else if ($i >= 10 && $i < 100) {
							$sms.= '_'.$i.': '.utf8_encode(substr($cadena, $i, 1)).'<br>';
						}else{
							$sms.= $i.': '.utf8_encode(substr($cadena, $i, 1)).'<br>';
						}
					}
				$sms .= '</div>';
			$sms.='</div>';
			$sms.='<div class="col-sm-9">';
				$sms .= '<div class="row">';
					$sms .= '<div class="card col-sm-6">';
						$sms .= '<div class="card-header">Cadena con HTML:</div>';
						$sms .= '<div class="card-body">';
							$sms .= $html;
						$sms .= '</div>';
					$sms .= '</div>';
					$sms .= '<div class="card col-sm-6">';
						$sms .= '<div class="card-header">Cadena sin HTML (strip_tags):</div>';
						$sms .= '<div class="card-body">';
							$sms .= $sin_html;
						$sms .= '</div>';
					$sms .= '</div>';
				$sms .= '</div>';
				$sms .= '<div class="row">';
					$sms .= '<div class="card col-sm-6">';
						$sms .= '<div class="card-header">Cadena normal:</div>';
						$sms .= '<div class="card-body">';
							$sms .= $cadena;
						$sms .= '</div>';
					$sms .= '</div>';
					$sms .= '<div class="card col-sm-6">';
						$sms .= '<div class="card-header">Cadena reemplazada (str_replace):</div>';
						$sms .= '<div class="card-body">';
							$res1 = str_replace($busq5, 'Frank Martin Moreno Alburqueque.', $cadena);
							$res2 = str_replace($busq6, 'FPHP', $res1);
							$sms .= $res2;
						$sms .= '</div>';
					$sms .= '</div>';
				$sms .= '</div>';
				$sms .= '<div class="card col-sm-12">';
					$sms .= '<div class="card-header">strlen:</div>';
					$sms .= '<div class="card-body">';
						$sms .= '<b>Largo de la Cadena:</b> '.strlen($cadena);
					$sms .= '</div>';
				$sms .= '</div>';
				$sms .= '<div class="card col-sm-12">';
					$sms .= '<div class="card-header">strpos:</div>';
					$sms .= '<div class="card-body">';
						$sms .= '<b>Encuentra la posición de la primera ocurrencia del substring "'.$busq1.'" en la cadena:</b> '.strpos($cadena, $busq1);
					$sms .= '</div>';
				$sms .= '</div>';
				$sms .= '<div class="card col-sm-12">';
					$sms .= '<div class="card-header">strrpos:</div>';
					$sms .= '<div class="card-body">';
						$sms .= '<b>Encuentra la posición de la última aparición del substring "'.$busq2.'" en la cadena:</b> '.strrpos($cadena, $busq2);
					$sms .= '</div>';
				$sms .= '</div>';
				$sms .= '<div class="card col-sm-12">';
					$sms .= '<div class="card-header">stripos:</div>';
					$sms .= '<div class="card-body">';
						$sms .= '<b>Encuentra la posición de la primera aparición del substring "'.$busq3.'" en la cadena, sin considerar mayúsculas ni minúsculas:</b> '.stripos($cadena, $busq3);
					$sms .= '</div>';
				$sms .= '</div>';
				$sms .= '<div class="card col-sm-12">';
					$sms .= '<div class="card-header">strripos:</div>';
					$sms .= '<div class="card-body">';
						$sms .= '<b>Encuentra la posición de la última aparición del substring "'.$busq4.'" en la cadena, insensible a mayúsculas y minúsculas en un string:</b> '.strripos($cadena, $busq4);
					$sms .= '</div>';
				$sms .= '</div>';
				$sms .= '<div class="card col-sm-12">';
					$sms .= '<div class="card-header">mb_strpos:</div>';
					$sms .= '<div class="card-body">';
						$sms .= '<b>Busca la posición de la primera ocurrencia del string "'.$busq5.'" en la cadena:</b> '.mb_strpos($cadena, $busq5);
					$sms .= '</div>';
				$sms .= '</div>';
				$sms .= '<div class="card col-sm-12">';
					$sms .= '<div class="card-header">strrchr:</div>';
					$sms .= '<div class="card-body">';
						$sms .= '<b>Encuentra la última aparición del caracter "'.$busq1.'" en la cadena y muestra lo que le continua:</b> '.strrchr($cadena, $busq1);
					$sms .= '</div>';
				$sms .= '</div>';
				$sms .= '<div class="card col-sm-12">';
					$sms .= '<div class="card-header">substr:</div>';
					$sms .= '<div class="card-body">';
						$sms .= substr($cadena, 15, 10);
					$sms .= '</div>';
				$sms .= '</div>';
			$sms.='</div>';
			//Fin Proceso
		?>

		<div class="container mt-4 mb-4">
			<div class="row mt-4 mb-4">
				<div class="col-sm-12 mb-4">
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