<?php

include "conexion.php";

$usuario = $conexion->real_escape_string($_POST['usuario']);
$pwd = $conexion->real_escape_string($_POST['contrasenya']);

$sql = <<< SQL
    SELECT idCargo
     from empleado
     where usuario = '$usuario' and pass = sha2('$pwd',512)
SQL;

//echo $sql;
$sentencia = new mysqli_stmt(); //es opcional
$sentencia = $conexion->prepare($sql);


if (!$sentencia){
    die("Error al preparar: ");
}
//ya está preparada
$sentencia->execute();
if ($sentencia->errno){
    die("Error al ejecutar: ".$sentencia->error);
}
//ejecutada con éxito
$validado=0;
$sentencia->bind_result($cargo);
while ($sentencia->fetch()){
    $validado=1;
}
if ($validado==0){      
//echo '<meta http-equiv="refresh" content="0;URL=login.html">';
  //    echo  '<a href="login.html">Login Incorrecto</a>';  
 
  header('location:login_error.html');
}
    
 if ($cargo==3) {
        header('location:gerente.php');
    }  else {
        header('location:nogerente.php');
}    


$sentencia->close();
$conexion->close();