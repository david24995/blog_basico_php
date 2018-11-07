<?php  require_once('./includes/cabecera.php');  ?>

<?php require_once('./includes/lateral.php'); ?>

<!-- Caja Principal -->
<div id="principal">
<h1>Ultimas entradas</h1>
<?php
    $entradas = obtenerEntradas($db);
if($entradas) :
    while( $entrada = mysqli_fetch_assoc($entradas)):
?>
    <article class="entrada" >
        <a href="entrada.php?id=<?=$entrada['id'];?>">
            <h2> <?= $entrada['titulo']; ?> </h2>
            <span class="fecha" > <?= $entrada['categoria'] . ' | ' . $entrada['fecha']; ?> </span>
            <p> <?= substr($entrada['descripcion'],0,200). ' ...' ; ?> </p>
        </a>
    </article>
<?php
    endwhile;
endif;
?>
</div>
<?php  require_once('./includes/footer.php'); ?>