<?php

include("conexion.php");
$con=conectar();

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

$sql="INSERT INTO registro (usuario, email, pass, nombres, apellidos, telefono, mes, run, sexo, fecha_nacimiento, edad, direccion, pregunta, respuesta) VALUES ('$usuario','$email','$pass','$nombres','$apellidos','$telefono','$mes','$run','$sexo','$fecha_nacimiento','$edad','$direccion','$pregunta','$respuesta')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: login.php");
}

mysqli_close($conexion);

?>