<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section{
            float: left;
            width: 100%;
            height: 300px;
            margin-bottom: 2%;

        }
        label{
            float:left;
            margin-top:1%;
            width: 200px;
        }
        input{
            float:left;
            width: 100px;
            margin-top:1%;
        }
        form{
            font-size: 20px;
            margin-left:30%;
            margin-top:5%;
        }
        
        select{
            margin-left:18%;
            float:rigth;
            width: 100px;

        }
        #botonEnvio{
            width: 100px;
            background-color: black;
            color:white;
            margin-left:3%;
        }
        #botonEnvio:hover{
            background-color: white;
            color:black;

        }
        
    </style>
    
</head>
<body>
    
    <?php
        require "header.html";
    ?>


    <section>
        
        <form action="bdBorrar.php" method="post">
            
            <label for="">ID que quiere borrar</label>
            <input type="text" name="ID" id="">


            <input id="botonEnvio" type="submit" name="envio" value="envio">
        </form>

    </section>
    

    <?php
        require_once "footer.html";
    ?>
</body>
</html>