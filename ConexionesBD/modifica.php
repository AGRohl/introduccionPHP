<?php

/* 
 * Conexión a la base de datos, para buscar si existe o no el usuario,
 * y si es válido.
 */


// Creamos la conexión con la base de datos
$conexion = new mysqli("localhost", "root","ausias", "neptuno"); 
if ($conexion->connect_errno) { 
    die( "Fallo al contenctar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error); 
}
echo "Conectado a la base de datos...";

// Creamos la sentencia SQL con la que consultar la base de datos.
// Le pasamos los parámetros del otro php.
$sql= <<< SQL
        update cliente 
        set nombreCli = "$nombreCli"
        set direccion = "$direccion"
        where idCliente = "$id"
SQL;

$conexion->query($sql);
$conexion->close();

?>