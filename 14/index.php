<?php
    // asigno el nombre del archivo a una variable
    $file = '../13/index.php';
    
    // transfiero el fichero a un array donde
    // cada elemento del array es una línea del fichero
    $array_file=file($file);
    
    // cuento los elementos del array para mostrar 
    // la cantidad de líneas del fichero
    echo "El fichero tiene ".count($array_file)." lineas.";
