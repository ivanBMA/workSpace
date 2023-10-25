<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST["envio"]) && !empty($_POST["envio"])) {
            session_start();
            $item = $_POST["deseo"];
            $_SESSION["lista"][] = $item;
            var_dump($_SESSION);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Formulario de deseos 2</h2>
    <form action="../App/?method=guardarSesion" method="post">
        <label for="">nombre: </label>
        <input type="text" name="deseo" id="">

        <input type="submit" name="envio" value="Enviar">
    </form>
</body>
</html>