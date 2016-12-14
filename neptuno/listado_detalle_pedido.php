<!--Conexión a la base de datos para mostrar los detalle de pedido -->
<html>
    <head>
        <title>Listado de detalles de pedido de clientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
<?php
/* Identica a la anterior, conectamos a la base de datos, recogemos en una
variable el parámetro, creamos una sentencia sql con variable, creamos el objeto
consulta, consultamos utilizando el parámetro recibido, y mostramos los datos
 en líneas de colores alternos.*/
include "conexion.php";
$idPedido = $_GET['idPedido'];
$sql = <<< SQL
    select p.nombreProd as 'Nombre de producto', cantidad as 'Cantidad',
        d.precioE as 'Precio en Euros'
        from detalle_pedido d, producto p
        where p.idProducto = d.idProducto and
        d.idPedido=?;
SQL;
//echo $sql;
//$sentencia = new mysqli_stmt(); //es opcional
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("i", $idPedido);
if (!$sentencia){
    die("Error al preparar: ");
}
//ya está preparada
$sentencia->execute();
if ($sentencia->errno){
    die("Error al ejecutar: ".$sentencia->error);
}
//ejecutada con éxito
$sentencia->bind_result($nombreProd, $cantidad, $precioE);
$i=1;
$acumula=0;
?>
            <div class="row bg-info">
                <div class="col-md-4 h4">Nombre de Producto</div>
                <div class="col-md-2 h4">Cantidad</div>
                <div class="col-md-2 h4">Precio en euros</div>
                <div class="col-md-2 h4">Total</div>
            </div>            
            
    
<?php
while ($sentencia->fetch()){
    //en $id, $cod, ... estan los valores de los campos
    ?>
        <div class="row <?php echo $i%2==0 ? 'bg-warning':'';?> ">
             <div class="col-md-4">
                <?php echo $nombreProd;?>
            </div>
            <div class="col-md-2">
                    <?php echo $cantidad; ?>
            </div>
             <div class="col-md-2">
                <?php echo $precioE;?>
            </div>
            <div class="col-md-2">
                <?php echo $precioE*$cantidad;?>
            </div>
        </div>
    <?php
    $acumula=$acumula+($precioE*$cantidad);            
    $i++;
}

$sentencia->close();
$conexion->close();   
?>
            
        </div>
        <div class="container">
            <div class="row bg-success">
                <b>Total <?php echo $acumula; ?> euros</b>
            </div>
        </div>
    </body>
</html>

