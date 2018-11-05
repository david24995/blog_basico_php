<aside id="sidebar">
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

            <input type="submit" value="Registrar">
        </form>
    </div>
</aside>