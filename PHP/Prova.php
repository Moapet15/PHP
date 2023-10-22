<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Variables de sesió</title>
</head>
<body>
<?php
session_start();
echo "Hola, " . $_SESSION["nombre"] . ". Tienes " . $_SESSION["edad"] . " años.";
?>
</body>
</html>
