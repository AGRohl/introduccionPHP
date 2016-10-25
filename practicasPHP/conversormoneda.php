<?php

/* 
 * Programa para calcular el cambio de euros a dolares.
 */

$euros=$_POST['euros'];
$valorDolar="1.088" ;

$precio=($euros * $valorDolar);
echo "$euros euros equivalen a $precio dolares";