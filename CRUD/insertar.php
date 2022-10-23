<?php
include("conexion.php");
$con=conectar();

$carnet=$_POST['carnet'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];

$sql="INSERT INTO integrantes VALUES('$carnet','$nombres','$apellidos','$telefono','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>