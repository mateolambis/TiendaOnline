<?php
if (isset($_POST['Enviar'])) {

    include 'conexion.php';
    $id=$_POST['id'];
    $Nombre_producto = $_POST['nomP'];
    $Precio = $_POST['valP'];
    $Descripcion=$_POST['desc'];
    $Imagen_producto= addslashes(file_get_contents($_FILES['urlI']['tmp_name']));
    
    $query = "UPDATE Productos
            SET Nombre_producto='$Nombre_producto', Precio='$Precio', Descripcion='$Descripcion', 
            Imagen_producto='$Imagen_producto' where idProductos='$id'";
    $consulta = mysqli_query($conn, $query);

    if ($consulta) {
        echo ("Registro actualizado");
        echo "<a href='admin.php'>Volver</a>";
    } else {
        echo ("Hay un error en la Actualización");
    }
}
?>