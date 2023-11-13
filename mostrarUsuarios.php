<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php
    include("navbarAdmin.php");
    ?><br><br><BR></BR>
    <h1>Lista Usuarios</h1>
    <form class="d-flex" role="search">
        <input name="Buscar" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button name="btn" class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
    <table class="table">
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre del Usuario</th>
            <th scope="col">Correo Electronico</th>
            <th scope="col">Telefono</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Accion</th>

        </tr>
        <?php
        if (isset($_GET['btn'])) {

            $search = $_GET['Buscar'];
            $Buscar = "%$search%";
            include("Conexion.php");
            $query = "SELECT * FROM administrador WHERE id LIKE '$Buscar' OR
            nombre LIKE '$Buscar' OR correo LIKE '$Buscar' OR telefono LIKE '$Buscar' OR contraseña LIKE '$Buscar'";

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
                            <?php echo $vec[4]; ?>
                        </td>
                        <td>
                            <a href='frmactAdministrador.php?id=<?php echo $vec[0] ?>'>
                                <i class="bi bi-pencil-square"></i></a>
                            <a href='eliminarAdministrador.php?id=<?php echo $vec[0] ?>'><i class="bi bi-trash3"></i></a>
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