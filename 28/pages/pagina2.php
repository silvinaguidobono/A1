<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 28</title>
</head>
<body>

	<form action="pagina3.php" method="GET" name="form2" >
	
	<h1>Ejercicio 28 - Página 2</h1>
	<table style="width:100%">
	
	<?php
		$cantidadCajas = $_GET['numero'];
		//echo $cantidadCajas;
		
		for ($i=1;$i<=$cantidadCajas;$i++) {
			echo "<tr>";
			echo '<td><input type="number" name="numero'.$i.'" /></td>';
			echo "</tr>";
		}
		echo '<input type="submit" value="Ver Repetidos" />';
		
	?>
	</table>
	</form>
</body>
</html>