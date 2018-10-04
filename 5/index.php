<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 5</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Ejercicio 5</h1>

<?php
    // muestra la dirección IP desde la cual está viendo la página actual
    // el usuario
    if (isset($_SERVER['REMOTE_ADDR'])){
        echo "<p>The client ip address is: ".$_SERVER['REMOTE_ADDR']."</p>";
    }
    
?>
    </body>
</html> 