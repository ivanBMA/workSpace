<?php
    session_start();
    echo "------->" . $_SESSION["contador"];
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    11. Construye un array con el nombre de 4 países. Por cada país debes almacenar su moneda y 
    número de habitantes. Muéstralo por pantalla.
    -->

    

    <form name="miformu" action="autEjer11.php" method="post">

        <p>
            <label for='nombre'>Pais :</label>
            <input type='String' name='pais' id='Titulo' required>
        </p>
        <p>
            <label for='nombre'>moneda :</label>
            <input type='String' name='moneda' id='Titulo' required>
        </p>
        <p>
            <label for='nombre'>abitantes :</label>
            <input type='String' name='abitantes' id='Titulo' required>
        </p>
            
        

        <input type="submit" name="envio" value="Enviar">
        
    </form>
</body>
</html>