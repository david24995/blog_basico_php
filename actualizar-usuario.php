<?php
require_once('./includes/conexion.php');
require_once('./includes/helpers.php');
$nombre = $_POST['nombre'] ?? "";
$apellido = $_POST['apellido'] ?? "";
$email = $_POST['email'] ?? "";
$id = $_SESSION['user']['id'];

if( $nombre && $apellido && $email ) {
$sql=<<<FIN

    UPDATE usuarios SET
    nombre='$nombre', apellido='$apellido', email='$email'
    WHERE id = $id

FIN;

    $resultado =mysqli_query($db,$sql);


    header('refresh:2; url=cerrar_sesion.php');
    echo "Se actualizo con éxito";

}