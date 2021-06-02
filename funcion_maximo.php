<?php

//definicion
function maximo($aVector)
{
    $maximo = 0;
    foreach ($aVector as $item) {
        if ($item > $maximo) {
            $maximo = $item;
        }
    }
    return $maximo;
}


//uso
$aNotas = array(8, 4, 5, 3, 9, 1);
$aSueldo = array(800.30, 400.87, 500.45, 300, 900.70, 100, 900, 1800);

echo "La nota máxima es: " . maximo($aNotas) . "<br>";
echo "El sueldo máximo es: " . maximo($aSueldo);