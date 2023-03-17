<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validarRespuesta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="validarRespuestas.css">
</head>
<body style="background-color: #93b49e">

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

    <!--Validacion-->
    <?php
    include("conexion.php");
    $con=conectar();

    $usuario=$_POST['usuario'];
    $respuesta=$_POST['respuesta'];

    $sql="SELECT * FROM registro WHERE usuario='$usuario' and respuesta='$respuesta'";
    $query=mysqli_query($con, $sql);


    $row=mysqli_num_rows($query); // para obtener el numero de filas

    if ($row>0){ // si coincide un dato
        $row2=mysqli_fetch_array($query); // obteniendo un arreglo con todos los datos del usuario
        //var_dump($row2);
        ?>

            <div class="container-fluid">
                <!--ALERTA INFO-->
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="info-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </symbol>
                </svg>
                <div class="alert alert-danger d-flex align-items-center alerta_info" role="alert">
                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                    <div>
                        <p class="texto_info" style="margin-left: 250px; font-weight: bold"> ¡Bienvenido <?php echo $row2['usuario']?>! </p>
                        <p class="texto_info" style="margin-right: 150px"> Debajo puede ver su contraseña actual, puede elegir mantenerla o cambiarla por una contraseña nueva. </p>
                    </div>
                </div>
                <!--row tabla de datos-->
                <div class=row>
                    <div class="col-9" style="margin-left: 180px">
                        <table class="table" style="border: 2px solid black">
                            <thead class="table-dark table-striped">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Contraseña</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody class="table-danger">
                                <tr>
                                    <th><?php echo $row2['usuario']?></th>
                                    <th><?php echo $row2['pass']?></th>
                                    <th colspan="2">
                                        <a href="login.php" class="btn btn-success btn-lg">Mantener contraseña</a>
                                        <a href="actualizarPass.php?id=<?php echo $row2['id'] ?>" class="btn btn-success btn-lg">Cambiar contraseña</a>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--Fin col 1-->
                </div><!--Fin row-->
            </div> <!--Fin div container-->

        <?php
    }
    else{
        ?>
            <!--ALERTA ERROR EN LA AUTENTIFICACIÓN-->
            <div class="container-fluid" style="margin-top: 120px; margin-bottom: 154px">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                    <symbol id="info-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </symbol>
                    <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                </svg>

                <div class="alert alert-danger d-flex align-items-center alerta_error" role="alert" style="margin-top: 20px; padding: 0; border: 3px solid black">
                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div style="font-size: 25px; margin-left: 90px; color: red; font-weight: bold">
                        ¡CREDENCIALES INCORRECTAS!
                    </div>
                    <div style="font-size: 25px; margin-left: 50px; color: red; font-weight: bold">
                        <a href="recuperarPass.php">Ingresar datos nuevamente</a>
                    </div> 
                </div>
            </div>
        <?php
    }

    ?>

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