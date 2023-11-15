<?php
if (isset($_POST['restablecer'])) {
    include 'conexion.php';
    $correo = $_POST['correo'];


    $consulta = "SELECT * FROM administrador where correo='$correo'";
    $resultado = mysqli_query($conn, $consulta);

    if (mysqli_num_rows($resultado) == 1) {
        $v = mysqli_fetch_array($resultado);
        $enviarpass = $v['contraseña'];

        $paracorreo = $correo;
        $titulo = "Recuperar Contraseña";
        $mensaje = "Tu contraseña es: ". $enviarpass;
        $tuCorreo = "From: xxxx@gmail.com";

        if(mail($paracorreo, $titulo, $mensaje, $tuCorreo)){
            echo "<script> alert('Contraseña enviada'); window.location= 'login.php' </script>";
        }else{
            echo "<script> alert('Error'); window.location= 'login.php' </script>";
        }
    }else{
        echo "<script> alert('Este correo no existe'); window.location= 'login.php' </script>";
    }
}
?>