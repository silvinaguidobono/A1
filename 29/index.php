<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 29</title>
</head>
<body>
	<h1>Ejercicio 29</h1>
	
<?php

// determina si un número es primo
function is_primo($numero){    
    // armo un array con los divisores del número
    for ($i=1;$i<=$numero;$i++) {
        if ($numero%$i == 0) {
                $array[] = $i;
        }
    }
    // los número primos solo tienen 2 divisores: 1 y ese número
    if (count($array) <> 2){
        return false;
    }elseif ($array[0] == 1 and $array[1] == $numero){
        return true;
    }else{
        return false;
    }
}
// suma los números primos menores a 100
$sumaPrimos = 0;
for ($i=1;$i<=100;$i++){
    if (is_primo($i)){
        $sumaPrimos += $i;
    }
}

echo "La suma de los números primos menores a 100 es: ".$sumaPrimos;
?>
</body>
</html>
