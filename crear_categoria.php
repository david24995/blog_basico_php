<?php  require_once('./includes/validarUsuario.php'); ?>

<?php  require_once('./includes/cabecera.php'); ?>

<?php require_once('./includes/lateral.php');?>




<div id="principal">
<h2>Crear Categorias</h2>
    <p>
        Añade nuevas categorias al blog para que los usuarios puedan usarlas al crear sus entradas
    </p>
    <br>
    <form action="guardar-categoria.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        
        <input type="submit" value="Guardar">
    </form>
</div>







<?php  require_once('./includes/footer.php'); ?>