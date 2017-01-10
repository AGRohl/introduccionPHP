<!--Página que nos muestra los clientes de una base de datos -->
 <?php
 $empleado=$_POST['idempleado'];
 $salario=$_POST['salario'];
 
 function Edita(){
    include "conexion.php"; // incluimos la conexión.
$sql = <<< SQL
    update empleado
        set salario = sueldo
        where idEmpleado = $empleado
SQL;
//echo $sql;
//$sentencia = new mysqli_stmt(); 
/* es opcional, se activa para que netbeans nos muestre ayuda acerca de mysqli 
mientras programamos, después podemos comentarlo ya que no es necesario.
 * mysqli_stmt es otro tipo de objeto de conexion a la base de datos */
$sentencia = $conexion->prepare($sql); // comprueba la sentencia sql
if (!$sentencia){
    die("Error al preparar: ");
} // control de error por si la sql no es correcta
//ya está preparada
$sentencia->execute(); // ejecuta la sentencia sql
if ($sentencia->errno){
    die("Error al ejecutar: ".$sentencia->error);
}// control de error por si la ejecución de la sql ha fallado.
//ejecutada con éxito
$sentencia->bind_result($idempleado, $apellidos, $nombre, $salario, $cargo); 
// guarda los resultados de la consulta en unas variables.
$i=1; // variable para control de líneas pares e impares en el bucle.
 }
?>
 
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Edición de salario de Empleados</title>
    </head>    
    <body>
        <div class="container">
            
        <div class="row">
            <input type="text" name="sueldo" value="<?php$salario?>">
            <input type="submit" onclick="<?php $sueldo=sueld ?>" value="guardar">
        </div>
        
        
        </div>
    </body>
</html>