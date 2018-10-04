<?php
    // guardo el directorio raíz de documentos del servidor
    // en el cual se está ejecutando el script actual
    // según está definido en el archivo de configuración del servidor.
    if (isset($_SERVER['DOCUMENT_ROOT'])){
        $document_root=$_SERVER['DOCUMENT_ROOT'];
        echo "El directorio raíz es: ".$document_root;
    }else{
        echo "No se encuentra el directorio raíz";
    }