<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mosaico{
            float: left;
            width: 30%;
            border:solid 2px black;
            margin-left:2%;
            margin-top:2%;
            height: 230px;
            
        }
        #abajo{
            float: left;
            width: 100%;
        }
        img{
            float:rigth;
            width: 45%;
            height: 100%;
            border-left:solid 2px black;
        }
        .liMostrar{
            float: left;
            width: 50%;
            margin-top:4%;
            margin-left:5%;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

        }
        section{
            float: left;
            width: 100%;
            margin-bottom: 2%;

        }
    </style>
    
</head>
<body>
    
    <?php
        require "header.html";
        require "bdcon.php";

        echo "<section>";
        try {
            $dbh = new PDO(DSN,USERNAME,PASSWORD);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//<-----
            $sqlA = "SELECT * FROM cerveza ";
            $registersA = $dbh->query($sqlA);
            $contador = 0;
            echo "<ul>";
            foreach ($registersA as $row) {
                echo "<div class='mosaico'>";
                echo "<li class='liMostrar'>ID :" . $row["ID"] . "</li>";
                echo "<li class='liMostrar'> Nombre :" . $row["Nombre"] . "</li>";
                echo "<li class='liMostrar'> Tipo :" . $row["Tipo"] . "</li>";
                echo "<li class='liMostrar'> Graduacion de Alcohol: " . $row["GraduacionAlco"] . "%</li>";
                echo "<li class='liMostrar'> Pais: " . $row["Pais"] . "</li>";
                echo "<li class='liMostrar'> Precio: " . $row["Precio"] . "€</li>";
                $contador++;
                echo "<img src='$row[RutaImagen]' alt=''>";
                echo "</div>";

            }
            echo "</ul>";
            
            

        }catch (Exception $ex) {
            echo "Fallo en la conexion : " . $ex->getMessage();
        }finally{
            $dbh = null;//Cierro la conexion
        }
        echo "</section>";
        require_once "footer.html";

    ?>
    
</body>
</html>