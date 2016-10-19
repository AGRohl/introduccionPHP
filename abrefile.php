<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$fichero=$_POST["fichero"];
$lineas=$_POST["linea"];


$file=  fopen($fichero, "a");
foreach ($lineas as $linea){
    fwrite($file, $linea . PHP_EOL);
    
    /*echo "$elemento ha sido seleccionado";*/
}
/*fwrite($file, $lineas); */
fclose($file);