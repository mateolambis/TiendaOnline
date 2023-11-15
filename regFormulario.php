<?php
if (isset($_POST['Enviar'])) {
include 'conexion.php';
$nombre = $_POST['nombre'];
$correo= $_POST['correo'];
$telefono=$_POST['telefono'];
$rolUsuario = 2;

$query="INSERT INTO
    administrador(nombre, correo, telefono, rolUsuario)
    VALUES('$nombre', '$correo', '$telefono', '$rolUsuario')";
$consulta=mysqli_query($conn, $query);

if($consulta){
    echo "Te has registrado exitosamente";
    echo "<a href='INDEX.php'> Inicio</a>";
}
else{
    echo " hay un error en la consulta";
}
}
?>