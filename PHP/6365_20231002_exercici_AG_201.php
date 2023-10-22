<?php

	$nombre = $apellidos = $mensajes = $telefono = null;

	if($_POST){

		echo "<pre>";
		print_r($_POST);
		echo "</pre>";		

		if( $_POST['nombre']  and $_POST['apellidos'] and $_POST['telefono'] ) {
			$nombre = $_POST['nombre'];
			$apellidos = $_POST['apellidos'];
			$telefono = $_POST['telefono'];			
			$mensajes = "¡Hola $nombre $apellidos!<br>Tus datos se han recibido correctamente<br>Recibirás un mensaje en el número: $telefono";
		} else {
			$mensajes = "Nombre, apellidos y teléfono obligatorios";
		}

	}

?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<title>basic_design_form</title>
</head>

<body>

<div class="main-container">
	<form class="formularios" action="#" method="post">
		<h1 class="form_tittle">Datos personales</h1>
		<input class="form_input" type="text" name="nombre" placeholder="Ingresa tu nombre">
		<input class="form_input" type="text" name="apellidos" placeholder="Ingresa tus apellidos">
		<input class="form_input" type="text" name="telefono" placeholder="Ingresa tu número de teléfono">
		<span ><?=$mensajes?></span>
		<input class="form_submit" type="submit" value="Submit">
	</form>
</div>

</body>
</html>