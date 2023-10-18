<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inforamcion de personas y porfesores</h1>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="">nombre</label>
        <input type="text" name="nombre" id="">

        <label for="">edad</label>
        <input type="text" name="edad" id="">

        <button type="submit">Enviar</button>
    </form>
    <?php
        include_once "Persona.php";
        include_once "Profesor.php";

        $p = new Persona("Fernando",25);
        echo "<br>Nombre Persona: " . $p->getNombre();
        echo "<br>" . $p;

        $profe = new Profesor("juan",34,024);
        echo "<br>" . $profe;
        echo "<br>";
        echo "Contrador personas: " . Persona::$contadorPersonas;

    ?>
</body>
</html>
