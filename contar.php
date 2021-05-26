<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $aNotas = array (9 ,8 ,9.50 ,4 ,7 ,8);

    function contar ($miArray){
        $cantidad=0;

        foreach($miArray as $item){
            $cantidad++;
        }
        return $cantidad;
    }

    echo "la cantidad de notas es: " . contar($aNotas);




?>