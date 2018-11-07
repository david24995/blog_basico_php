<?php require_once('./includes/validarUsuario.php'); ?>
<?php  require_once('./includes/cabecera.php'); ?>
<?php  require_once('./includes/lateral.php'); ?>




<div id="principal">
    <h1>Mis Datos</h1>
    <hr>
    <br>
    <form action="actualizar-usuario.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?= trim($_SESSION['user']['nombre']); ?> " >

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" value="<?= trim($_SESSION['user']['apellido']); ?> ">

            <label for="email">Email</label>
            <input type="email" name="email" value="<?= trim($_SESSION['user']['email']); ?> ">

            <input type="submit" name="submit" value="Actualizar">
        </form>
</div>








<?php  require_once('./includes/footer.php') ?>