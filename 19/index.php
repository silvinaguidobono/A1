<?php
    // guardo el nombre del protocolo
    $scheme="http";
    if (isset($_SERVER['HTTPS'])){
        $scheme="htpps";
    }
    // guardo el nombre del servidor donde se ejecuta el script
    if (isset($_SERVER['SERVER_NAME'])){
        $host=$_SERVER['SERVER_NAME'];
    }
    // guardo el nombre del archivo de script ejecutándose actualmente,
    // relativa al directorio raíz de documentos del servidor
    if (isset($_SERVER['PHP_SELF'])){
        $path=$_SERVER['PHP_SELF'];
    }
    
    echo "La URL completa es:<br>".$scheme."://".$host.$path;
    