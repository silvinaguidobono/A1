<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 28</title>
</head>
<body>
	<h1>Ejercicio 28 - Página 3</h1>
</body>
</html>

<?php


	$cantCajas = 0;
	
	for ($i=1;$i<=10;$i++) {
	
		$clave="numero".$i;
		
		if(isset($_GET["$clave"]) && !empty($_GET["$clave"])) {
			//++$cantCajas;
			$array[]= $_GET["$clave"];
		}
			
	}
	
	$cajasCompletadas = count($array);
	//echo "Se han completado ".$cajasCompletadas." cajas.<br>";
	
	if ($cajasCompletadas >= 2) {
		$arraySinRepetidos = array_unique($array);
		$cajasSinRepe = count($arraySinRepetidos);
		
		
                echo "<br> La lista original es: ";
                foreach ($array as $value) {
                    echo $value."  ";
                }
                
                if(($cajasCompletadas - $cajasSinRepe) <> 0) {
                    echo "<br> Hay números repetidos";
                    echo "<br> La lista sin repetidos queda: ";
                }else{
			echo "<br> No hay números repetidos";
                        echo "<br> La lista queda igual: ";
                        
		}
                foreach ($arraySinRepetidos as $value) {
                    echo $value."  ";
                }
        }else{
            echo "Debe completar 2 o más cajas.";
        }
	