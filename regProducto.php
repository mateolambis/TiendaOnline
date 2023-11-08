<?php
if (isset($_POST['Enviar'])) {
include 'conexion.php';
$Nombre_producto=$_POST['nomP'];
$precio=$_POST['valP'];
$Descripcion=$_POST['desc'];
$Imagen_producto= addslashes(file_get_contents($_FILES['urlI']['tmp_name']));


$query="INSERT INTO
    Productos(Nombre_producto, precio, Descripcion, Imagen_producto)
    VALUES('$Nombre_producto', '$precio', '$Descripcion', '$Imagen_producto')";
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