<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .contenedor{
        width: 500px;
        background: #EDEFF0;
        padding: 30px;
        margin: auto;
        margin-top: 100px;
        border-radius: 10px;
        color: #959B9E ;
      }
    </style>
</head>

<body>
    <?php
    include("navbar.php")
        ?><br>
    <h1 id="header">Datos del usuario</h1>
    <main>
        <div class="contenedor">
            <h1>registrar usuario</h1>
            <form method="post" enctype="multipart/form-data" action="regUsuario.php">
                <div class="col-auto">
                    <i class="bi bi-person"></i>
                    <label for="exampleInputEmail1" class="form-label">Nombre completo</label>
                    <input type="text" required class="form-control" id="productoAñadir" name="nomC">
                </div><br>
                <div class="col-auto">
                    <select class="form-select" required aria-label="Default select example" name="tipD">
                        <option selected>Tipo de documento</option>
                        <option value="Cedula">Cedula</option>
                        <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                </div><br>
                <div class="col-auto">
                    <i class="bi bi-123"></i>
                    <label for="exampleInputEmail1" class="form-label">Numero de cedula</label>
                    <input type="number" required class="form-control" id="descripcion" name="numC">
                </div><br>
                <div class="col-auto">
                    <i class="bi bi-chat-left-dots-fill"></i>
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="text" required class="form-control" id="imagenAñadir" name="corr">
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