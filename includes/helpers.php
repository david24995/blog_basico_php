<?php


function listarCategorias( $db ) {
    $sql = "SELECT * FROM categorias ORDER BY id asc";
    $categorias = mysqli_query($db,$sql);
    return $categorias;
}