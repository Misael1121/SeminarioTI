<?php
function conectar(){
    $host="13.58.74.205";
    $user="GrupoE";
    $pass="GrupoE$123";

    $bd="SeminarioTICs";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
