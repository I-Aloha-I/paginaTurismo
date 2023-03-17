<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="Login.css">
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
            <form method="POST" action="validar.php" class="formulario" autocomplete="off">
                <h3 class="display-5 text-dark text-center" style="font-weight: bold;">LOGIN</h3>
                <div class="form-group">
                    <label style="font-weight: bold;">Usuario:</label>
                    <input type="text" placeholder="Introduce tu nombre de usuario" id="usuario" name="usuario" class="form-control mb-3" required>
                </div>
                <div class="form-group" style="margin-bottom: 30px;">
                    <label style="font-weight: bold;">Contraseña:</label>
                    <input type="password" placeholder="Introduce tu contraseña" id="pass" name="pass" class="form-control mb-3" required>
                </div>

                <!--BOTONES-->
                <div class="form-group">
                    <!--Boton Inicio sesion-->
                    <input type="submit" class="btn btn-success btn-lg" value="Iniciar sesión" name="iniciarSesion">
                    <!--Registro-->
                    <a class="btn btn-success btn-lg" href="registro.php" role="button" style="margin-left: 15px; margin-right: 15px">Registrarse</a>
                    <!--Recuperar contraseña-->
                    <a class="btn btn-success btn-lg" href="recuperarPass.php" role="button">¿Olvidó su contraseña?</a>
                </div>
            </form>

            <!--ALERTA ERROR EN LA AUTENTIFICACIÓN-->
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
            </svg>

            <div class="alert alert-danger d-flex align-items-center alerta" role="alert" style="margin-top: 20px; padding: 0; border: 3px solid black">
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div style="font-size: 25px; margin-left: 90px; color: red; font-weight: bold">
                    ¡ERROR EN LA AUTENTIFICACIÓN!
                </div>
                <div style="font-size: 25px; margin-left: 50px; color: red; font-weight: bold">
                    INTENTE NUEVAMENTE
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

    <!-------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>