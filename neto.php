<?php

    function calcularBruto ($bruto){
        return $bruto;
    }
    echo "el sueldo bruto es " . calcularBruto(50000) . "pesos" . "<br>";

    function calcularNeto ($neto){
        return $neto - ($neto*0.17); 
    }
    echo "el sueldo neto es " . calcularNeto(50000) . "pesos" . "<br>";


?>