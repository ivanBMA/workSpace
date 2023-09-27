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
    Repite el ejercicio anterior añadiendo los elementos del array uno a uno. Muestra el resultado 
    por pantalla.
    -->

    

    <form name="miformu" action="autEjer9.php" method="post">

        <p>
            <label for='nombre'>nombre :</label>
            <input type='String' name='nombre' id='Titulo' required>

            </p>
            
        

        <input type="submit" name="envio" value="Enviar">
        
    </form>
</body>
</html>