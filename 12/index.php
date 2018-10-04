<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 12</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Ejercicio 12</h1>

<?php
    $archivo = file('http://sguidobono.cesnuria.com/A1/9/');
    foreach ($archivo as $numeroLinea => $linea) {
        echo "<b>Linea Nro.{$numeroLinea}</b> ".htmlspecialchars($linea)."<br>"; 
    }
?>
    </body>
</html>