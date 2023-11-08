<?php
if (isset($_POST['Enviar'])) {
include 'conexion.php';
$nombre = $_POST['nombre'];
$correo= $_POST['correo'];
$telefono=$_POST['telefono'];
$contraseña=$_POST['contraseña'];


$query="INSERT INTO
    administrador(nombre, correo, telefono, contraseña)
    VALUES('$nombre', '$correo', '$telefono', '$contraseña')";
$consulta=mysqli_query($conn, $query);

if($consulta){
    echo "se inserto el registro a la base de datos correspondiente";
    echo "<a href='mostrarUsuarios.php'> volver</a>";
}
else{
    echo " hay un error en la consulta";
}
}
?>