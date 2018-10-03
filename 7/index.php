<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 7</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Ejercicio 7</h1>

<?php
    // muestra el nombre del archivo de script ejecutándose actualmente,
    // relativa al directorio raíz de documentos del servidor
    if (isset($_SERVER['PHP_SELF'])){
        echo "<p>The current file name is: ".$_SERVER['PHP_SELF']."</p>";
    }
    // muestra la ruta del script ejecutándose actualmente en forma absoluta
    if (isset($_SERVER['SCRIPT_FILENAME'])){
        echo "<p>The script file name (absolute route) is: ".$_SERVER['SCRIPT_FILENAME']."</p>";
    }
    // muestra la ruta del script actual
    if (isset($_SERVER['SCRIPT_NAME'])){
        echo "<p>The script name (relative route) is: ".$_SERVER['SCRIPT_NAME']."</p>";
    }
?>
    </body>
</html>