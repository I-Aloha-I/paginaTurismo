<?php
    session_start();
    $id = $_SESSION['id'];
    $usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOSOTROS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="Nosotros.css">
</head>
<body>

    <!--Barra de Navegación-->
    <nav class="navbar navbar-expand-lg bg-dark">
        <!--CONTAINER NAV-->
        <div class="container-fluid">
          <a class="navbar-brand" style="color: #ef8354; font-weight: bold;" href="#">CHILE DESTINATIONS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--lista-->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                    if(isset($usuario)){
                ?>
                        <!--Home-->
                        <li class="nav-item">
                            <a class="nav-link active text-white" style="margin-left: 740px" href="index.php">HOME</a>
                        </li>
                        <!--Nosotros-->
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="nosotros.php">NOSOTROS</a>
                        </li>
                        <!--Logout-->
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="logout.php">CERRAR SESIÓN</a>
                        </li>
                        <!--Nombre usuario-->
                        <li class="nav-item text-success">
                            <!--Dropdown para cambiar contraseña-->
                            <div class="dropdown">
                                <a class="btn btn-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sesión Actual: <?php echo $usuario; ?>
                                </a>
                                <ul class="dropdown-menu bg-success">
                                    <li><a class="dropdown-item" style="color:white" href="cambiarPass.php?id=<?php echo $id ?>">Cambiar Contraseña</a></li>
                                </ul>
                            </div>
                        </li>
                <?php
                    }
                    else{
                ?>
                        <!--Home-->
                        <li class="nav-item">
                            <a class="nav-link active text-white" style="margin-left: 1000px" href="index.php">HOME</a>
                        </li>
                        <!--Nosotros-->
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="nosotros.php">NOSOTROS</a>
                        </li>
                        <!--Login-->
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="login.php">LOGIN</a>
                        </li>
                <?php
                    }
                ?>
            </ul>
          </div>
        </div>
    </nav>

    <!--CONTAINER BANNER-->
    <div class="container-fluid bg-dark">
        <!--Banner-->
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/banner-Santiago.jpg" class="d-block w-100" alt="Banner 1">
                  <div class="carousel-caption d-none d-md-block">
                    <p class="titulo-slider">Viaja Por Todo Chile</p>
                    <p class="subtitulo-slider">Personaliza tu paquete turístico a tu gusto</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/torres-banner.png" class="d-block w-100" alt="Banner 2">
                  <div class="carousel-caption d-none d-md-block">
                    <p class="titulo-slider">Viaja Por Todo Chile</p>
                    <p class="subtitulo-slider">Si aún no defines tu destino, quizas te interese nuestra sección de ofertas.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/Desierto-Florido-.jpg" class="d-block w-100" alt="Banner 3">
                  <div class="carousel-caption d-none d-md-block">
                    <p class="titulo-slider">Viaja Por Todo Chile</p>
                    <p class="subtitulo-slider">Selecciona un destino y mira las diferentes opciones de viaje</p>
                  </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <!--CONTAINER CONTENIDO-->
    <div class="container-fluid container_contenido">
        <!--FIla 1-->
        <div class="row" style="padding-top: 50px; padding-bottom: 50px; background-color: #93b49e;">
            <div class="col-4 offset-2" style="padding-right: 50px">
                <img src="img/Parinacota-y-Chungara.jpg" style="border-radius: 50%;" class="img-fluid img_izq" alt="Imagen">
            </div>
            <div class="col-4 text-white d-flex align-items-center" style="padding-left: 50px">
                <p class="parrafo_contenido parrafo_contenido_1" style="font-style: italic; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Sabemos que puede ser tedioso elegir un destino que visitar, luego buscar alojamiento, y además un vuelo que te lleve al lugar que tanto deseas.</p>
            </div>
        </div>

        <!--FIla 2-->
        <div class="row" style="padding-top: 50px; padding-bottom: 50px; background-color: #d5a48f;">
            <div class="col-4 offset-2 text-white d-flex align-items-center" style="padding-right: 50px">
                <p class="parrafo_contenido parrafo_contenido_2" style="font-style: italic; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Es por ello, que se crea CHILE DESTINATIONS, para ayudarte a elegir las mejores opciones de viaje, para que tengas una excelente experiencia visitando los diversos paisajes que pueda ofrecer nuestro país.</p>
            </div>
            <div class="col-4" style="padding-left: 50px">
                <img src="img/Torres-del-Paine.jpg" style="border-radius: 50%;" class="img-fluid img_der" alt="Imagen">
            </div>
        </div>

        <!--FIla 3-->
        <div class="row" style="background-color: #93b49e; height: 400px; padding-top: 50px;">
            <div class="col-4 offset-2" style="padding-right: 50px">
                <img src="img/valle-de-la-luna.jpg" style="border-radius: 50%;" class="img-fluid img_izq" alt="Imagen">
            </div>
            <div class="col-4" style="padding-top: 50px; padding-left: 50px">
                <div class="accordion accordion-flush" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Misión
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-dark">
                            Chile Destinations es un empresa de paquetes turísticos que ayuda a sus clientes a encontrar rapidamente vuelos y alojamientos a lo largo del país y de manera sencilla.
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Visión
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-dark">
                            Ser la empresa lider en turísmo en Chile y expandirse a lo largo del mundo para brindar grandes experiencias a las personas.
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <!------------------CONTAINER FOOTER----------------------->
    <div class="container-fluid">
        <div class="row p-5 pt-5 pb-5 bg-dark text-white">
            <!--Columna 1-->
            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h3 titulo_footer">Chile Destinations</p>
            </div>
            <!--Columna 2-->
            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h5 mb-3 titulo_footer">Contacto</p>
                <div class="mb-2 text-secondary">nicolas.cortes.20@alumnos.uda.cl</div>
                <div class="mb-2 text-secondary">9-1111-2222</div>
            </div>
            <!--Columna 3-->
            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h5 mb-3 titulo_footer">Links</p>
                <div><a class="text-secondary text-decoration-none" href="#">Política de Privacidad</a></div>
                <div><a class="text-secondary text-decoration-none" href="#">Política de Cookies</a></div>
            </div>
            <!--Columna 4-->
            <div class="col-xs-12 col-md-6 col-lg-3 icons">
                <div>
                    <!--titulo-->
                    <p class="h5 mb-3 titulo_footer">Siguenos</p>
                    <!--facebook-->
                    <a href="#" class="icon icon--facebook">
                        <img src="icon/facebook50.png" alt="png facebook" style="width: 44px; height: 44px;">
                        <i class="ri-facebook-line"></i>
                    </a>
                    <!--twitter-->
                    <a href="#" class="icon icon--twitter">
                        <img src="icon/twitter50.png" alt="png twitter" style="width: 40px; height: 40px;">
                        <i class="ri-twitter-line"></i>
                    </a>
                    <!--instagram-->
                    <a href="#" class="icon icon--instagram">
                        <img src="icon/instagram.png" alt="png instagram" style="width: 44px; height: 44px;">
                        <i class="ri-instagram-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>