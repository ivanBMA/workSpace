<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        Construir un array con el quinteto inicial de un equipo de basket. Imprímelo usando etiquetas 
        html de dos formas diferentes:
            a) Indicando solo los nombres.
            b) Indicando la posición del nombre en el array (0, 1, 2, ...).
    -->
    <form name="miformu" action="autEjer8.php" method="post">

        <?php

            for($i = 1; $i <= 5; $i++){
             echo   "<p>
                    <label for='nombre'>nombre " . $i . ":</label>
                    <input type='String' name='nombre[$i]' id='Titulo' required>

                </p>";
            }
        ?>

        <input type="submit" name="envio" value="Enviar">
        
    </form>
</body>
</html>