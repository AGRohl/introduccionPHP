<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Recogemos la mes numérica introducida en el formulario y la reformulamos.*/

$mes = $_POST['mes'];
$anyo = $_POST['anyo'];


switch ($mes){
    case 1: case 3: case 5: case 7: case 8: case 12:
        echo "tiene 31 días";
        break;
    case 4: case 6: case 9: case 11:
        echo "tiene 30 días";
        break;
    case 2:
        echo "mes de febrero";
        break;
}
    