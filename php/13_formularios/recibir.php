<?php
	session_start();
	$destino = $_SERVER['DOCUMENT_ROOT'].'/fphp/images/';
	$tamaño = null;
	$tipo = null;
	
	if (isset($_GET['btn_enviar'])) {
		$nombre = $_GET['nombre'];
		$apellido = $_GET['apellido'];
		$correo = $_GET['correo'];
		$telefono = $_GET['telefono'];
		if (is_uploaded_file($_FILES["foto_u"]["tmp_name"])) {
			$nomfile = $_FILES["foto_u"]["name"];
			$tamaño = $_FILES["foto_u"]["size"];
			$tipo = $_FILES["foto_u"]["type"];
			$foto_u = date('YmdHis').str_replace(' ', '', $nomfile);
			move_uploaded_file($_FILES["foto_u"]["tmp_name"], $destino.$foto_u);
		}else{
			$foto_u = 'html.png';
		}
		$_SESSION['resp'] = '<p>Hola '.$nombre.' '.$apellido.'<br>Te has registrado con el <b>correo:</b> '.$correo.' y el <b>telefono:</b> '.$telefono.'.<br>Con el método GET.<br>La información d ela Imagen es la siguiente:<br><b>Destino:</b> '.$destino.'<br><b>Nombre:</b> '.$foto_u.'<br><b>Tamaño:</b> '.$tamaño.'<br><b>Tipo:</b> '.$tipo.'<br><b>Imagen:</b> <img src="../../images/'.$foto_u.'" ></p>';
	}
	if (isset($_POST['btn_enviar'])) {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		if (is_uploaded_file($_FILES["foto_u"]["tmp_name"])) {
			$nomfile = $_FILES["foto_u"]["name"];
			$tamaño = $_FILES["foto_u"]["size"];
			$tipo = $_FILES["foto_u"]["type"];
			$destino = $_SERVER['DOCUMENT_ROOT'].'/fphp/images/';
			$foto_u = date('YmdHis').str_replace(' ', '', $nomfile);
			move_uploaded_file($_FILES["foto_u"]["tmp_name"], $destino.$foto_u);
		}else{
			$foto_u = 'html.png';
		}
		$_SESSION['resp'] = '<p>Hola '.$nombre.' '.$apellido.'<br>Te has registrado con el <b>correo:</b> '.$correo.' y el <b>telefono:</b> '.$telefono.'.<br>Con el método POST.<br>La información d ela Imagen es la siguiente:<br><b>Destino:</b> '.$destino.'<br><b>Nombre:</b> '.$foto_u.'<br><b>Tamaño:</b> '.$tamaño.'<br><b>Tipo:</b> '.$tipo.'<br><b>Imagen:</b> <img src="../../images/'.$foto_u.'" ></p>';
	}
	header("Location: ./");