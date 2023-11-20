<?php
	//inicializar variable de sesión
	session_start();
	//inicialización de variables
	$nif = $nombre = $direccion = $mensaje = null;
	//array para guardar las personas
	$listaDePersonas = [];

	//si existe la variable de sesión substituyo el contenido del array
	if (isset($_SESSION['personas'])){
		$listaDePersonas = $_SESSION['personas'];
	}
		
	//ALTA DE PERSONA

		//recuperar los datos sin espacios en blanco -trim()-
				
		//validar datos obligatorios

		if (isset($_POST['alta'])) {
			try {
			$nif = isset ($_POST['nif']);
			$nombre = isset ($_POST['nombre']);
			$direccion = isset ($_POST['direccion']);
				validacio($nif,$nombre,$direccion);
			if (array_key_exists($nif, $listaDePersonas)) {
				throw new Exception('La persona ja existeix', 4);
			}
			} catch (Exception $e) {
				$mensaje = $e -> getMessage();
			}
			registrar($nif,$nombre,$direccion);
		}

		//validar que el nif no exista en la base de datos
			
		//guardamos el nombre y dirección en minúsculas con la primera letra en mayúsculas
			
		//guardar la persona en el array
			
		//mensaje de alta efectuada
			
		//limpiar el formulario
			

	//BAJA DE TODAS LAS PERSONAS
	
		//inicializar el array
		

	//BAJA DE LA PERSONA SELECCIONADA EN LA TABLA
	
		//recuperar el nif
		
		//validar nif informado
		
		//borrar la fila del array
			
		//mensaje de baja efectuada
			

	//MODIFICACION DE LA PERSONA SELECCIONADA
	
		//recuperar los datos sin espacios en blanco -trim()-
						
		//validar datos
			
		//validar que el nif no exista en la base de datos
			
		//guardamos el nombre y dirección en minúsculas con la primera letra en mayúsculas
			
		//modificar la persona en el array
			
		//mensaje de modificación efectuada
			

	//CONSULTA DE PERSONAS

	//ordenar el array por nif
	
	//confeccionar la tabla con las personas del array
	

	//volcar el contenido del array en la variable de sesión

?>
<html>
<head>
	<title>PLA03</title>
	<meta charset='UTF-8'>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<div class='container'>
		<h1 class='centrar'>PLA03: MANTENIMIENTO PERSONAS</h1>
		<form method='post' action='#'>
			<label>NIF</label>
			<input type='text' name='nif'><br>
			<label>Nombre</label>
			<input type='text' name='nombre'><br>
			<label>Dirección</label>
			<input type='text' name="direccion"><br>
			<input type='submit' name='alta' value='alta persona'>
			<span><?=$mensaje?></span>
		</form><br><br>
		<table>
			<tr><th>NIF</th><th>Nombre</th><th>Dirección</th><th></th></tr>
		</table><br>
		<form method='post' action='#' id='formularioBaja'>
			<input type='submit' value='baja personas' name='baja'>
		</form>
		<!--FORMULARIO OCULTO PARA LA MODIFICACION-->
		<form method='post' action='#' id='formularioModi'>
			<input type='hidden' name='nifModi'>
			<input type='hidden' name='nombreModi'>
			<input type='hidden' name="direccionModi">
			<input type='hidden' name='modificar'>
		</form>
	</div>
	<script type="text/javascript" src='js/scripts.js'></script>
</body>
</html>



<?php

function registrar($nif,$nombre,$direccion){
		$listaDePersonas['nif']['nombre'] = $nombre;
		$listaDePersonas['nif']['direccion'] = $direccion;
}


// Montem una funció que valida que els camps del formulari no estiguin buits
function validacio($nif,$nombre,$direccion){
		$nif = trim($_POST['nif']);
	    $nombre = trim($_POST['nombre']);
	    $direccion = trim($_POST['direccion']);
		try {
	    // echo($nif);
	    // echo($nombre);
	    // echo($direccion);
		    if (empty($nif)) {
		        throw new Exception("El camp NIF no pot ser nul.", 1);
		    }
		    if (empty($nombre)) {
		        throw new Exception("El camp Nom no pot ser nul.", 2);
		    }
		    if (empty($direccion)) {
		        throw new Exception("El camp Direcció no pot ser nul.", 3);
		    }
		}
		catch (Exception $e) {
			throw new Exception( $e->getMessage() );
		}
}


function buidarLlista(){
	$listaDePersonas = [];
}


function modificarInfo(){
	
}

function eliminarPersona($nif){
	$nif = trim($_POST['nif']);
	try {
		if (empty($nif)) {
			throw new Exception("Necessito un nif per esborrar", 5);
		}
	}
	catch (Exception $e) {
		throw new Exception( $e->getMessage() );
	}
	foreach ($listaDePersonas as $persona => $nif) {
		if ($listaDePersonas['nif'] == $nif) {
			$listaDePersonas['persona'] = empty;
			$listaDePersonas['persona']['nombre'] = empty;
			$listaDePersonas['persona']['direccion'] = empty;
		}
	}
}

?>