<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 31</title>
        <meta charset="UTF-8">
        <style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
            th, td {
                padding: 5px;
                text-align: left;
            }
        </style>

    </head>
    <body>
        <h1>Ejercicio 31</h1>


<?php
    echo "<table>";
        
    for ($fila=1;$fila<=6;$fila++){
        echo "<tr>";
        for ($columna=1;$columna<=6;$columna++){
            $numero = $fila*$columna;
            echo "<td>";
                echo $numero." ";
            echo "</td>";
            
        }
        echo "</tr>";
    }
    echo "</table>";
    
?>
    </body>
</html>
