<!--Página que nos muestra los clientes de una base de datos -->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>    
    <body>
        <div class="container">

<?php
/* este código nos conecta a la base de datos, busca los clientes y nos los
 * muestra como un listado.  También nos permite acceder al listado de pedidos
 * de cada cliente. */
include "conexion.php"; // incluimos la conexión.
$sql = <<< SQL
    SELECT idCliente, codCliente, nombreCli, direccion
        FROM cliente
        ORDER BY nombreCli    
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
$sentencia->bind_result($id, $cod, $nombre, $direccion); 
// guarda los resultados de la consulta en unas variables.
$i=1; // variable para control de líneas pares e impares en el bucle.
?>
            
            <div class="row bg-info">
                <div class="col-md-1">Código</div>
                <div class="col-md-4">Nombre</div>
                <div class="col-md-4">Dirección</div>
                <div class="col-md-1">Pedidos</div>
            </div>
<?php
while ($sentencia->fetch()){ // bucle mientras haya datos.
    //en $id, $cod, ... estan los valores de los campos
    ?>
        <!--Código html/bootstrap para clases línea.  Para controlar el color
        de la línea se inserta un código php que comprueba si la línea es par
        a la que le añade color-->
        <div class="row <?php echo $i%2==0 ? 'bg-warning':'';?> ">
             <div class="col-md-1">
                <?php echo $cod;?> <!--En cada campo utilizamos php para
                insertar la variable correspondiente -->
            </div>
            <div class="col-md-4">
                    <?php echo $nombre; ?>
            </div>
             <div class="col-md-4">
                <?php echo $direccion;?>
            </div>
            <div class="col-md-1">
                <a href="listado_pedidos.php?idCliente=<?php echo $id;?>">pedidos</a>
                <!--Este campo es especial, ya que creamos un enlace hacia 
                un archivo php, al que le pasamos un parámetro,una variable,
                incluido en un código php.  Este parámetro viaja a través del
                método $_GET(en la url)-->
            </div>
        </div>
    <?php
    $i++; // sumamos 1 a la variable de control de pares.
}
$sentencia->close(); // cerramos sentencia
$conexion->close();  // cerramos conexion
?>
        </div>
    </body>
</html>