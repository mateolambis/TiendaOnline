<?php
include('conexion.php');
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['correo']=$correo;

$consulta="SELECT * FROM administrador where correo='$correo' and contraseña='$contraseña'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:admin.php");

}else{
  echo " hay un error en la consulta";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>