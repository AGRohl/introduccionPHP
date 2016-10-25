<?php

/* 
 * Programa para calcular el cambio de euros a dolares.
 */


$cantidad=$_POST['cantidad'];
$moneda1=$_POST['moneda1'];
$moneda2=$_POST['moneda2'];
$dolar="1.088" ;
$yuan="7.366";
$rublo="67.644";
$libra="0.89";

function cambio($cantidad,$moneda1,$moneda2){
    
    
    $precio=($euros * $valorDolar);
    return $precio;
}
//$precio=($euros * $valorDolar);

if ($moneda1 == $moneda2) {
    echo "Es la misma moneda. La cantidad es $cantidad";
} else {
    
}

cambio($cantidad,$moneda1,$moneda2);
echo "$moneda1 euros equivalen a $precio dolares";