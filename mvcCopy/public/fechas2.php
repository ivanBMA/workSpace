<?php
    if ($_POST["REQUEST_METHOD"] == "POST") {
        echo "<br> Mostrando fecha" . $_POST["fecha"];
    }else {
        echo "nada";
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
    <h1>Ejemplo fecha</h1>
    <form action="" method="post">
        <label for="">fecha</label>
        <input type="date" name="fecha" id="">
        <input type="submit" value="submit">
    </form>
</body>
</html>