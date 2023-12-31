<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <style>
        .button-container{
            display: flex;
            justify-content: space-between;
        }
        .button-container a{
            text-align: center;
        }
    </style>
</head>

<body>


    <div class="Caja">

        <img class="login-box" src="imagenes/login/fondolegal.jpg" alt="">
        <form action="validar.php" method="post">
            <h1  class="animate_animated animate_backInLeft">Iniciar sesión</h1><br>
            
            <p class="blanco">Correo <input type="email" required placeholder="ingrese su Correo" name="correo"></p>
            <p class="blanco">Contraseña <input type="password" required placeholder="ingrese su contraseña" name="contraseña"></p>
            <input type="hidden" name="accion" value="acceso_user">
            <input style="text-align: center;" class="btn btn-success" name="btn" type="submit" value="Ingresar"><br><br>
            <div class="button-container"><label style="text-align: left;">Recuperar Contraseña<br><a href="recuperarContraseña.php" method="post">Recuperar</a></label>
            <label style="text-align: right;">¿No tienes cuenta?<br><a href="inslogin.php" method="post">Registrate</a></label></div>
            
            

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>