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
        input{
            margin-top:30%;
            width: 80%;
            background-color:white;
            border-radius: 20%;
        }
        input:hover{
            background-color:red;
            border-radius: 100%;
            color:white;
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
        .izquierda{
            width: 49%;
            float:left;
            background-color:red;
            height: 95%;
            border:solid 2px white;
            border-radius:10%;
            text-align: center;

        }
        .derecha{
            width: 49%;
            float:right;
            background-color:blue;
            color:white;
            height: 95%;
            border:solid 2px white;
            border-radius:10%;
            text-align: center;
        }
        
    </style>
</head>
<body>
    <!--
    si selecciono un deporte que contiene la letra n me rediriga a favsport.php 
    y me muestre los seleccionados, si no contiene los muestre en la misma paguina.
    -->
    <header><h2>Ejercicio 5 A</h2></header>
    

    <section>
        <div class="izquierda">
            <form name="miformu" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <h3>Equipo de fultbol - Select</h3>
            <hr>
            <select name="deportes[]" multiple="multiple" id="" size=3>
                    <option value="Tenis">Tenis</option>
                    <option value="Fronton">Fronton</option>
                    <option value="Sky">Sky</option>
                    <option value="Baloncesto">Baloncesto</option>
            </select>

            <br>
            <hr>
            <input type="submit" name="envio" value="Enviar">
        </div>
        <div class="derecha">
            <?php
                    //if($_server['REQUES_METHOD'] == 'POST') si es get es que no hubo envio
                    if(isset($_POST["envio"]) && !empty($_POST["envio"])){
                        if (isset($_POST["deportes"]) && !empty($_POST["deportes"])) {
                            $contieneN = false;
                            foreach ($_POST["deportes"] as  $value) {
                                //strpos($value, "n") contiene la n true o false.
                                if(strpos($value, "n")){
                                    $contieneN = true;
                                }
                                
                            }
                            

                            if ($contieneN == true) {
                                //Enviar variables de un fichero php a otro
                                header("HTTP/1.1 307 Temporary Redirect");
                                header("Location: http://127.0.0.1/workSpace/ejerAvan/favsport.php");
                                
                            }else {
                                echo "Tu deportes faboritos son : ";
                                foreach ($_POST["deportes"] as  $value) {
                                    echo " " . $value;
                                }
                            }
                        }else {
                            # code...
                            echo "<p>No hay ningun deporte elejido</p>";
                        }
                        
                        
                    }
            ?>
        </div>
        

    </section>
    
    <footer></footer>

</body>
</html>