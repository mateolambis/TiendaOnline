<?php
if (isset($_POST['Enviar'])) {
include 'conexion.php';
$nombre = $_POST['nombre'];
$correo= $_POST['correo'];
$telefono=$_POST['telefono'];
$contraseña=$_POST['contraseña'];
$rolUsuario = 1;

$query="INSERT INTO
    administrador(nombre, correo, telefono, contraseña, rolUsuario)
    VALUES('$nombre', '$correo', '$telefono', '$contraseña', '$rolUsuario')";
$consulta=mysqli_query($conn, $query);

if($consulta){
    echo "Te has registrado exitosamente";
    echo "<a href='login.php'>Iniciar Sesión</a>";
}
else{
    echo " hay un error en la consulta";
}
}
?>