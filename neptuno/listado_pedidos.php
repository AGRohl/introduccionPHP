<!--Página que muestra los pedidos de un cliente, de una página anterior -->

<html>
    <head>
        <title>Listado de pedidos de un cliente</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
<?php
include "conexion.php"; // creamos la conexión con el fichero auxiliar.
$idCliente = $_GET['idCliente']; // recibimos el parámetro de la anterior página
$sql = <<< SQL
    SELECT idPedido, e.nombre, e.apellidos, fechaPedido, cargosE 
        FROM pedido p, empleado e
        WHERE p.idEmpleado = e.idEmpleado and idCliente = ? 
SQL;
// En la sentencia sql la variable que hemos de introducir se indica con "?"
//echo $sql;
// Como el anterior creamos el objeto de consulta de mysql y lo comprobamos
$sentencia = new mysqli_stmt(); //es opcional
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("i", $idCliente); /* indicamos el tipo de variable y 
 * su nombre para la ejecución de la sentencia sql */
if (!$sentencia){
    die("Error al preparar: ");
}
//ya está preparada
$sentencia->execute();
if ($sentencia->errno){
    die("Error al ejecutar: ".$sentencia->error);
}
//ejecutada con éxito
$sentencia->bind_result($idPedido, $nomEmpleado, $apEmpleado, $fechaPedido, $cargosE);
$i=1;
?>
            <div class="row bg-info">
                <div class="col-md-1">idPedido</div>
                <div class="col-md-4">Empleado</div>
                <div class="col-md-2">Fecha Pedido</div>
                <div class="col-md-2">Cargos en euros</div>
                <div class="col-md-2">Listado de detalle</div>
            </div>
<?php
while ($sentencia->fetch()){
    //en $id, $cod, ... estan los valores de los campos
    ?>
        <div class="row <?php echo $i%2==0 ? 'bg-warning':'';?> ">
             <div class="col-md-1">
                <?php echo $idPedido;?>
            </div>
            <div class="col-md-4">
                    <?php echo $nomEmpleado." ".$apEmpleado; ?>
            </div>
             <div class="col-md-2">
                <?php echo $fechaPedido;?>
            </div>
            <div class="col-md-2">
                <?php echo $cargosE;?>
            </div>
            <div class="col-md-2">
                <a href="listado_detalle_pedido.php?idPedido=<?php echo $idPedido;?>">detalle pedido</a>
            </div>
        </div>
    <?php
    $i++;
}
$sentencia->close();
$conexion->close();   
/* Al igual que el anterior código, hemos consultado la base de datos, recogido 
 * los datos pertinentes y mostrado en una tabla en bootstrap.  También tenemos
 * un enlace a una tercera página, enviando un parámetro.
 */
?>
        </div>
    </body>
</html>
