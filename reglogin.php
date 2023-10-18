<?php
if (isset($_POST['Enviar'])) {
include 'conexion.php';
$Num_cedula=$_POST['usuario'];
$Contraseña=$_POST['contraseña'];

$query="INSERT INTO
    administrador(Num_cedula,Contraseña)
    VALUES('$Num_cedula','$Contraseña')";
$consulta=mysqli_query($conn, $query);

if($consulta){
    echo "se inserto el registro a la base de datos correspondiente";
    echo "<a href='login.php'> volver</a>";
}
else{
    echo " hay un error en la consulta";
}
}
?>