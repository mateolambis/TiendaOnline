<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .contenedor {
            width: 450px;
            background: #EDEFF0;
            padding: 30px;
            margin: auto;
            margin-top: 100px;
            border-radius: 10px;
            color: #959B9E;
        }
    </style>
</head>

<body>
<?php
    include("navbarAdmin.php")
        ?><br><br>
    <main>
        <div class="contenedor">
            <h1>restablecer Contraseña</h1>
            <form method="post" enctype="multipart/form-data" action="validarRecuerar.php">
                <div class="col-auto">
                <i class="bi bi-envelope"></i>
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" required class="form-control" id="productoAñadir" name="correo">
                </div><br>
                <button type="submit" onclick="javascript: return confirm('¿Deseas enviar tu contraseña a tu correo?')" name="restablecer" class="btn btn-primary">Restablecer</button> 
        </div>
        
        </form>
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