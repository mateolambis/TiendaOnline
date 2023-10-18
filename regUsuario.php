<?php
if (isset($_POST['Enviar'])) {
include 'conexion.php';
$nombre_completo=$_POST['nomC'];
$tipo_cedula=$_POST['tipD'];
$num_cedula=$_POST['numC'];
$correo=$_POST['corr'];



$query="INSERT INTO
    cliente(nombre_completo, tipo_cedula, num_cedula, correo)
    VALUES('$nombre_completo', '$tipo_cedula', '$num_cedula', '$correo')";
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