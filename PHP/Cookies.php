<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "get") {
    $_SESSION["Color"] = $_POST["Color"];
    $temps_expiracio = time() -3600;  // El temps actual més 2 minuts
    setcookie("Color", $_POST["Color"], $temps_expiracio);
}
?>
<form method="get" action=" ">
Color: <input type="text" name="Color">
<input type="submit">
</form>
