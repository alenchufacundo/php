<?php

$totalcompra=33.55;
$valor=90;
$diferencia=$valor - $totalcompra;

if ($totalcompra <30){
    echo "Compra mas o te cobraremos los abusivos 30 euros de gastos de envio";    
}

else if($totalcompra >30 && $totalcompra <90){
    echo "con solo $diferencia mas podras tener gastos de envios gratis";
}

else if($totalcompra == 90){
    echo "gastos de envios incluidos";
}

?>
