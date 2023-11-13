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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="perfilAdmin.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php
    include("navbarAdmin.php")
        ?><br>
    <h1 id="header">Bienvenido Administrador</h1>
    <main>
        <div class="contenedor">
            <div class="profile-container">
                <h1>Perfil del Administrador</h1>

                <div class="row">
                    <div class="col-md-4 text-center">
                        <p class="welcome-message">Bienvenido,
                            <?php echo $_SESSION['nombre']; ?>
                        </p>
                    </div>

                    <div class="col-md-8">
                        <!-- Formulario para ver datos del perfil -->
                        <form method="post">
                            <div class="form-group">
                                <label for="nuevoNombre">Nombre:</label>
                                <input type="text" class="form-control" name="nuevoNombre"
                                    value="<?php echo $_SESSION['nombre']; ?>" readonly required>
                            </div>

                            <div class="form-group">
                                <label for="nuevaCorreo">Correo:</label>
                                <input type="email" class="form-control" name="nuevoCorreo"
                                    value="<?php echo $_SESSION['correo']; ?>" disabled required>
                            </div>

                            <div class="form-group">
                                <label for="nuevoTelefono">Telefono:</label>
                                <input type="number" class="form-control" name="nuevoTelefono"
                                    value="<?php echo $_SESSION['telefono']; ?>" readonly required>
                            </div>
                            <div class="form-group">
                                <a href="perfilAdmin.php" class="btn btn-primary">Actualizar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="añadir">
                <h1>Añadir Producto</h1>
                <form method="post" enctype="multipart/form-data" action="regProducto.php">
                    <div class="col-auto">
                        <i class="bi bi-cart-fill"></i>
                        <label for="exampleInputEmail1" class="form-label">Nombre del Producto</label>
                        <input type="text" required class="form-control" id="productoAñadir" name="nomP">
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-cash-coin"></i>
                        <label for="exampleInputEmail1" class="form-label">Valor del Producto</label>
                        <input type="number" required class="form-control" id="valorAñadir" name="valP">
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-journal-text"></i>
                        <label for="exampleInputEmail1" class="form-label">Vendedor</label>
                        <input type="text" required class="form-control" id="descripcion" name="desc">
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-image"></i>
                        <label for="exampleInputEmail1" class="form-label">Url Imagen</label>
                        <input type="file" required class="form-control" id="imagenAñadir" name="urlI">
                    </div><br>
                    <button type="submit" name="Enviar" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        </div>
        <h1>Productos</h1>
        <form class="d-flex" role="search">
            <input name="Buscar" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button name="btn" class="btn btn-outline-success" type="submit">Buscar</button>
        </form>

        <table class="table">
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre del Producto</th>
                <th scope="col">Valor del Producto</th>
                <th scope="col">Vendedor</th>
                <th scope="col">Imagen</th>
                <th scope="col">Accion</th>

            </tr>
            <?php
            if (isset($_GET['btn'])) {

                $search = $_GET['Buscar'];
                $Buscar = "%$search%";
                include("Conexion.php");
                $query = "SELECT * FROM Productos WHERE idProductos LIKE '$Buscar' or
                Nombre_producto LIKE '$Buscar' or Precio LIKE '$Buscar' or descripcion LIKE '$Buscar' or Imagen_producto";
                $cons = mysqli_query($conn, $query);

                if (mysqli_num_rows($cons) !== 0) {
                    while ($vec = mysqli_fetch_array($cons)) { ?>
                        <tr>
                            <td>
                                <?php echo $vec[0]; ?>
                            </td>
                            <td>
                                <?php echo $vec[1]; ?>
                            </td>
                            <td>
                                <?php echo $vec[2]; ?>
                            </td>
                            <td>
                                <?php echo $vec[3]; ?>
                            </td>
                            <td>
                                <img style="width: 200px; height: auto"
                                    src="data:image/*;base64, <?php echo base64_encode($vec[4]) ?>" />
                            </td>
                            <td>
                                <a href='frmactProducto.php?id=<?php echo $vec[0] ?>'>
                                    <i class="bi bi-pencil-square"></i></a>
                                <a href='eliminarProducto.php?id=<?php echo $vec[0] ?>'><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php }
                } else {
                    echo "No se encontraron datos para esa busqueda";
                }
            } else {
                echo "Escribe un indicio de busqueda";
            } ?>
        </table>
    </main>
    <script src="confirmacionProducto.js"></script>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>

</html>