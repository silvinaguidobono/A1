<?php
   $cadena="abcdea";
   // inserto la cadena en array para acceder a sus caracteres de a uno
   $array= str_split($cadena);
   
   // almaceno la longitud del array que equivale a la cantidad
   // de caracteres de la cadena
   $long=count($array);
   
   for ($i=0;$i<=$long;$i++){
   // Selecciono de a un caracter para ver si no esta repetido
       $caracter=$array["$i"];
       
       $tieneRepe = false;
       // Recorro el array para comparar ese caracter con el resto
       for ($j=0;$j<=$long;$j++){
           
           // si es igual a otro caracter en distinta posición, está repetido
           if ($array["$j"]== $caracter && $i<>$j){
               $caracterRepe = $caracter;
               $tieneRepe = true;
               break;
           }
       }
       // Si no está repetido, guardo el caracter y salgo del bucle
       // Si está repetido, avanzo al siguiente caracter
       if (!$tieneRepe){
           $caracterNoRepe = $caracter;
           break;
       }
   }
   echo "La cadena a analizar es: $cadena <br>";
   if ($caracterNoRepe <> ""){
       echo "El primer caracter no repetido es ".$caracterNoRepe;
   }else{
       echo "Todos los caracteres están repetidos";
   }
   