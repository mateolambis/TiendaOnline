<?php
session_start();

if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}

include('conexion.php');
$correo = $_SESSION['correo'];

// Obtener datos del administrador desde la base de datos
$consulta = "SELECT * FROM administrador WHERE correo = ?";
$stmt = mysqli_prepare($conn, $consulta);
mysqli_stmt_bind_param($stmt, "s", $correo);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($resultado) == 1) {
    $administrador = mysqli_fetch_assoc($resultado);
} else {
    header("Location: login.php");
}

if (isset($_POST['btnActualizar'])) {
    // Validar y obtener los nuevos datos
    $nuevoNombre = htmlspecialchars($_POST['nuevoNombre']);
    $nuevoCorreo = htmlspecialchars($_POST['nuevoCorreo']);
    $nuevoTelefono = htmlspecialchars($_POST['nuevoTelefono']);

    // Actualizar la base de datos con los nuevos datos
    $actualizarConsulta = "UPDATE administrador SET nombre = ?, correo = ?, telefono = ? WHERE correo = ?";
    $stmtActualizar = mysqli_prepare($conn, $actualizarConsulta);
    mysqli_stmt_bind_param($stmtActualizar, "ssss", $nuevoNombre, $nuevoCorreo, $nuevoTelefono, $correo);
    mysqli_stmt_execute($stmtActualizar);

    // Actualizar la variable de sesión con el nuevo nombre
    $_SESSION['nombre'] = $nuevoNombre;

    // Redireccionar o mostrar un mensaje de éxito
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="perfilAdmin.css">
</head>

<body>
    <?php
    include("navbarAdmin.php")
    ?><br><br><br><br>
    <main>
        <div class="contenedor">

            <div class="profile-container">
                <h1>Perfil del Administrador</h1><br>

                <div class="row">
                    <div class="col-md-4 text-center">
                        <p class="welcome-message">Bienvenido, <?php echo $_SESSION['nombre']; ?></p>
                    </div>

                    <div class="col-md-8">
                        <!-- Formulario para actualizar datos del perfil -->
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="nuevoNombre">Nombre:</label>
                                <input type="text" class="form-control" name="nuevoNombre" value="<?php echo $administrador['nombre']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="nuevaCorreo">Correo:</label>
                                <input type="email" class="form-control" name="nuevoCorreo" value="<?php echo $administrador['correo']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="nuevoTelefono">Telefono:</label>
                                <input type="number" class="form-control" name="nuevoTelefono" value="<?php echo $administrador['telefono']; ?>" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="btnActualizar" value="Actualizar">
                            </div>
                        </form>
                        </form>
                    </div>
                </div>
            </div>

    <!-- Agrega enlaces a los archivos JavaScript y Bootstrap aquí -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>