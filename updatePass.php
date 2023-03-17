<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$pass=$_POST['pass'];

$sql="UPDATE registro SET pass='$pass' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: loginAlertaPass.php");
    }
?>