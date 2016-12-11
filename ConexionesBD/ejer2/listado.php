<?php

/* 
 * Conexión a la base de datos, para buscar si existe o no el usuario,
 * y si es válido.
 */


// Creamos la conexión con la base de datos
$conexion = new mysqli("localhost", "root","ausias", "neptuno"); 
if ($conexion->connect_errno) { // esto es para saber si hemos conectado.
    die( "Fallo al contenctar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error); 
    // en caso de no conectar, cerramos la  conexion
}
echo "Conectado a la base de datos...";

// $usuario = $conexion->real_escape_string($_POST['usuario']); // tomamos los datos, con un seguro para no recibir código malicioso
// $pass = $conexion->real_escape_string($_POST['password']);
// Creamos la sentencia SQL con la que consultar la base de datos.
$sql= <<< SQL
        select nombreCli
        from cliente
        where idCliente = 1
SQL;

// 

// Se realiza la consulta guardandola en una variable.
$resultado = new mysqli_result();//inicializamos objeto resultado de consulta SELECT
$validado=FALSE; // variable flag para control de error

if ($resultado = $conexion->query($sql) and $resultado->num_rows==1) { //no hay error
	/*Si queremos mostrar lo que nos ha devuelto la consulta SELECT deberemos pasar por todos las filas devueltas */
	while ($fila = $resultado->fetch_array()){
                $validado=TRUE; // si ha funcionado la consulta se valida el flag de control
                $id=$fila["idCliente"];
		$nombreCli=$fila["nombreCli"]; // guardamos los datos que necesitamos en variables
                $direccion=$fila["direccion"];
	}
	//liberar el conjunto de resultados
	$resultado->free();
}
echo $sql;

// Control de validado
/*if ($validado==FALSE){
    die("Login incorrecto"); // se cierra la conexión porque ha fallado la consulta
}*/
while ($row = mysql_fetch_row($resultado)) {
    echo "$nombreCli <br>";
    
}
// cerramos la conexion
$conexion->close();


?>

