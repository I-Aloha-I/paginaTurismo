<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM registro WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="actualizar.css">
        
    </head>

    <body>

        <!--Barra de Navegación-->
        <nav class="navbar navbar-expand-lg bg-dark">
            <!--CONTAINER NAV-->
            <div class="container-fluid">
                <a class="navbar-brand" style="color: #ef8354; font-weight: bold;" href="#">CHILE DESTINATIONS</a>
            </div>
        </nav>

        <!--CONTAINER FORM-->
        <div class="container-fluid" style="padding-top: 50px; padding-bottom: 100px; background-color: #93b49e">
            <div class="row">
                <!--Columna Formulario-->
                <div class="col">

                    <form class="formulario" autocomplete="off" action="update.php" method="POST">
                        <!--Titulo-->
                        <h3 class="display-5 text-dark text-center" style="font-weight: bold; margin-bottom: 20px">ACTUALIZAR REGISTRO</h3>
                        <!--id-->
                        <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                        <!--Usuario-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Usuario:</label>
                            <input type="text" placeholder="Debe contener mínimo 3 caracteres" maxlength="15" Title="Solo puede usar letras, numeros, guiones bajos y medios. No se permiten espacios y debe usar mínimo 3 caracteres, máximo 15 caracteres" pattern="[0-9a-zA-Z-_]{3,15}" id="usuario" name="usuario" class="form-control mb-3" value="<?php echo $row['usuario']  ?>" required>
                        </div>
                        <!--Correo-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Correo:</label>
                            <input type="email" placeholder="Ingrese un correo electrónico" minlength="6" maxlength="50" id="email" name="email" class="form-control mb-3" value="<?php echo $row['email']  ?>" required>
                        </div>
                        <!--Contraseña-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Contraseña:</label>
                            <input type="password" placeholder="Debe comenzar por una letra y tener mínimo 5 caracteres" maxlength="30" Title="Solo puede usar letras, números y espacios. La contraseña debe contener mínimo 5 caracteres, máximo 30 caracteres y comenzar por una letra" pattern="[a-zA-Z]{1}[0-9a-zA-Z ]{4,29}" id="pass" name="pass" class="form-control mb-3" value="<?php echo $row['pass']  ?>" required>
                        </div>
                        <!--Nombres-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Nombres:</label>
                            <input type="text" placeholder="Debe comenzar por mayúscula" maxlength="30" Title="Debe comenzar por mayúscula y solo puede usar letras y espacios" pattern="[A-Z]{1}[a-zA-Z ]{1,29}" id="nombres" name="nombres" class="form-control mb-3" value="<?php echo $row['nombres']  ?>" required>
                        </div>
                        <!--Apellidos-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Apellidos</label>
                            <input type="text" placeholder="Debe comenzar por mayúscula" maxlength="30" Title="Debe comenzar por mayúscula y solo puede usar letras y espacios" pattern="[A-Z]{1}[a-zA-Z ]{1,29}" id="apellidos" name="apellidos" class="form-control mb-3" value="<?php echo $row['apellidos']  ?>" required>
                        </div>
                        <!--Telefono-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Teléfono:</label>
                            <input type="tel" placeholder="Ej. 9-1111-1111" pattern="[9]{1}-[0-9]{4}-[0-9]{4}" Title="Ej. 9-1111-1111" id="telefono" name="telefono" class="form-control mb-3" value="<?php echo $row['telefono']  ?>" required>
                        </div>
                        <!--Mes-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Seleccione mes de viaje:</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example" id="mes" name="mes" required>
                                <option selected style="background-color: #a3e0a5"><?php echo $row['mes']  ?></option>
                                <option value="Enero">Enero</option>
                                <option value="Febrero">Febrero</option>
                                <option value="Marzo">Marzo</option>
                                <option value="Abril">Abril</option>
                                <option value="Mayo">Mayo</option>
                                <option value="Junio">Junio</option>
                                <option value="Julio">Julio</option>
                                <option value="Agosto">Agosto</option>
                                <option value="Septiembre">Septiembre</option>
                                <option value="Octubre">Octubre</option>
                                <option value="Noviembre">Noviembre</option>
                                <option value="Diciembre">Diciembre</option>
                            </select>
                        </div>
                        <!--run-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Run:</label>
                            <input type="text" placeholder="Ej. 12.333.444-0     k se debe reemplazar por '0'" pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}-[0-9]{1}" Title="Ej. 12.333.444-0     k se debe reemplazar por '0'" id="run" name="run" class="form-control mb-3" value="<?php echo $row['run']  ?>" required>
                        </div>
                        <!--sexo-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Seleccione sexo:</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example" id="sexo" name="sexo" required>
                                <option selected style="background-color: #a3e0a5"><?php echo $row['sexo']  ?></option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otro / Prefiero no decir">Otro / Prefiero no decir</option>
                            </select>
                        </div>
                        <!--fecha nacimiento-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Fecha de nacimiento:</label>
                            <input type="date" class="form-control mb-3" name="fecha_nacimiento" placeholder="Introduce tu fecha de nacimiento" value="<?php echo $row['fecha_nacimiento']  ?>" required>
                        </div>
                        <!--edad-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Edad:</label>
                            <input type="number" placeholder="Introduce tu edad" min="18" max="120" id="edad" name="edad" class="form-control mb-3" value="<?php echo $row['edad']  ?>" required>
                        </div>
                        <!--direccion-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Direccion</label>
                            <input type="text" placeholder="Debe comenzar con mayúscula" Title="Solo puede contener letras, números y espacios. Debe comenzar con mayúscula" pattern="[A-Z]{1}[a-zA-Z0-9 ]{4,29}" id="direccion" name="direccion" class="form-control mb-3" value="<?php echo $row['direccion']  ?>" required>
                        </div>
                        <!--Pregunta de seguridad-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Seleccione una pregunta de seguridad:</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example" id="pregunta" name="pregunta" required>
                                <option selected style="background-color: #a3e0a5"><?php echo $row['pregunta']  ?></option>
                                <option value="¿Qué nombre(s) tiene tu padre?">¿Qué nombre(s) tiene tu padre?</option>
                                <option value="¿Qué nombre(s) tiene tu madre?">¿Qué nombre(s) tiene tu madre?</option>
                                <option value="¿Dónde se conocieron tus padres?">¿Dónde se conocieron tus padres?</option>
                                <option value="¿Cuál es el nombre de tu primer mascota?">¿Cuál es el nombre de tu primer mascota?</option>
                                <option value="¿Con quién diste tu primer beso?">¿Con quién diste tu primer beso?</option>
                                <option value="¿Cuál es tu videojuego favorito?">¿Cuál es tu videojuego favorito?</option>
                                <option value="¿Cuál es tu cantante favorito?">¿Cuál es tu cantante favorito?</option>
                                <option value="¿Dónde estudiaste?">¿Dónde estudiaste?</option>
                                <option value="¿Cómo te llamaban cuando eras niño(a)?">¿Cómo te llamaban cuando eras niño(a)?</option>
                                <option value="¿Si tuvieras que pedir un deseo, cual sería?">¿Si tuvieras que pedir un deseo, cual sería?</option>
                                <option value="¿Qué lugar del mundo te gustaría visitar?">¿Qué lugar del mundo te gustaría visitar?</option>
                                <option value="¿A qué te querías dedicar cuando eras niño(a)?">¿A qué te querías dedicar cuando eras niño(a)?</option>
                            </select>
                        </div>
                        <!--Respuesta-->
                        <div class="form-group">
                            <label style="font-weight: bold;">Respuesta:</label>
                            <input type="text" placeholder="De una respuesta dificil de adivinar, pero facil de recordar para usted" maxlength="100" id="respuesta" name="respuesta" class="form-control mb-3" value="<?php echo $row['respuesta']  ?>" required>
                        </div>

                        <!--Botones-->
                        <div class="form-group" style="margin-top: 30px">
                            <input type="submit" class="btn btn-success btn-lg btn-block" value="Actualizar" style="margin-left: 160px">
                            <a href="gestionRegistros.php"><button type="button" class="btn btn-success btn-lg" style="margin-left: 50px">Volver</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>