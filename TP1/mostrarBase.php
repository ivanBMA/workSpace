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
        /*
            En este fichero reclamo 2 html que uno es el header y el otro el footer
            como esas partes van a estar en todas las vistas los hago por separado y
            los llamo en todos los ficheros.

            En este fichero en concreto tambien llamo a los dados necesarios para hacer 
            la conexion a la base de datos.
        */
        require "header.html";
        require "bdcon.php";

        echo "<section>";
        try {
            $dbh = new PDO(DSN,USERNAME,PASSWORD);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sqlA = "SELECT * FROM cerveza ";//Sentencia que retorna todas  las filas de la tabla.
            $registersA = $dbh->query($sqlA);//Aqui se recojen los datos como un Array

            echo "<ul>";
            foreach ($registersA as $row) {
                echo "<div class='mosaico'>";
                echo "<li class='liMostrar'>ID :" . $row["ID"] . "</li>";
                echo "<li class='liMostrar'> Nombre :" . $row["Nombre"] . "</li>";
                echo "<li class='liMostrar'> Tipo :" . $row["Tipo"] . "</li>";
                echo "<li class='liMostrar'> Graduacion de Alcohol: " . $row["GraduacionAlco"] . "%</li>";
                echo "<li class='liMostrar'> Pais: " . $row["Pais"] . "</li>";
                echo "<li class='liMostrar'> Precio: " . $row["Precio"] . "€</li>";
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