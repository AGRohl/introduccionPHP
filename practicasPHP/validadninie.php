<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dni = $_POST["dni"];
$letra=  substr($dni,8);
$numero= substr($dni, 0, 8);
$primerdigito= substr($numero,0,1);
$conversor=array(T,R,W,A,G,M,Y,F,P,D,X,B,N,J,Z,S,Q,V,H,L,C,K,E);


if (ctype_alpha($primerdigito)){
    validanie();
}else{
    validanif();
}

/* Comprobamos que coincide la letra indicada */
$puntero=$numero%23;
if ($conversor[$puntero]==$dni[8]){
    echo "El dni es correcto";
}  else {
    echo "El dni no es correcto";
}