<?php

require_once('./includes/conexion.php');

$email = trim($_POST['email']) ?? "";
$pass = $_POST['password'] ?? "";

if( $email && $pass ) {
    $contraseña = sha1($pass);

    var_dump($_POST);

    $sql = "SELECT * FROM usuarios WHERE email='$email' and password='$contraseña'";
    $resultado = mysqli_query($db,$sql);

        $usuario = mysqli_fetch_assoc($resultado);
        $_SESSION['user'] = $usuario;
}

header('location:index.php');