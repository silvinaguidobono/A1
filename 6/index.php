<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 6</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Ejercicio 6</h1>

<?php
    // muestra el navegador
    if (isset($_SERVER['HTTP_USER_AGENT'])){
        echo "<p>Your User-Agent is: ".$_SERVER['HTTP_USER_AGENT']."</p>";
    }
?>
    </body>
</html>