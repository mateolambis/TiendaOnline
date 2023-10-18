<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <header id="header">
        <h1>Administrador</h1>
    </header>
    <div class="contenedor">
        <form action="reglogin.php" method="post">
            <h1 class="animate_animated animate_backInLeft">Bienvenido Admin. Ingresa tu usuario y contraseña</h1>
            <div class="col-6">
            <i class="bi bi-person-circle"></i>
                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                <input type="number" required placeholder="ingrese su cedula" class="form-control" name="usuario">
            </div>
            <div class="col-6">
            <i class="bi bi-pass"></i>
                <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                <input type="password" required placeholder="ingrese su contraseña" class="form-control" name="contraseña">
            </div><br>
            <button type="submit" name="Enviar" class="btn btn-primary">Enviar</button>
        </form>
    </div>




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