<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <!--Tabla-->
    <div class="row">
            <div class="col">
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
                            <th>Dirección</th>
                            <th>Pregunta</th>
                            <th>Respuesta</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody class="table-success">
                        <?php
                            while ($row = mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php echo $row['id'] ?></th>
                                <th><?php echo $row['usuario']?></th>
                                <th><?php echo $row['email']?></th>
                                <th><?php echo $row['pass']?></th>
                                <th><?php echo $row['nombres']?></th>
                                <th><?php echo $row['apellidos']?></th>
                                <th><?php echo $row['telefono']?></th>
                                <th><?php echo $row['mes']?></th>
                                <th><?php echo $row['run']?></th>
                                <th><?php echo $row['sexo']?></th>
                                <th><?php echo $row['fecha_nacimiento']?></th>
                                <th><?php echo $row['edad']?></th>
                                <th><?php echo $row['direccion']?></th>
                                <th><?php echo $row['pregunta']?></th>
                                <th><?php echo $row['respuesta']?></th>
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
        </div><!--fin div row de tablas-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>