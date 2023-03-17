<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$usuario=$_POST['usuario'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$mes=$_POST['mes'];
$run=$_POST['run'];
$sexo=$_POST['sexo'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$edad=$_POST['edad'];
$direccion=$_POST['direccion'];
$pregunta=$_POST['pregunta'];
$respuesta=$_POST['respuesta'];

$sql="UPDATE registro SET id='$id',usuario='$usuario',email='$email',pass='$pass',nombres='$nombres',apellidos='$apellidos',telefono='$telefono',mes='$mes',run='$run',sexo='$sexo',fecha_nacimiento='$fecha_nacimiento',edad='$edad',direccion='$direccion',pregunta='$pregunta',respuesta='$respuesta' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: gestionRegistros.php");
    }
?>