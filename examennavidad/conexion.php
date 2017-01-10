<?php
/* 
 * Esto sirve para generar una conexión reusable
 */
include "config.php"; // esto es para incluir el archivo de configuración propio
$conexion = new mysqli($host,$user,$pass,$database);
if($conexion->connect_errno){
    die("Depuración: Error de conexión ".$conexion->connect_error);
}
$conexion->set_charset("utf8");
//Nos hemos conectado a neptuno.
//echo "Todo bien";
?>