<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$_SESSION["nombre"] = $_POST["nombre"];
}
?>
<form method="post" action=iniciem.php>
Nombre: <input type="text" name="nombre">
<input type="submit">
</form>
