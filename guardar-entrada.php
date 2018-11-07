<?php
require_once('./includes/conexion.php');

$titulo = $_POST['titulo'] ?? "";
$des = $_POST['descripcion'] ?? "";
$cat = $_POST['categoria'] ?? "";




if( $titulo && $des && $cat ) {

$usu = $_SESSION['user']['id'];

$sql=<<<FIN

    INSERT INTO entradas VALUES (null,$usu,$cat,'$titulo','$des', CURDATE());

FIN;

    mysqli_query($db,$sql);

    header('location: index.php');

}