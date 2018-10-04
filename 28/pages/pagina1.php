<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 28</title>
</head>
<body>
	<h1>Ejercicio 28 - Página 1</h1>
	<form action="pages/pagina2.php" method="GET" name="form1" >
		<label for="numero">Introduzca el número de cajas de texto</label>
		<input type="number" name="numero" min="1" max="10" />
		<!-- Controlar que el numero sea mayor a cero y menor o igual a 10  -->
		
		<input type="submit" value="Mostrar tabla" />
	</form>
</body>
</html>