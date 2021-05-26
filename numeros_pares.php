<?php

//imprimir u listado del 1 al 100
for($i=1; $i<=100; $i++) {
    echo $i . "<br>";
}
 

//solo numeros pares

 
for($i=2; $i<=100; $i= $i+=2){
 
    echo $i. "</br>";
}
 
//pares hasta 60
for($i=2; $i<=100; $i+=2){ //con break
    echo $i. "</br>";
    if($i==60){
        break;
    }
}
?>
