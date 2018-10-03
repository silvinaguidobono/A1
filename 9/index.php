<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 9</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Ejercicio 9</h1>

<?php   
    if (isset($_SERVER['HTTPS'])){
        echo "La pagina fue pedida con HTTPS";
    }else{
        echo "La pagina fue pedida con HTTP";
    }
?>
    </body>
</html>