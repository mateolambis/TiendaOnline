<?php
include 'conexion.php';
//en este codigo apartir de la llave primaria , trayendo los registros desde la base de datos
$id = $_GET['id'];
//creo la consulta
$query = "SELECT * FROM administrador where id=$id";
//ejecuto la consulta con la funcion
$consulta = mysqli_query($conn, $query);
//convierto el resultado en vector para acceder
//facilmente a los datos
$vec = mysqli_fetch_array($consulta);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <style>
      img{
        height: 20px;
      }
    </style>
</head>

<body>

  <div class="contenedor">
  <div class="Actualizar">
    <h1>Actualizar Usuario</h1>
    <form method="post" enctype="multipart/form-data" action="updateAdministrador.php">
      <div class="col-auto">
        <input class="table_item" required type="number" readonly value="<?php echo $vec[0]; ?>" name="id"><br>
        <i class="bi bi-geo-alt-fill"></i>
        <label for="exampleInputEmail1" class="form-label">nombre</label>
        <input type="text" required class="form-control" id="nombreP" aria-describedby="origen" value="<?php echo $vec[1] ?>"
          name="nombre">
      </div>
      <div class="col-auto">
        <i class="bi bi-geo-alt-fill"></i>
        <label for="exampleInputEmail1" class="form-label">correo</label>
        <input type="email" required class="form-control" id="pre" aria-describedby="destino" value="<?php echo $vec[2] ?>"
          name="correo">
      </div>
      <div class="col-auto">
        <i class="bi bi-calendar"></i>
        <label for="exampleInputEmail1" class="form-label">Telefono</label>
        <input type="tel" required class="form-control" id="existe" aria-describedby="Salida" value="<?php echo $vec[3] ?>"
          name="telefono">
      </div>
      <div class="col-auto">
        <i class="bi bi-calendar"></i>
        <label for="exampleInputEmail1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="imgs" aria-describedby="image"   value="<?php echo $vec[4] ?>" 
        name="contraseña">
      </div><br>


      <button type="submit" name="Enviar" class="btn btn-primary">Actualizar</button>
    </form>
    </div>
  </div>
  </nav>
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