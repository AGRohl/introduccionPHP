<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$fichero=$_POST["fichero"];

$file=  fopen($fichero, "r");
while(!feof($file)) {    
    echo fgets($file). "<br />";
}
fclose($file);