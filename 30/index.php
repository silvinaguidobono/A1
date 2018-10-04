<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 30</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Ejercicio 30</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <p><label for="correo"> Ingrese el email a validar: </label></p>
            <br>
            <input type="text" name="correo" value="" />
            <input type="submit" name="enviar" value="Submit name" />
        </form>

<?php

    function is_email($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }
    
    if(isset($_POST['correo']) && !empty($_POST['correo'])){
        $correo=$_POST['correo'];
        if (is_email($correo)){
            echo "El email es válido";
        }else{
            echo "El email NO es válido";
        }
    }
?>
    </body>
</html>
    