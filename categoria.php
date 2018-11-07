<?php  require_once('./includes/cabecera.php');  ?>

<?php require_once('./includes/lateral.php'); ?>

<!-- Caja Principal -->
<div id="principal">

<?php
    $entradas = listarEntradasCategoria($db,$_GET['id']);
    $num =0;
?>
    
<?php
if($entradas) :
    while( $entrada = mysqli_fetch_assoc($entradas)):
?>
        <?php
            if( $num != 1 ) :
        ?>
        <h1>Entradas de <?= $entrada['categoria']; ?></h1>

        <?php
            $num++;
        endif;
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