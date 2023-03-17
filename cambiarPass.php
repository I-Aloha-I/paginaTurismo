<?php
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM registro WHERE id='$id'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query); // para obtener un arreglo con todos los datos del usuario
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar Pass</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="actualizarPass.css">
        
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
            </div>
        </nav>

        <!--CONTAINER FORM-->
        <div class="container-fluid" style="padding-top: 50px; padding-bottom: 100px; background-color: #93b49e">
            <div class="row">
                <div class="col">
                    <form class="formulario" autocomplete="off" action="changePass.php" method="POST">
                        <!--Titulo-->
                        <h3 class="display-5 text-dark text-center" style="font-weight: bold;">CAMBIAR CONTRASEÑA</h3>
                        <!--id-->
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <!--Usuario-->
                        <div style="font-weight: bold; margin-top: 40px">Usuario: <?php echo $row['usuario'] ?> </div>
                        <!--Actual contraseña-->
                        <div style="font-weight: bold; margin-top: 10px">Actual contraseña: <?php echo $row['pass'] ?> </div>
                        <!--Nueva contraseña-->
                        <div class="form-group">
                            <label style="font-weight: bold; margin-top: 10px">Nueva contraseña:</label>
                            <input type="password" placeholder="Debe comenzar por una letra y tener mínimo 5 caracteres" maxlength="40" Title="Solo puede usar letras, números y espacios. La contraseña debe contener mínimo 5 caracteres, máximo 40 caracteres y comenzar por una letra" pattern="[a-zA-Z]{1}[0-9a-zA-Z ]{4,39}" id="pass" name="pass" class="form-control mb-3" required>
                        </div>

                        <!--BOTONES-->
                        <div class="form-group" style="margin-top: 30px">
                            <input type="submit" class="btn btn-success btn-lg" value="Actualizar contraseña" style="margin-left: 5px">
                            <a href="index.php"><button type="button" class="btn btn-success btn-lg" style="margin-left: 5px">Prefiero mantener la contraseña</button></a>
                        </div>
                    </form>
                </div><!--Fin col-->
            </div>
        </div>

        <!--CONTAINER FOOTER-->
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
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <p class="h5 mb-3 titulo_footer">Siguenos</p>
                    <div style="margin-bottom: 10px;">
                        <a href=""><img src="icon/facebook24x24.png" style="margin-right: 10px;"></a>
                        <a class="text-secondary text-decoration-none" href="#">Facebook</a>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <a href=""><img src="icon/twitter24x24.png" style="margin-right: 10px;"></a>
                        <a class="text-secondary text-decoration-none" href="#">Twitter</a>
                    </div>
                    <div>
                        <a href=""><img src="icon/instagram24x24.png" style="margin-right: 10px;"></a>
                        <a class="text-secondary text-decoration-none" href="#">Instagram</a>
                    </div>
                </div>
            </div>
        </div>

        <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>