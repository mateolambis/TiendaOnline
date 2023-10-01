<?php
if (isset($_POST['login'])) {
    include 'conexion.php';
    $doc = $_POST['doc'];
    $pasw = $_POST['pasw'];
$query= "SELECT * FROM administrador
         WHERE administrador= $id and ";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">

</head>

<body>

        <form action="validar.php" method="post">
            <h1> Bienvenido Admin. Ingresa tu usuario y contraseña</h1>
            <p>usuario <input type="text" placeholder="Ingrese su usuario" name="usuario" </p>
            <p>contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>

            <input type="submit" value="Ingresar">

        </form>

    <script src="login.js"></script>
</body>

</html>