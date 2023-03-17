<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Pass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="recuperarPassword.css">
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
            </ul>
          </div>
        </div>
    </nav>

    <!--CONTAINER FORM-->
    <div class="container-fluid" style="background-color: #93b49e; padding-top: 50px; padding-bottom: 100px">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <form method="POST" action="validarRecuperacion.php" class="formulario" autocomplete="off">
                <h3 class="display-5 text-dark text-center" style="font-weight: bold;">Recuperar Contraseña</h3>
                <!--Usuario-->
                <div class="form-group">
                    <label style="font-weight: bold;">Usuario:</label>
                    <input type="text" placeholder="Introduce tu nombre de usuario" id="usuario" name="usuario" class="form-control mb-3" required>
                </div>
                <!--Correo-->
                <div class="form-group" style="margin-bottom: 30px;">
                    <label style="font-weight: bold;">Correo:</label>
                    <input type="email" placeholder="Introduce tu correo electrónico" id="email" name="email" class="form-control mb-3" required>
                </div>

                <!--BOTONES-->
                <div class="form-group">
                    <!--Boton enviar a validarRecuperacion.php-->
                    <input type="submit" class="btn btn-success btn-lg" value="Enviar" name="btnValidarRecuperacion" style="margin-left: 160px">
                    <a href="login.php"><button type="button" class="btn btn-success btn-lg" style="margin-left: 50px">Volver</button></a>
                </div>
            </form>
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

    <!-------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>