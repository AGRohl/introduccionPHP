<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nie = $_POST["nie"];
$letra=  substr($nie,0,1);
$numero= substr($nie, 1, 8);
$conversor=array(T,R,W,A,G,M,Y,F,P,D,X,B,N,J,Z,S,Q,V,H,L,C,K,E);

switch ($letra){
case X:
    $num=0;
    break;
case Y:
    $num=1;
    break;
case Z:
    $num=2;
    break;
}
/* Comprobamos que coincide la letra indicada */
$puntero=$num.$numero;
$puntero=$puntero%23;

if ($conversor[$puntero]==$nie[9]){
    echo "El nie es correcto";
}  else {
    echo "El nie no es correcto";
}