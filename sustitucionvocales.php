<?php

/* 
 * Programa para sustituir vocales por una en concreto, 
 * y mostrando la frase, así sucesivamente con todas las vocales.
 */


// Recogemos la frase en una variable

include 'lib/utilidades';
$frase = $_POST['frase'];

for ($i=0;$i<strlen($frase);$i++){
    if (esVocal($frase[$i])){
        echo 'a';
    }
    else {
        echo '$frase[$i]';
        }
 
}