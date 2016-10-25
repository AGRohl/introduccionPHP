<?php
/* 
 * Programa para calcular el cambio entre diferentes monedas.
 */
$cantidad=$_POST['cantidad'];
$divisa1=$_POST['divisa1'];
$divisa2=$_POST['divisa2'];
$cambios=array("euro"=>1,"dolar"=>1.089,"yuan"=>7.366,"rublo"=>67.644,"libra"=>0.89);
$precio=0;
$valor1=$cambios[$divisa1];
$valor2=$cambios[$divisa2];
function cambioeuro($cantidad,$valor2){
    $precio=$cantidad*$valor2;
    echo " $precio<br/>";
    return $precio;
}
if ($divisa1 == $divisa2) {
    echo "Es la misma moneda. La cantidad es $cantidad <br/>";
} else {
    echo "No es la misma divisa<br/>";
    
}
if ($divisa1 == "euro"){
    cambioeuro();
    
}
//cambio();
echo "$cantidad $divisa1 equivalen a $precio $divisa2<br/>";
echo "$valor1 y $valor2";