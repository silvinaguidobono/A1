<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 26</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Ejercicio 26</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <p><label for="numero"> Ingrese el número: </label></p>
            <br>
            <input type="number" name="numero" value="" />
            <input type="submit" name="enviar" value="Verificar Armstrong" />
        </form>


<?php
    // determina si el número es Armstrong
    function is_armstrong($number) {
      // obtengo la longitud del número que será el exponente para cada dígito  
      $longitud = strlen($number);
      // convierto el número a string para poder acceder a los dígitos
      // que lo componen
      $number = (string)$number;
      // sumo cada dígito elevado al exponente
      $suma = 0;
      for ($i = 0; $i < $longitud; $i++) {
        $suma += pow((string)$number{$i},$longitud);
      }
      // si la suma coincide con el número es armstrong
      if((string)$suma == (string)$number){
        return true;
      }else{
        return false;
      }
    }
    
    
    if(isset($_POST['numero']) && !empty($_POST['numero'])){
        $numero=$_POST['numero'];
        if(is_armstrong($numero)){
            echo "El número ".$numero." es un número Armstrong.";
        }else{
            echo "El número ".$numero." no es un número Armstrong";
        }        
    }else {
        echo "Debe ingresar un número";
    }

?>
    </body>
</html>
