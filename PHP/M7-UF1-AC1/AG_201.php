<?php

	$nombre = $apellidos = $mensajes = $telefono = null;

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";		

		if( isset($_POST['nombre'])  and isset($_POST['apellidos']) and isset($_POST['telefono']) ) {
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
		<!-- Tenim l'array gloval anomenat $_POST que es comporta com un diccionari i en el formulari els arguments name son les claus i els valors es busquen en l'input ja que és el que ingressem -->
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