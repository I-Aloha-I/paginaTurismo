<?php

include("conexion.php");
$con=conectar();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estás Seguro? se eliminarán los datos');
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="buscar.css">
</head>
<body style="background-color: #93b49e">

    <!--Barra de Navegación-->
    <nav class="navbar navbar-expand-lg bg-dark" style="width: 2030px">
        <!--CONTAINER NAV-->
        <div class="container-fluid">
            <a class="navbar-brand" style="color: #ef8354; font-weight: bold" href="">CHILE DESTINATIONS</a>
        </div>
    </nav>

    <div class="container-fluid" style="padding-top: 30px; padding-bottom: 300px">
        <!--row 1 buscadores-->
        <div class="row">
            <div class="col">
                <form class="formulario" id="formulario1" autocomplete="off" action="" method="POST">
                    <!--titulo-->
                    <h3 class="display-5 text-dark text-center" style="font-weight: bold; margin-bottom: 30px">BÚSQUEDA DE USUARIOS</h3>
                    <!--id-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Buscar por id: </label>
                        <input type="text" class="form-control mb-3" name="busquedaId" placeholder="Introduce la id">
                    </div>
                    <!--usuario-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Buscar por usuario: </label>
                        <input type="text" class="form-control mb-3" name="busquedaUsuario" placeholder="Introduce un usuario">
                    </div>
                    <!--email-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Buscar por correo: </label>
                        <input type="text" class="form-control mb-3" name="busquedaEmail" placeholder="Introduce un correo">
                    </div>
                    <!--nombres-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Buscar por nombres: </label>
                        <input type="text" class="form-control mb-3" name="busquedaNombres" placeholder="Introduce los nombres">
                    </div>
                    <!--apellidos-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Buscar por apellidos: </label>
                        <input type="text" class="form-control mb-3" name="busquedaApellidos" placeholder="Introduce los apellidos">
                    </div>
                    <!--botones-->
                    <div class="form-group" style="margin-top: 30px">
                        <input type="submit" name="enviar" value="Buscar" class="btn btn-success btn-lg" style="margin-left: 80px">
                        <a class="btn btn-success btn-lg" href="gestionRegistros.php" role="button" style="margin-left: 50px">Regresar a Gestión de Usuarios</a>
                    </div>
                </form>
            </div>
        </div>

        <!-------MOSTRANDO LOS DATOS------>
        <?php
        if(isset($_POST['enviar'])){
            $id=$_POST['busquedaId'];
            $usuario=$_POST['busquedaUsuario'];
            $email=$_POST['busquedaEmail'];
            $nombres=$_POST['busquedaNombres'];
            $apellidos=$_POST['busquedaApellidos'];

            // caso 1 - id
            if(!empty($id) and empty($usuario) and empty($email) and empty($nombres) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 2 - usuario
            else if(!empty($usuario) and empty($id) and empty($email) and empty($nombres) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE usuario LIKE '%$usuario%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 3 - email
            else if(!empty($email) and empty($id) and empty($usuario) and empty($nombres) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE email LIKE '%$email%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 4 - nombres
            else if(!empty($nombres) and empty($id) and empty($usuario) and empty($email) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE nombres LIKE '%$nombres%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 5 - apellidos
            else if(!empty($apellidos) and empty($id) and empty($usuario) and empty($email) and empty($nombres)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 6 - id + usuario
            else if(!empty($id) and !empty($usuario) and empty($email) and empty($nombres) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and usuario LIKE '%$usuario%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 7 - id + email
            else if(!empty($id) and !empty($email) and empty($usuario) and empty($nombres) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and email LIKE '%$email%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 8 - id + nombres
            else if(!empty($id) and !empty($nombres) and empty($usuario) and empty($email) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and nombres LIKE '%$nombres%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 9 - id + apellidos
            else if(!empty($id) and !empty($apellidos) and empty($usuario) and empty($email) and empty($nombres)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 10 - usuario + email
            else if(!empty($usuario) and !empty($email) and empty($id) and empty($nombres) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE usuario LIKE '%$usuario%' and email LIKE '%$email%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 11 - usuario + nombres
            else if(!empty($usuario) and !empty($nombres) and empty($id) and empty($email) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE usuario LIKE '%$usuario%' and nombres LIKE '%$nombres%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 12 - usuario + apellidos
            else if(!empty($usuario) and !empty($apellidos) and empty($id) and empty($email) and empty($nombres)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE usuario LIKE '%$usuario%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 13 - email + nombres
            else if(!empty($email) and !empty($nombres) and empty($id) and empty($usuario) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE email LIKE '%$email%' and nombres LIKE '%$nombres%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 14 - email + apellidos
            else if(!empty($email) and !empty($apellidos) and empty($id) and empty($usuario) and empty($nombres)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE email LIKE '%$email%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 15 - nombres + apellidos
            else if(!empty($nombres) and !empty($apellidos) and empty($id) and empty($usuario) and empty($email)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE nombres LIKE '%$nombres%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 16 - id + usuario + email
            else if(!empty($id) and !empty($usuario) and !empty($email) and empty($nombres) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and usuario LIKE '%$usuario%' and email LIKE '%$email%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 17 - id + usuario + nombres
            else if(!empty($id) and !empty($usuario) and !empty($nombres) and empty($email) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and usuario LIKE '%$usuario%' and nombres LIKE '%$nombres%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 18 - id + usuario + apellidos
            else if(!empty($id) and !empty($usuario) and !empty($apellidos) and empty($email) and empty($nombres)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and usuario LIKE '%$usuario%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 19 - id + email + nombres
            else if(!empty($id) and !empty($email) and !empty($nombres) and empty($usuario) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and email LIKE '%$email%' and nombres LIKE '%$nombres%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 20 - id + email + apellidos
            else if(!empty($id) and !empty($email) and !empty($apellidos) and empty($usuario) and empty($nombres)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and email LIKE '%$email%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 21 - id + nombres + apellidos
            else if(!empty($id) and !empty($nombres) and !empty($apellidos) and empty($usuario) and empty($email)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and nombres LIKE '%$nombres%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 22 - usuario + email + nombres
            else if(!empty($usuario) and !empty($email) and !empty($nombres) and empty($id) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE usuario LIKE '%$usuario%' and email LIKE '%$email%' and nombres LIKE '%$nombres%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 23 - usuario + email + apellidos
            else if(!empty($usuario) and !empty($email) and !empty($apellidos) and empty($id) and empty($nombres)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE usuario LIKE '%$usuario%' and email LIKE '%$email%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 24 - usuario + nombres + apellidos
            else if(!empty($usuario) and !empty($nombres) and !empty($apellidos) and empty($id) and empty($email)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE usuario LIKE '%$usuario%' and nombres LIKE '%$nombres%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 25 - email + nombres + apellidos
            else if(!empty($email) and !empty($nombres) and !empty($apellidos) and empty($id) and empty($usuario)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE email LIKE '%$email%' and nombres LIKE '%$nombres%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 26 - id + usuario + email + nombres
            else if(!empty($id) and !empty($usuario) and !empty($email) and !empty($nombres) and empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and usuario LIKE '%$usuario%' and email LIKE '%$email%' and nombres LIKE '%$nombres%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 27 - id + usuario + email + apellidos
            else if(!empty($id) and !empty($usuario) and !empty($email) and !empty($apellidos) and empty($nombres)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and usuario LIKE '%$usuario%' and email LIKE '%$email%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 28 - id + usuario + nombres + apellidos
            else if(!empty($id) and !empty($usuario) and !empty($nombres) and !empty($apellidos) and empty($email)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and usuario LIKE '%$usuario%' and nombres LIKE '%$nombres%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 29 - id + email + nombres + apellidos
            else if(!empty($id) and !empty($email) and !empty($nombres) and !empty($apellidos) and empty($usuario)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and email LIKE '%$email%' and nombres LIKE '%$nombres%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 30 - usuario + email + nombres + apellidos
            else if(!empty($usuario) and !empty($email) and !empty($nombres) and !empty($apellidos) and empty($id)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE usuario LIKE '%$usuario%' and email LIKE '%$email%' and nombres LIKE '%$nombres%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 31 - id + usuario + email + nombres + apellidos
            else if(!empty($id) and !empty($usuario) and !empty($email) and !empty($nombres) and !empty($apellidos)){
                $sql = "SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro WHERE id LIKE '%$id%' and usuario LIKE '%$usuario%' and email LIKE '%$email%' and nombres LIKE '%$nombres%' and apellidos LIKE '%$apellidos%'";
                $query=mysqli_query($con,$sql);
                include("tabla.php");
            }
            // caso 32 - nada
            else{
                include("tabla.php");
            }
        }
        else{
            include("tabla.php");
        }
        ?>

    </div><!--termino div container-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>