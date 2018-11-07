<?php
require_once('./includes/conexion.php');
$nombre = $_POST['nombre'] ?? "";

if(  $nombre ) {
$sql=<<<FIN
    INSERT INTO categorias values (null,'$nombre')
FIN;

    $resultado = mysqli_query($db,$sql);

    header('location: index.php');
}



