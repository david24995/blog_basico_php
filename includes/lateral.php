<aside id="sidebar">
    <?php  if( isset($_SESSION['user']) ): ?>
    <div id="usuario_logeado" class="bloque" >
        <h3>Bienvenido, <?= ucfirst($_SESSION['user']['nombre']) ?> <?= ucfirst($_SESSION['user']['apellido']) ?> </h3>
    </div>
    <?php endif;  ?>
    <?php  if(!isset($_SESSION['user'])) : ?>
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email">
            <label for="password">Password</label>
            <input type="password" name="password">
            <input type="submit" value="Entrar">
        </form>
    </div>
    <?php  else: ?>
        <div class="bloque">
        <a class="boton" href="cerrar_sesion.php">Crear Entradas</a>
        <a class="boton" href="cerrar_sesion.php">Crear Categoria</a>
        <a class="boton" href="cerrar_sesion.php">Mis datos</a>
        <a class="boton" href="cerrar_sesion.php">Cerrar Sesion</a>
        </div>
    <?php endif; ?>
    <div id="registro" class="bloque">
        <h3>Registrar</h3>
        <form action="registro.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido">

            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="password">Password</label>
            <input type="password" name="password">

            <input type="submit" name="submit" value="Registrar">
        </form>
    </div>
</aside>