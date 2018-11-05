<?php
require_once('./includes/conexion.php');

$nombre = ($_POST['nombre']) ?? "";
$apellido =  ($_POST['apellido']) ?? "";
$email = ($_POST['email']) ?? "";
$pass = ($_POST['password']) ?? ""; 

if( $nombre && $apellido && $email && $pass ) {
    $password_segura = sha1($pass);
    $sql = "INSERT INTO usuarios VALUES( null,'$nombre','$apellido','$email','$password_segura',CURDATE() )";
    $consulta = mysqli_query($db,$sql);
    
}

header('location:index.php');
