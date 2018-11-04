<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Video-Juegos</title>
</head>
<body>
    <!-- Cabecera -->
    <header>
        <div id="cabecera">
            <a href="index.php">Blog de Videojuegos</a>
        </div>
        <!-- MENU -->
        <nav id="menu">
            <ul>
                <li><a href="index.php"></a>Inicio</li>
                <li><a href="">Categoria 1</a></li>
                <li><a href="">Categoria 2</a></li>
                <li><a href="">Categoria 3</a></li>
                <li><a href="">Categoria 4</a></li>
                <li><a href="">Sobre mi</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <div id="contenedor">

    <!-- Barra Lateral -->
    <aside id="sidebar">
        <div id="login" class="bloque">
            <h3>Identificate</h3>
            <form action="login.php" method="post">
                <label for="email">Email</label>
                <input type="email" name="email">
                <label for="password">Email</label>
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

                <label for="password">Email</label>
                <input type="password" name="password">

                <input type="submit" value="Registrar">
            </form>
        </div>
    </aside>

        <!-- Caja Principal -->

        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada" >
                <h2>Titulo de la entrada</h2>
                <p>
                    Descripcion de la entrada
                </p>
            </article>
            <article class="entrada" >
                <h2>Titulo de la entrada</h2>
                <p>
                    Descripcion de la entrada
                </p>
            </article>
            <article class="entrada" >
                <h2>Titulo de la entrada</h2>
                <p>
                    Descripcion de la entrada
                </p>
            </article>
        </div>


    </div>

    <footer>
        <p>Desarrollado por David Huamaccto Chate &copy; 2018 </p>
    </footer>

    <!-- Pie de página -->
</body>
</html>