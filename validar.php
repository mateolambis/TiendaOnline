<?php
if (isset($_POST['btn'])) {
  include 'conexion.php';
  $correo = $_POST['correo'];
  $contraseña = $_POST['contraseña'];

  $consulta = "SELECT * FROM administrador where correo='$correo' and contraseña='$contraseña'";
  $resultado = mysqli_query($conn, $consulta);

  if (mysqli_num_rows($resultado) == 1) {
    $v = mysqli_fetch_array($resultado);
    session_start();

    $_SESSION['nombre'] = $v[1];
    $_SESSION['correo'] = $v[2];
    $_SESSION['rolUsuario'] = $v[5];
    if ($v['rolUsuario'] == 1) {
      echo "<script>alert('Bienvenido Administrador');    
                  window.location.href='admin.php'</script>";
    } else if ($v['rolUsuario'] == 2) {
      echo "<script>alert('No tienes acceso a la zona de administradores');
                  window.location.href='usuario/INDEX.php';</script>";
    }
  } else {
    echo "<script>alert('Usuario o contraseña incorrectos');    
                  window.location.href='login.php'</script>";
  }
}
?>