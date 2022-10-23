<?php

include("conexion.php");
$con=conectar();

$carnet=$_GET['id'];

$sql="DELETE FROM integrantes  WHERE carnet='$carnet'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
