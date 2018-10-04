<?php

    $palabras="ocho;dos;cero;cuatro";
    $array_palabras = explode(";", $palabras);
    
    foreach ($array_palabras as $palabra) {
        switch ($palabra) {
        case "cero":
                $digito = "0";
                $salida .=$digito;
                break;
        case "uno":
                $digito = "1";
                $salida .=$digito;
                break;
        case "dos":
                $digito = "2";
                $salida .=$digito;
                break;
        case "tres":
                $digito = "3";
                $salida .=$digito;
                break;
        case "cuatro":
                $digito = "4";
                $salida .=$digito;
                break;
        case "cinco":
                $digito = "5";
                $salida .=$digito;
                break;
        case "seis":
                $digito = "6";
                $salida .=$digito;
                break;
         case "siete":
                $digito = "7";
                $salida .=$digito;
                break;
        case "ocho":
                $digito = "8";
                $salida .=$digito;
                break;
        case "nueve":
                $digito = "9";
                $salida .=$digito;
                break;
        default:
                $digito = "X";
                $salida .=$digito;
                break;
        }
    }
    
    echo "La entrada es: ".$palabras;
    echo "<br>";
    echo "El conversión a dígitos es: ".$salida;