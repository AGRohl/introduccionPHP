<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$vector=$_POST['vector'];
$cantidad=count($vector);



foreach ($vector as $elemento) {
    $acumulador+=$elemento;
            
};
echo $final=$acumulador/$cantidad;