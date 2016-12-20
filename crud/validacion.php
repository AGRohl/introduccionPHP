<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "conexion.php";
$login=$_POST['login'];
//$password=$_POST['pass'];
echo $login."<br>";
$sql = <<< SQL
    SELECT idEmpleado, idCargo, usuario, pass
        FROM empleado
        WHERE usuario = ?
        
SQL;
echo $sql."<br>";
$sentencia = new mysqli_stmt(); 
$sentencia = $conexion->prepare($sql); // comprueba la sentencia sql
$sentencia->bind_param("s", $login);

if (!$sentencia){
    die("Error al preparar: $sql");
} // control de error por si la sql no es correcta
//ya está preparada
$sentencia->execute(); // ejecuta la sentencia sql
if ($sentencia->errno){
    die("Error al ejecutar: ".$sentencia->error);
}
echo $sql."<br>";
//include "sql.php";
$sentencia->bind_result($idempleado, $cargo, $usuario, $password); 

//echo $idempleado." ".$cargo." ".$usuario." ".$password;
