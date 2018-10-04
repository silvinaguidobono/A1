<?php
    $lista1=[1,2,3,4,5,6];
    $lista2=[2,2,2,2,2,2];
    
    $cantidad = count($lista1);
    for ($i=0;$i<=$cantidad-1;$i++){
        $lista3["$i"] = $lista1["$i"]*$lista2["$i"];
    }
    
    echo "La primera lista está compuesta por: <br>";
    foreach ($lista1 as $value) {
        echo $value." ";
    }
    echo "<br>La segunda lista está compuesta por: <br>";
    foreach ($lista2 as $value) {
        echo $value." ";
    }
    echo "<br>La lista de multiplicación queda: <br>";
    foreach ($lista3 as $value) {
        echo $value." ";
    }