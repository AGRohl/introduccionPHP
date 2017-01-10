<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function str_char($car,$n){
    $contador="";
    for ($i=0;$i<=$n;$i++){
        $contador.=$car;
    }
    return $contador;
}

function pintar ($n){
    $asterisco=1;
    for ($i=$n-1;$i<=0;$i--){
        echo str_char('.', $i);
        echo str_char('*', $asterisco);
        $asterisco+=2;
    }
}
