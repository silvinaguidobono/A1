<?php
    // la función devuelve la hora de la última modificación de la página
    // paso la hora a la fecha de la última modificación
    $fecha_ult_mod=date ("F d Y H:i:s.", getlastmod());
    
    echo "La última modificación fue en: " . $fecha_ult_mod;