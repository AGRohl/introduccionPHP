<?php

/* 
 * Leer un dni sin letra y que la calcule.
 */

$dni=$_POST['dni'];
$conversor=array(T,R,W,A,G,M,Y,F,P,D,X,B,N,J,Z,S,Q,V,H,L,C,K,E);

if (ctype_digit($dni)){
    $puntero=$dni%23;
    echo "El dni número $dni le corresponde la letra $conversor[$puntero] ";
} else {
    echo "No es válido, contiene una letra";
}


