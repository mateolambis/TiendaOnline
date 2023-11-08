<?php
if (isset($_POST['Enviar'])) {

    include 'conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contraseña = $_POST['contraseña'];

    $query = "UPDATE administrador
            SET nombre='$nombre', correo='$correo', telefono='$telefono', 
            contraseña='$contraseña' where id='$id'";
    $consulta = mysqli_query($conn, $query);

    if ($consulta) {
        echo ("Registro actualizado");
        echo "<a href='mostrarUsuarios.php'>Volver</a>";
    } else {
        echo ("Hay un error en la Actualización");
    }
}
?>