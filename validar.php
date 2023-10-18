<?php
include('conexion.php');
$Num_cedula=$_POST['usuario'];
$Contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$Num_cedula;

$consulta="SELECT * FROM administrador where Num_cedula='$Num_cedula' and Contraseña='$Contraseña'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:admin.php");

}else{
  echo " hay un error en la consulta";
}
mysqli_free_result($resultado);
mysqli_close($conexion);