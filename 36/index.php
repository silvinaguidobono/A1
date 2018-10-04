<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 36</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Ejercicio 36</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <p><label for="cadena1"> Ingrese cadena 1: </label></p>
            <br>
            <input type="text" name="cadena1" value="" />
            <p><label for="cadena2"> Ingrese cadena 2: </label></p>
            <br>
            <input type="text" name="cadena2" value="" />
            
            <input type="submit" name="enviar" value="Comparar cadenas" />
        </form>

<?php

    if(isset($_POST['cadena1']) && !empty($_POST['cadena1'])){
        if(isset($_POST['cadena2']) && !empty($_POST['cadena2'])){
            $cadena1 = $_POST['cadena1'];
            $cadena2 = $_POST['cadena2'];
            // obtengo la longitud de ambas cadenas
            $long_cadena1= strlen($cadena1);
            $long_cadena2= strlen($cadena2);
            
            // comparo las longitudes de ambas cadenas
            if($long_cadena2 <= $long_cadena1){
                // obtengo la cadena del final de la cadena 1
                // con la longitud de la cadena 2
                $subcadena = substr($cadena1,-$long_cadena2);
                if ($subcadena == $cadena2){
                   echo "La cadena: $cadena2 está al final de la cadena: $cadena1"; 
                }else{
                    echo "La cadena: $cadena2 NO está al final de la cadena: $cadena1"; 
                }
            }else{
                echo "La cadena2 debe ser de menor o igual longitud que la cadena1";
            }
        }else{
            echo "Debe ingresar la cadena 2";
        }
    }else{
        echo "Debe ingresar la cadena 1";
    }

?>
    </body>
</html>
