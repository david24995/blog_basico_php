<?php require_once('./includes/validarUsuario.php'); ?>
<?php require_once('./includes/conexion.php'); ?>
<?php require_once('./includes/helpers.php'); ?>
<?php  require_once('./includes/cabecera.php'); ?>
<?php  require_once('./includes/lateral.php'); ?>

<div id="principal">
    <h2>Crear Entrada</h2>
        <p>
            Añade nuevas entradas al blog para que los usuarios puedan leer y disfrutar el contenido
        </p>
        <br>
        <form action="guardar-entrada.php" method="post">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo">

            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion"></textarea>

            <label for="categoria">Categoria</label>
            <select name="categoria">
            <?php 
                $categorias = listarCategorias($db);
                if( $categorias ) :
                    while( $categoria = mysqli_fetch_assoc($categorias) ) :
            ?>
                <option value="<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></option>
            <?php        
                    endwhile;
                endif;
            ?>

            </select>

            <input type="submit" value="Guardar">
        </form>
</div>





<?php require_once('./includes/footer.php'); ?>