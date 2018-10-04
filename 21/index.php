<?php
    // devuelve información sobre el sistema operativo en que se está
    // ejecutando PHP
    $mode="s"; // modo para obtener el nombre del sistema operativo
    echo "El sistema operativo es ".php_uname($mode);
    