<?php

/* 
 * Comprobar si es dni, nie o ninguno.
 */

$dni=$_POST['dni'];
$conversor=array(T,R,W,A,G,M,Y,F,P,D,X,B,N,J,Z,S,Q,V,H,L,C,K,E);
$letranie=array(y=>0,x=>1,z=>2);
$primero=$dni[0];
if (strchr($primero, [a-z,A-Z])){
    if (strchr($primero, [x,y,z,X,Y,Z])){
        $nie=$dni[$letranie[$primero]];
        echo "$nie";
    }
}
if (ctype_digit($dni)){
    $puntero=$dni%23;
    echo "El dni número $dni le corresponde la letra $conversor[$puntero] ";
} else {
    echo "No es válido, contiene una letra";
}


