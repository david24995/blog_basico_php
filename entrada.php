<?php  require_once('./includes/cabecera.php');  ?>

<?php require_once('./includes/lateral.php'); ?>

<!-- Caja Principal -->
<div id="principal">
<?php
    $entrada = getEntrada($db,$_GET['id']);
if($entrada) :
?>
    <article class="entrada" >
            <h1> <?= $entrada['titulo']; ?> </h1>
            <h2><?= $entrada['categoria']; ?></h2>
            <h4><?= $entrada['fecha']; ?></h4>
            <p> <?= $entrada['descripcion']; ?> </p>
    </article>
<?php
endif;
?>
<br><br>
    <a href="index.php" class="boton" >Regresar al Inicio</a>
</div>
<?php  require_once('./includes/footer.php'); ?>