<?php
    $err = null;
   

    if(isset($_POST["envio"]) && !empty($_POST["envio"])){
        session_start();
        $_SESSION["nombreS"] = $_POST["nombre"];
        /*if($_POST["nombre"] == "admin"){
        }else {
            $err = true;
            //header("Location: http://127.0.0.1/workSpace/ejerAvan/ejercicioAdmin.php");
        }*/
        header("Location: http://127.0.0.1/workSpace/ejerAvan/autEjerAdmin.php");
        //header("HTTP/1.1 307 Temporary Redirect"); Esto es para enviar los datos como post
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
    <!--autEjerAdmin.php <¿= es los mismo que <¿php echo es el interrogante 
    normal pero sino no queda comentado-->
    <?php if ($err) {
        echo "<p style=\"color:red\">Error al introducir credenciales</p>";
    } ?>
    <form name="miformu" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

        <p>
            <label for='nombre'>nombre :</label>
            <input type='String' name='nombre' id='Titulo' required>
        </p>

        <input type="submit" name="envio" value="Enviar">
        
    </form>
</body>
</html>