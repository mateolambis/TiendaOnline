<?php
include('conexion.php');
$administrador=$_POST['administrador'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['administrador']=$administrador;

$consulta="SELECT*FROM administrador where administrador='$administrador' and contraseña='$contraseña'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:indexLogin.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);