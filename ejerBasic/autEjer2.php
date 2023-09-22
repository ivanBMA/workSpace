<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
        border:1px solid black;}
    </style>

</head>
<body>
    <?php

    //Crea las variables $nombre, $direccion y $mail y asígnales los valores adecuados. Muestra los 
    //valores en una tabla HTML.

    $nombre = "ivan";
    $direccion = "Rio melon";
    $mail = "ivan@correo.es";

    echo 
        "<table>
            <tr>
                <th>" . $nombre .  "</th>
            </tr>
            <tr>
                <th>" . $direccion .  "</th>
            </tr>
            <tr>
                <th>" . $mail .  "</th>
            </tr>
        </table>";
    ?>
</body>
</html>
