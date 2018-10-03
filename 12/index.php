<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 12</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Ejercicio 12</h1>

<?php
    $archivo = file('http://typoestudio.com');
    foreach ($archivo as $numeroLinea => $linea) {
        echo "<b>Linea Nro.{$numeroLinea}</b> ".htmlspecialchars($linea)."<br>"; 
        if($numeroLinea > 10){
            break;
        }
    }
?>
    </body>
</html>