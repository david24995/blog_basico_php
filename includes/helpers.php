<?php


function listarCategorias( $db ) {
    $sql = "SELECT * FROM categorias ORDER BY id asc";
    $categorias = mysqli_query($db,$sql);
    return $categorias;
}

function obtenerEntradas ($db, $limit=null) {
$sql =<<<FIN
    SELECT e.*, c.nombre 'categoria' FROM entradas e 
    INNER JOIN categorias c on e.categoria_id = c.id
    order by e.id DESC 
FIN;

if( $limit ) {
    $sql .= ' LIMIT 4';
}

$entradas = mysqli_query($db,$sql);

return $entradas;

}

function listarEntradasCategoria($db, $id) {
$sql =<<<FIN
    SELECT e.*, c.nombre 'categoria' FROM entradas e 
    INNER JOIN categorias c on e.categoria_id = c.id
    WHERE c.id = $id
    order by e.id DESC 
FIN;
    $entradas = mysqli_query($db,$sql);

    return $entradas;
}


function getEntrada($db, $id) {
    $sql =<<<FIN
        SELECT e.*, c.nombre 'categoria' FROM entradas e 
        INNER JOIN categorias c on e.categoria_id = c.id
        WHERE e.id = $id
FIN;
        $entrada = mysqli_query($db,$sql);
        $resultado = mysqli_fetch_assoc($entrada);
    
        return $resultado;
    }