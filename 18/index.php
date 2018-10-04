<?php
    // genero un error al imprimir una variable no definida
    echo $var;
    
    // guardo en un array asociativo el último error
    $array_error=error_get_last();
    
    // si hubo error
    if (!is_null($array_error)){ 
        echo "El detalle del último error es:<br>";
        // recorro el array asociativo para mostrar el detalle del error
        foreach ($array_error as $key => $value) {
            echo "{$key}--> ".$value."<br>";
        }
    } else {
        echo "No se ha producido ningún error";
}