
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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabeceraLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
    <img src="imagenes/login/fondolegal.jpg" alt="">
   <form action="validar.php" method="post">
   <h1 class="animate__animated animate__backInLeft">Bienvenido admin</h1>
   <p>Administrador <input type="text" placeholder="ingrese su nombre" name="administrador"></p>
   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
   <input type="submit" value="Ingresar">
   
   </form> 
</body>
</html>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Iniciar Sesión</h3>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>