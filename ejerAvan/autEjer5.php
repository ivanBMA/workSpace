<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            width: 100%;
            height: 50px;
            background-color: black;
        }
        section{
            width: 100%;
            height: 350px;
        }
        footer{
            width: 100%;
            height: 50px;
            background-color: black;
        }
        
        input:hover{
            background-color:red;
            border-radius: 100%;
        }
        option:hover{
            background-color:green;
        }
        h3{
            color: blue;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: large;
        }
        h2{
            color:white;
            text-align: center;
            font-size: 40px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
    </style>
</head>
<body>
    <!--
    4 - Realiza un formulario en el que mediante un lista desplegable selecciones tu deporte
        preferido y posteriormente muestres la opción seleccionada.
    -->
    <header><h2>Ejercicio 5</h2></header>
    

    <section>
        <?php
            if(isset($_POST["deportes"]) && !empty($_POST["deportes"])){
                echo "Tu deportes faboritos son : ";
                foreach ($_POST["deportes"] as  $value) {
                    echo " " . $value;
                }
            }else {
                echo "<a href='ejer4.html'>Regresar</a>";
            }
        ?>
    </section>
    
    <footer></footer>

</body>
</html>