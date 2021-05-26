<?php

    $totalcompra= 33.55;
    $tipo_compra="mascotas";
    $precio_envio= 55;

    if($totalcompra < 19){
        }
    else if($tipo_compra)
                echo "No se puede realizar envio. <br>";
        else{
            echo "Los gastos de envios son 9 euros";
        }

    if($totalcompra >19 && $totalcompra <40){
        echo "Los gastos de envios son 9 euros. <br>";
    }

    if($totalcompra >40){
        echo "Los portes de envios son gratis. <br>";
    }

    if($totalcompra >200){
        echo "codigo de descuento CODIGODESC33. <br>";
    }




?>