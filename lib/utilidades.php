<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Fichero de utilidades
 * Hay que utilizar include
 */
function imprime (){
for ($i=1;$i<=$numero;$i++){
    echo "<BR>";
    echo $frase;
      
}
}

function cuentavocales($lafrase) {
    $acumulador = 0;
    for ($i = 0; $i < strlen($lafrase); $i++) {
        switch ($lafrase[$i]) {
            case "a": case "e": case "i": case "o": case "u":
                $acumulador++;
                break;
            default:
                break;
        }
    }
}

function esVocal($letra){
    switch ($letra) {
        case "a": case "e": case "i": case "o": case "u": case "A:": case"E": case "I": case "O": case "U":
            return true;
        default:
            return false;
            
    }
}
