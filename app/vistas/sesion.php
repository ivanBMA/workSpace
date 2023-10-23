<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vamos a ver el contenido de mi sesion</h1>
    <pre>
        <?php
            var_dump($_SESSION);
        ?>
    </pre>
    <h2>Infomracion de la sesion</h2>
    <h3>Ultimo deseo</h3>
    <p>
        <?php
            if (isset($_SESSION['deseo'])) {
                echo $_SESSION['deseo'];
            }else{
                echo "no hay nigun deseo todavia";
            }
        ?>
    </p>


    <h3>Lista de todos los deseos</h3>
    <ul>
    <?php
        if (isset($_SESSION['deseos'])) {
            foreach ($_SESSION['deseos'] as $value) {
                echo "<li>" . $value . "</li>";
                ?>
                    <a href="../App?method=eliminar">Borrar sesion</a>
                <?php 
            }
        }else{
            echo "<li>no hay nigun deseo todavia</li>";
        }
    ?>
    </ul>
    <a href="../App?method=borrarSesion">Borrar sesion</a>

    <h2>Formulario de deseo</h2>
    <form action="../App?method=guardarSesion" method="post">
        <label for="">nombre: </label>
        <input type="text" name="deseoA" id="">

        <input type="submit" name="envio" value="Enviar">
    </form>

    <li><a href="../App?method=index">Inicio</a></li>
    <li><a href="../App?method=fibonachi">Fibonachi</a></li>
    <li><a href="/ejemplos/18?method=login">potencias2</a></li>
    <li><a href="../App?method=factoriales">factoriales</a></li>
    <li><a href="../App?method=primos">primos</a></li>
    <li><a href="../App?method=version">ver contenido de la secion</a></li>
</body>
</html>