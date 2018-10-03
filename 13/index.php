<?php
    $file = '../12/index.php';
    if (file_exists($file)){
        echo "Last modified: ".date('l jS \of F Y h:i:s A',filemtime($file));
    }else{
        echo "El archivo no fue encontrado";
    }