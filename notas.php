<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Recogemos la nota numérica introducida en el formulario y la reformulamos.*/

$nota = $_POST['nota'];


if ($nota >=9){
    echo "sobresaliente";
} elseif ($nota < 9 & $nota >= 8) {
    echo "$nota es un notable";
} elseif ($nota <8 & $nota >= 6) {
    echo "$nota es un bien";
} elseif ($nota <6 & $nota >= 5) {
    echo "$nota es un suficiente";
} else {
    echo "$nota es un insuficiente";    
}
    