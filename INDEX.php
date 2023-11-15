<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="app.js" async></script>
    <title>WILYMAT</title>
</head>

<body>
    <?php
    include("navbarClientes.php")
        ?><br><br><br><br>

    <section class="contenedor">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <!-- Contenedor de elementos -->
            <div class="contenedor-items">
                <?php
                include 'conexion.php';
                $q = "SELECT * FROM productos";
                $c = mysqli_query($conn, $q);

                while ($a = mysqli_fetch_array($c)) {

                    ?>
                    <div class="item">
                        <span class="titulo-item">
                            <?php echo $a[1] ?>
                        </span>
                        <img src="data:image/*;base64, <?php echo base64_encode($a[4]) ?>" alt="" class="img-item">
                        <li><br>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-muted fa fa-star"></i>
                            <i class="text-muted fa fa-star"></i>
                        </li>
                        <span class="precio-item">
                            <?php echo $a[2] ?>
                        </span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                <?php } ?>

            </div>
            <!-- Carrito de Compras -->
            <div class="carrito" id="carrito">
                <div class="header-carrito">
                    <h2>Tu Carrito</h2>
                </div>

                <div class="carrito-items">
                    <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
                </div>
                <div class="carrito-total">
                    <div class="fila">
                        <strong>Tu Total</strong>
                        <span class="carrito-precio-total">
                            $120.000,00
                        </span>
                    </div>
                    <a href="usuario.php" class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </a>
                </div>
            </div>
        </div>
    </section><br><br><br><br>
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Conéctate con nosotros en las redes sociales:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-google"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>WILYMAT
                        </h6>
                        <p>
                            En WILYMAT, nos enorgullece ofrecerte una experiencia de compra única y excepcional.
                            Somos más que una simple tienda de productos, somos un destino donde tus necesidades y
                            deseos se
                            encuentran con la calidad y la excelencia en cada paso del camino.
                        </p>
                        <p>
                            Ofrecemos una amplia gama de productos de alta calidad, cuidadosamente seleccionados para
                            satisfacer
                            tus necesidades y deseos. Nuestros productos son todos provenientes de las mejores marcas y
                            fabricantes.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Servicios
                        </h6>
                        <p>
                            <a style="text-decoration: none;" href="../login.php" class="text-reset">Ventas</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Soporte tecnico</h6>
                        <p>
                            <i class="bi bi-house-door-fill"></i>
                            </i>El santuario, Antioquia
                        </p>
                        <p>
                            <i class="bi bi-envelope-fill"></i>
                            mateolambisnacional@gmail.com
                        </p>
                        <p>
                            <i class="bi bi-telephone-fill"></i>
                            </i>546-24-03
                        </p>
                        <p>
                            <i class="bi bi-phone-fill"></i>
                            </i>+57 310-467-84-71
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>

</html>