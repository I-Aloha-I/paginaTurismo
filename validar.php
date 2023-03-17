<?php

include("conexion.php");
$con=conectar();

$usuario=$_POST['usuario'];
$pass=$_POST['pass'];

$sql="SELECT * FROM registro WHERE usuario='$usuario' and pass='$pass'";
$resultado=mysqli_query($con, $sql);

$row2=mysqli_fetch_array($resultado); // para obtener un arreglo con todos los datos del usuario

$row=mysqli_num_rows($resultado); // para obtener el numero de filas
if ($row>0){ // si coincide un dato
    session_start();

    $_SESSION["id"] = $row2["id"];
    $_SESSION["usuario"] = $row2["usuario"];
    $_SESSION["pass"] = $row2["pass"];

    header("location: index.php");
}
else{
    header("location: loginAlerta.php");
}
?>