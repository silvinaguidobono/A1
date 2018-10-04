<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 8</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Ejercicio 8</h1>

<?php
    // muestra el nombre del protocolo
    if (isset($_SERVER['SERVER_PROTOCOL'])){
        echo "<p>Schema: ".$_SERVER['SERVER_PROTOCOL']."</p>";
    }
    // muestra el nombre del servidor donde se ejecuta el script
    if (isset($_SERVER['SERVER_NAME'])){
        echo "<p>Host: ".$_SERVER['SERVER_NAME']."</p>";
    }
    // muestra el nombre del archivo de script ejecutándose actualmente,
    // relativa al directorio raíz de documentos del servidor
    if (isset($_SERVER['PHP_SELF'])){
        echo "<p>Path: ".$_SERVER['PHP_SELF']."</p>";
    }
?>
    </body>
</html>