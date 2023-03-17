<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *, DATE_FORMAT(fecha_nacimiento, '%d/%m/%Y') as fecha_nacimiento FROM registro";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Registros</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estás Seguro? se eliminarán los datos');
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="gestionRegistros.css">
</head>
<body style="background-color: #93b49e">

    <!--Barra de Navegación-->
    <nav class="navbar navbar-expand-lg bg-dark" style="width: 2030px">
        <!--CONTAINER NAV-->
        <div class="container-fluid">
          <a class="navbar-brand" style="color: #ef8354; font-weight: bold" href="">CHILE DESTINATIONS</a>
        </div>
    </nav>

    <!--CONTAINER FORM y TABLA-->
    <div class="container-fluid" style="background-color: #93b49e; padding-top: 50px; padding-bottom: 100px">
        <!--row formulario-->
        <div class="row">
            <div class="col">
                <form class="formulario" autocomplete="off" action="insertar1.php" method="POST">
                    <!--Titulo-->
                    <h3 class="display-5 text-dark text-center" style="font-weight: bold;">GESTION DE REGISTROS</h3>
                    <!--Usuario-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Usuario:</label>
                        <input type="text" placeholder="Debe contener mínimo 3 caracteres" maxlength="15" Title="Solo puede usar letras, numeros, guiones bajos y medios. No se permiten espacios y debe usar mínimo 3 caracteres, máximo 15 caracteres" pattern="[0-9a-zA-Z-_]{3,15}" id="usuario" name="usuario" class="form-control mb-3" required>
                    </div>
                    <!--Correo-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Correo:</label>
                        <input type="email" placeholder="Ingrese un correo electrónico" minlength="6" maxlength="50" id="email" name="email" class="form-control" required>
                    </div>
                    <!--Contraseña-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Contraseña:</label>
                        <input type="password" placeholder="Debe comenzar por una letra y tener mínimo 5 caracteres" maxlength="30" Title="Solo puede usar letras, números y espacios. La contraseña debe contener mínimo 5 caracteres, máximo 30 caracteres y comenzar por una letra" pattern="[a-zA-Z]{1}[0-9a-zA-Z ]{4,29}" id="pass" name="pass" class="form-control mb-3" required>
                    </div>
                    <!--Nombres-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Nombres:</label>
                        <input type="text" placeholder="Debe comenzar por mayúscula" maxlength="30" Title="Debe comenzar por mayúscula y solo puede usar letras y espacios" pattern="[A-Z]{1}[a-zA-Z ]{1,29}" id="nombres" name="nombres" class="form-control mb-3" required>
                    </div>
                    <!--Apellidos-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Apellidos</label>
                        <input type="text" placeholder="Debe comenzar por mayúscula" maxlength="30" Title="Debe comenzar por mayúscula y solo puede usar letras y espacios" pattern="[A-Z]{1}[a-zA-Z ]{1,29}" id="apellidos" name="apellidos" class="form-control mb-3" required>
                    </div>
                    <!--Telefono-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Teléfono:</label>
                        <input type="tel" placeholder="Ej. 9-1111-1111" pattern="[9]{1}-[0-9]{4}-[0-9]{4}" Title="Ej: 9-1111-1111" maxlength="11" id="telefono" name="telefono" class="form-control mb-3" required>
                    </div>
                    <!--Mes-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Seleccione mes de viaje:</label>
                        <select class="form-select mb-3" aria-label=".form-select-lg example" id="mes" name="mes" required>
                            <option selected></option>
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
                        <input type="text" placeholder="Ej. 12.333.444-0     k se debe reemplazar por '0'" pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}-[0-9]{1}" id="run" name="run" class="form-control mb-3" required>
                    </div>
                    <!--sexo-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Seleccione sexo:</label>
                        <select class="form-select mb-3" aria-label=".form-select-lg example" id="sexo" name="sexo" required>
                            <option selected></option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro / Prefiero no decir">Otro / Prefiero no decir</option>
                        </select>
                    </div>
                    <!--fecha nacimiento-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Fecha de nacimiento:</label>
                        <input type="date" placeholder="Introduce tu fecha de nacimiento" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control mb-3" required>
                    </div>
                    <!--edad-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Edad:</label>
                        <input type="number" placeholder="Introduce tu edad" min="18" max="120" id="edad" name="edad" class="form-control mb-3" required>
                    </div>
                    <!--direccion-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Direccion:</label>
                        <input type="text" placeholder="Debe comenzar con mayúscula" Title="Solo puede contener letras, números y espacios. Debe comenzar con mayúscula" pattern="[A-Z]{1}[a-zA-Z0-9 ]{4,29}" id="direccion" name="direccion" class="form-control mb-3" required>
                    </div>
                    <!--Pregunta de seguridad-->
                    <div class="form-group">
                        <label style="font-weight: bold;">Seleccione una pregunta de seguridad:</label>
                        <select class="form-select mb-3" aria-label=".form-select-lg example" id="pregunta" name="pregunta" required>
                            <option selected></option>
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
                        <input type="text" placeholder="De una respuesta dificil de adivinar, pero facil de recordar para usted" maxlength="100" id="respuesta" name="respuesta" class="form-control mb-3" required>
                    </div>

                    <!--BOTONES-->
                    <div class="form-group" style="margin-top: 30px">
                        <input type="submit" class="btn btn-success btn-lg" value="Registrar" style="margin-left: 80px">
                        <input class="btn btn-success btn-lg" type="reset" value="Borrar" style=" margin-left: 40px">
                        <a href="buscar.php" class="btn btn-success btn-lg" style="margin-left: 40px">Buscar registro</a>
                    </div>
                </form>
            </div>
        </div>
        <!--row tabla de datos-->
        <div class=row>
            <div class="col-12">
                <table class="table" style="border: 2px solid black; width: 2000px">
                    <thead class="table-dark table-striped">
                        <tr>
                            <th>id</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Contraseña</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Teléfono</th>
                            <th>Mes de Viaje</th>
                            <th>Run</th>
                            <th>Sexo</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Edad</th>
                            <th>Direccion</th>
                            <th>Pregunta</th>
                            <th>Respuesta</th>
                            <th colspan="2"><a href="buscar.php" class="btn btn-success" style="margin-left: 20px">Buscar registro</a></th>
                        </tr>
                    </thead>

                    <tbody class="table-success">
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php  echo $row['id']?></th>
                                    <th><?php  echo $row['usuario']?></th>
                                    <th><?php  echo $row['email']?></th>
                                    <th><?php  echo $row['pass']?></th>
                                    <th><?php  echo $row['nombres']?></th>
                                    <th><?php  echo $row['apellidos']?></th>
                                    <th><?php  echo $row['telefono']?></th>
                                    <th><?php  echo $row['mes']?></th>
                                    <th><?php  echo $row['run']?></th>
                                    <th><?php  echo $row['sexo']?></th>
                                    <th><?php  echo $row['fecha_nacimiento']?></th>
                                    <th><?php  echo $row['edad']?></th>
                                    <th><?php  echo $row['direccion']?></th>
                                    <th><?php  echo $row['pregunta']?></th>
                                    <th><?php  echo $row['respuesta']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Editar</a></th>
                                    <th>
                                        <?php echo "<a href='delete.php?id=".$row['id']."' onclick='return confirmar()' class='btn btn-danger'>Eliminar</a>"; ?>
                                    </th>
                                </tr>
                            <?php
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>