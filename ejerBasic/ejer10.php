<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        10. Repite el ejercicio 8 creando un array asociativo. Cada posición se llamará: base, escolta, alero, 
        alapivot, pivot. Muestra el resultado con un foreach (clave => valor).
    -->
    <form name="miformu" action="autEjer10.php" method="post">

        <p>
            <label for='nombre'>nombre base :</label>
            <input type='String' name="nombre[base]" id='Titulo' required>
        </p>
        <p>
            <label for='nombre'>nombre escolta :</label>
            <input type='String' name="nombre[escolta]" id='Titulo' required>
        </p>
        <p>
            <label for='nombre'>nombre alero :</label>
            <input type='String' name="nombre[alero]" id='Titulo' required>
        </p>
        <p>
            <label for='nombre'>nombre alapivot :</label>
            <input type='String' name="nombre[alapivot]" id='Titulo' required>
        </p>
        <p>
            <label for='nombre'>nombre pivot :</label>
            <input type='String' name="nombre[pivot]" id='Titulo' required>
        </p>
            
        

        <input type="submit" name="envio" value="Enviar">
        
    </form>
</body>
</html>