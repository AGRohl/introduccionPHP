<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$opcion=$_POST["color"];

foreach ($opcion as $elemento){
    echo "$elemento ha sido seleccionado";
}
