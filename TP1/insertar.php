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
            height: 300px;
            
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
            height: 300px;
            margin-bottom: 2%;

        }
        label{
            float:left;
            width: 100px;
        }
        form{
            font-size: 30px;
            margin-left:30%;
            margin-top:5%;
        }
        input{
            margin-left:18%;
            float:rigth;
            width: 100px;

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
        /*
            Aqui solo hay una tabla donde el usuario introduce los datos y se 
            reenvian a bdInsertar donde se recibiran los datos y se ejecutara
            la sentencia sql.
        */
    ?>
    

    <section>
        <form action="bdInsertar.php" method="post">
            
            <label for="">Nombre</label>
            <input type="text" name="Nombre" id="" required  maxlength="50" size="50" >
            <br>
            <label for="">Tipo</label>
            <select name="Tipo" id="" >
                <option value="Tostada">Tostada</option>
                <option value="Rubia">Rubia</option>
                <option value="De trigo">De trigo</option>
                <option value="Negra">Negra</option>
            </select>
            <br>
            <label for="">GraduacionAlco</label>
            <input type="number" name="GraduacionAlco" required id="" min="0">
            <br>
            <label for="">Pais</label>
            <input type="text" name="Pais" id="" required maxlength="60" size="60">
            <br>
            <label for="">Precio</label>
            <input type="number" name="Precio" required id="" min="0">
            <br>
            <label for="">imagen</label>
            <input type="file" name="RutaImagen" accept=".jpg, .png" required id="" maxlength="100" size="100" >
            <br>
            <input id="botonEnvio" type="submit" name="envio" value="envio">
        </form>

    </section>
    

    <?php
        require_once "footer.html";
    ?>
</body>
</html>