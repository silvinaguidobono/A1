<?php
    $var1 = 10;
    $var2 = 20;
    
    echo "Las variables originales son:<br>";
    echo '$var1: '.$var1."<br>";
    echo '$var2: '.$var2."<br>";
    
    // utilizo una variable auxiliar para guardar una de las variables
    $var_aux = $var1;
    $var1 = $var2;
    $var2 = $var_aux;
    echo "Las variables intercambiadas quedan:<br>";
    echo '$var1: '.$var1."<br>";
    echo '$var2: '.$var2."<br>";
    