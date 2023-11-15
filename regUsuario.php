<?php
if (isset($_POST['Enviar'])) {
include 'conexion.php';
$nombre_completo = $_POST['nombre'];
$tipo_cedula=$_POST['tCedula'];
$num_cedula =$_POST['cedula'];
$correo= $_POST['correo'];


$query="INSERT INTO
    cliente(nombre_completo, tipo_cedula, num_cedula, correo)
    VALUES('$nombre_completo', '$tipo_cedula', '$num_cedula', '$correo')";
$consulta=mysqli_query($conn, $query);

if($consulta){
    echo "Te has registrado exitosamente";
    echo "<a href='metodoPago.php'> Metodo de pago</a>";
}
else{
    echo " hay un error en la consulta";
}
}
?>