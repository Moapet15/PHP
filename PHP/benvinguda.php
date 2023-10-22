<?php
session_start();
if (isset($_SESSION["nombre"])) {
echo "Hola, " . $_SESSION["nombre"] . "! Bienvenido a nuestro sitio.";
} else {
echo "Por favor, ve a la página de inicio e introduce tu nombre.";
}
?>