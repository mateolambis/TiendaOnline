<?php
if (isset($_POST['Enviar'])) {
include 'conexion.php';
$Nombre_producto=$_POST['nomP'];
$Precio=$_POST['valP'];
$Stock_disponible=$_POST['exis'];
$Imagen_producto=$_POST['urlI'];


$query="INSERT INTO
    Productos(Nombre_producto, Precio, Stock_disponible, Imagen_producto)
    VALUES('$Nombre_producto', '$Precio', '$Stock_disponible', '$Imagen_producto')";
$consulta=mysqli_query($conn, $query);

if($consulta){
    echo "se inserto el registro a la base de datos correspondiente";
    echo "<a href='admin.php'> volver</a>";
}
else{
    echo " hay un error en la consulta";
}
}
?>