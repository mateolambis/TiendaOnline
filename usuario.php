<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
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
    include("navbarClientes.php");
    ?>
    <div class="contenedor">
        <form action="regUsuario.php" method="post">
            <h1 class="animate_animated animate_backInLeft">Registrar Usuario</h1>
            <div class="col-auto">
            <i class="bi bi-person-circle"></i>
                <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
                <input type="text" required placeholder="ingrese su Nombre" class="form-control" name="nombre">
            </div><br>
            <div class="col-auto">
              <select class="form-select" aria-label="Default select example" name="tCedula">
                <option selected>Tipo de Cedula</option>
                <option value="Cedula">Cedula</option>
                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                <option value="Pasaporte">Pasaporte</option>
              </select>
            <div class="col-auto">
            <i class="bi bi-phone-fill"></i>
                <label for="exampleInputEmail1" class="form-label">Numero de cedula</label>
                <input type="number" required placeholder="ingrese su Numero de celular" class="form-control" name="cedula">
            </div>
            <div class="col-auto">
            <i class="bi bi-envelope-fill"></i>
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" required placeholder="ingrese su Correo" class="form-control" name="correo">
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