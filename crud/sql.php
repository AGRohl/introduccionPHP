<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$sentencia = $conexion->prepare($sql); // comprueba la sentencia sql
if (!$sentencia){
    die("Error al preparar: ");
} // control de error por si la sql no es correcta
//ya está preparada
$sentencia->execute(); // ejecuta la sentencia sql
if ($sentencia->errno){
    die("Error al ejecutar: ".$sentencia->error);
}
