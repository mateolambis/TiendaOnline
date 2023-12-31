<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    .navbar {
      display: flex;
      justify-content: center;
      gap: 15%;
      align-items: center;
      width: 100%;
      height: 70px;
      top: 0;
      position: absolute;
      padding: 1rem 7%;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .navbar-brand{
      font-size: 2rem;
    }

    .navbar-brand:hover{
      border-bottom: 4px solid #000;
      transition: 0.4s;
    }

    .container-fluid ul{
      font-size: 1.5rem;
      align-items: center;
    }

    .container-fluid ul li a{
      padding: 5px 12px;
      letter-spacing: 2px;
      font-size: 18px;
    }

    .container-fluid ul li a:hover{
      border-bottom: 4px solid #000;
      transition: 0.4s;
    }
    .custom-icon {
      font-size: 35px;
      color: black;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand">WILYMAT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="INDEX.php">Inicio</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Vender</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="conocenos.php">Conocenos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="mostrarUsuarios.php">mostrar</a>
          </li>
        </ul>
        <a href="perfilAdmin.php" class="custom-icon"><i class="bi bi-person-circle">Tu Perfil</i></a>
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