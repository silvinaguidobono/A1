<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 4</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Ejercicio 4</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <p><label for="usuario"> Please input your name: </label></p>
            <br>
            <input type="text" name="usuario" value="" />
            <input type="submit" name="enviar" value="Submit name" />
        </form>

<?php

    if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
        $user=$_POST['usuario'];
        echo "<br>";
        echo "Hello ".$user;    
    }
?>
    </body>
</html>
    