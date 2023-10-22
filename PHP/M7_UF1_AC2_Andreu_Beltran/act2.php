<?php
// Aquí cridarem les funcións
	$noches = $ciudad = $coche = $Total = $preuCoche = $preuHotel = $mensaje = null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>PLA02</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<div class='container'>
		<h1 class='centrar'>Mis Vacaciones</h1>
		<form method="post" action="#">
			<label for="noches">Número de noches:</label>
			<input type="number" name="noches" id="noches"><br><br>
			<label for="ciudad">Destino:</label>
			<select name="ciudad" id="ciudad">
				<option disabled selected value=''>Selecciona un destino</option>
				<option>Madrid</option>
				<option>Paris</option>
				<option>Los Angeles</option>
				<option>Roma</option>
			</select><br><br>
			<label for="coche">Días alquiler coche:</label>
			<input type="number" name="coche" id="coche"><br><br>
			<input type="submit" name="enviar" /><br><br>
			<label for="Total">Coste total:</label>
			<input type="text" name="Total" id="Total" value="<?= prova();?>">
			<br>
			<br>
			<span class='errores'></span>
		</form>
	</div>
</body>
</html>

<?php
// Aqui definim la funció
function prova(){
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['noches']) && isset($_POST['ciudad']) && isset($_POST['coche'])) {
            $noches = $_POST['noches'];
            $ciudad = $_POST['ciudad'];
            $coche = $_POST['coche'];
				if ($noches > 0) {
					if ($ciudad == "Madrid") {
						$preuHotel = $noches * 60 + 150;
						if ($noches < $coche) {
							$mensaje = "Els dies de lloguer de vehicle no poden ser superiors als dies d'allotjament";
						}
						else {
							if ($coche < 3) {
								$preuCoche = $coche * 40;
							}
							elseif (3 <= $coche && $coche < 7) {
								$preuCoche = (($coche * 40) -20);
							}
							else {
								$preuCoche = (($coche * 40) -50);
							}
							$Total = $preuHotel + $preuCoche;
							echo $Total;
						}
					}
					elseif ($ciudad == "Paris") {
						$preuHotel = $noches * 60 + 250;
						if ($noches < $coche) {
							$mensaje = "Els dies de lloguer de vehicle no poden ser superiors als dies d'allotjament";
						}
						else {
							if ($coche < 3) {
								$preuCoche = $coche*40;
							}
							elseif (3 <= $coche && $coche < 7) {
								$preuCoche = (($coche*40) -20);
							}
							else {
								$preuCoche = (($coche*40) -50);
							}
							$Total = $preuHotel + $preuCoche;
							echo $Total;
						}
					}
					elseif ($ciudad = "Los Angeles") {
						$preuHotel = $noches * 60 + 450;
						if ($noches < $coche) {
							$mensaje = "Els dies de lloguer de vehicle no poden ser superiors als dies d'allotjament";
						}
						else {
							if ($coche < 3) {
								$preuCoche = $coche*40;
							}
							elseif (3 <= $coche && $coche < 7) {
								$preuCoche = (($coche*40) -20);
							}
							else {
								$preuCoche = (($coche*40) -50);
							}
							$Total = $preuHotel + $preuCoche;
							echo $Total;
						}
					}
					elseif ($ciudad = "Roma") {
						$preuHotel = $noches * 60 + 200;
						if ($noches < $coche) {
							$mensaje = "Els dies de lloguer de vehicle no poden ser superiors als dies d'allotjament";
						}
						else {
							if ($coche < 3) {
								$preuCoche = $coche*40;
							}
							elseif (3 <= $coche && $coche < 7) {
								$preuCoche = (($coche*40) -20);
							}
							else {
								$preuCoche = (($coche*40) -50);
							}
							$Total = $preuHotel + $preuCoche;
							echo $Total;
						}
					}
				}
			}
		}
}