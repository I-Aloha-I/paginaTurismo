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
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <!---------------------------------Barra de Navegación------------------------------------->
    <nav class="navbar navbar-expand-lg bg-dark">
        <!--CONTAINER NAV-->
        <div class="container-fluid">
          <a class="navbar-brand" style="color: #ef8354; font-weight: bold;" href="">CHILE DESTINATIONS</a>
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
            <!--<form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>-->
          </div>
        </div>
    </nav>
    
    <!------------------------------------CONTAINER BANNER----------------------------------------------->
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
    
    <!------------------------------CONTAINER CONTENIDO-------------------------------->
    <div class="container-fluid text-center">

        <!-- ROW 1 - CAROUSEL y TEXTO-->
        <div class="row row_carousel_texto">
            <!--Columna carousel-->
            <div class="col-4 offset-1">
                <div id="carouselSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/valle-de-la-luna.jpg" class="d-block w-100 img_carousel_contenido" alt="valle de la luna">
                      </div>
                      <div class="carousel-item">
                        <img src="img/Torres-del-Paine.jpg" class="d-block w-100 img_carousel_contenido" alt="torres del paine">
                      </div>
                      <div class="carousel-item">
                        <img src="img/Parinacota-y-Chungara.jpg" class="d-block w-100 img_carousel_contenido" alt="Parinacota y Chungara">
                      </div>
                    </div>
                  </div>
            </div>
            <!--Columna texto-->
            <div class="col-6" style="margin-left: 50px;">
                <p class="parrafo parrafo_1" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                    <br><br>
                    Desde el extremo norte con el desierto 
                    más árido del mundo, hasta el sur austral 
                    con hielos eternos y cascadas invertidas, 
                    Chile es una invitación difícil de rechazar. 
                    Conoce el turismo en Chile, y asómbrate con las 
                    experiencias en el extremo sur del mundo.
                </p><hr>
                <p class="parrafo parrafo_2" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                    Con Chile Destinations puedes conseguir los 
                    mejores precios para viajar por nuestro país, 
                    gracias a los paquetes turísticos que ofrecemos.
                </p>
            </div>
        </div>

        <!-- ROW 2 - FIGURES/OFFCANVA/CARDS-->
        <div class="row row_cards_figures_offcanva">

            <!--Col FIGURES/OFFCANVA-->
            <div class="col-4 offset-1" style="margin-right: 60px;">
                <!--Row figures-->
                <div class="row">
                    <!--Col figures 1 y 2-->
                    <div class="col-6">
                        <figure class="figure figure_1">
                            <img src="img/Desierto-Florido-.jpg" class="figure-img rounded" alt="rapa nui">
                            <figcaption class="figure-caption">Desierto Florido</figcaption>
                        </figure>
                        <figure class="figure figure_2">
                            <img src="img/valle-de-la-luna.jpg" class="figure-img rounded" alt="valle de la luna">
                            <figcaption class="figure-caption">Valle de la Luna</figcaption>
                        </figure>
                    </div>
                    <!--Col figures 3 y 4-->
                    <div class="col-6">
                        <figure class="figure figure_3">
                            <img src="img/Torres-del-Paine.jpg" class="figure-img rounded" alt="torres del paine">
                            <figcaption class="figure-caption">Torres del Paine</figcaption>
                        </figure>
                        <figure class="figure figure_4">
                            <img src="img/Parinacota-y-Chungara.jpg" class="figure-img rounded" alt="parinacota y chungara">
                            <figcaption class="figure-caption"> Parinacota y Chungara</figcaption>
                        </figure>
                    </div>
                </div>
                <!--Row offcanva-->
                <div class="row" style="margin-top: 30px;">
                    <!--Col offcanva-->
                    <div class="col">
                        <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">¡Obten más información aquí!</button>
                        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                            <div class="offcanvas-header bg-dark">
                                <h5 class="offcanvas-title text-white" id="offcanvasWithBothOptionsLabel">Chile Destinations</h5>
                                <button type="button" class="btn-close bg-danger" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <!--cuerpo de offcanva-->
                            <div class="offcanvas-body" style="background-color: #93b49e;">
                                <br><p style="color: rgb(24, 24, 24); background-color: #d5a48f; border-radius: 10px; font-size: 20px; font-weight: 600; font-family: cursive;">5 Lugares hermosos que visitar en Chile</p><br>
                                <iframe width="100%" height="190px" src="https://www.youtube.com/embed/6kck9nJaejc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <br><br><br><hr><br><br>
                                <p style="color: rgb(24, 24, 24); background-color: #d5a48f; border-radius: 10px; font-size: 20px; font-weight: 600; font-family: cursive;"> Otros 5 Lugares hermosos que visitar en Chile</p><br>
                                <iframe width="100%" height="190px" src="https://www.youtube.com/embed/zG-yr0xETgQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Col cards-->
            <div class="col-6">
                <!--Row cards-->
                <div class="row">
                    <!--Col card 1-->
                    <div class="col-6">
                        <div class="card border-success border border-2" style="width: 100%;">
                            <img src="img/isla-grande-de-chiloe.jpg" class="card-img-top" alt="Chiloe">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: cursive;">Isla Grande de Chiloé</h5><hr>
                                <p class="card-text" style="text-align:justify; padding-bottom: 1px; font-family: cursive;">La isla de Chiloé, la isla principal del archipiélago del mismo nombre, se encuentra en el sur de Chile. Tiene paisajes pastorales y es conocida por sus icónicas iglesias de madera, construidas por misioneros jesuitas en los siglos XVII y XVIII.</p>
                                <!-- Button trigger modal -->
                                <button style="margin-top: 24px" type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop_1">
                                    Información
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-dark">
                                                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Información</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="background-color: #ef8354;">
                                                <p class="text-white">Isla Grande de Chiloé disponible en "Destinos" próximamente...</p>
                                            </div>
                                            <div class="modal-footer bg-dark">
                                                <button type="button" class="btn btn-success text-white" data-bs-dismiss="modal">¡Entendido!</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Col card 2-->
                    <div class="col-6">
                        <div class="card border-success border border-2" style="width: 100%;">
                            <img src="img/Rapa nui.webp" class="card-img-top" alt="Chiloe">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: cursive;">Rapa Nui</h5><hr>
                                <p class="card-text" style="text-align:justify; padding-bottom: 25px; font-family: cursive;">La Isla de Pascua o Rapa Nui en su nombre nativo, en una remota isla volcánica en la Polinesia. Es famosa por sus sitios arqueológicos, incluidas cerca de 900 estatuas monumentales llamadas "moáis", creadas por los habitantes entre los siglos XIII y XVI.</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop_2">
                                    Información
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-dark">
                                                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Información</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="background-color: #ef8354;">
                                                <p class="text-white">Rapa Nui disponible en "Destinos" próximamente...</p>
                                            </div>
                                            <div class="modal-footer bg-dark">
                                                <button type="button" class="btn btn-success text-white" data-bs-dismiss="modal">¡Entendido!</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--ROW 3 - CONTENIDO PARRAFO-->
        <div class="row row_contenido">
            <div class="col-8 offset-2 col_contenido">
                <p class="parrafo parrafo_1" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                    Desde el extremo norte con el desierto 
                    más árido del mundo, hasta el sur austral 
                    con hielos eternos y cascadas invertidas, 
                    Chile es una invitación difícil de rechazar. 
                    Conoce el turismo en Chile, y asómbrate con las 
                    experiencias en el extremo sur del mundo.
                </p>
                <br>
                <p class="parrafo parrafo_2" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                    Con Chile Destinations puedes conseguir los 
                    mejores precios para viajar por nuestro país, 
                    gracias a los paquetes turísticos que ofrecemos.
                </p>
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

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>