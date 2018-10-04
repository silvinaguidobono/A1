<?php
   $array=[1,2,3,4,5,6];
   $numero=5;
   
   echo "El array ordenado está compuesta por: <br>";
    foreach ($array as $value) {
        echo $value." ";
    }
   echo "<br> Las pares de números deben sumar: $numero.<br>";
   
   // almaceno la longitud del array 
   $long=count($array);
   
   for ($i=0;$i<=$long-1;$i++){
   // Selecciono de a un numero
       $caracter=$array["$i"];
       
       // Recorro el array para sumar ese número con otro elemento
       // y verificar si suman el número dado.
       for ($j=$i;$j<=$long-1;$j++){
           
           $elemento=$array["$j"];
           if ($elemento+$caracter == $numero && $i<>$j){
               echo "($caracter,$elemento) ";
           }
       }
   }