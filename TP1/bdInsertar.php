<?php
    require "bdcon.php";

    try {
        $dbh = new PDO(DSN,USERNAME,PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql2 = "INSERT INTO `cerveza` (`ID`, `Nombre`, `Tipo`, `GraduacionAlco`, `Pais`, `Precio`, `RutaImagen`)
            VALUES(?,?,?,?,?,?,?)";

        $statement2 = $dbh->prepare($sql2);

        if(isset($_POST["envio"]) && !empty($_POST["envio"])){
            echo "Hola";
            $id = null;//El id se envia null por que es autoIncremental.
            $nombre = $_POST["Nombre"];
            $Tipo = $_POST["Tipo"];
            $GraduacionAlco = $_POST["GraduacionAlco"];
            $Pais = $_POST["Pais"];
            $Precio = $_POST["Precio"];
            $RutaImagen = "img/" . $_POST["RutaImagen"];//se añade img/ por que hay se encuentran las imagenes.



            $statement2->bindParam(1,$id);
            $statement2->bindParam(2,$nombre);
            $statement2->bindParam(3,$Tipo);
            $statement2->bindParam(4,$GraduacionAlco);
            $statement2->bindParam(5,$Pais);
            $statement2->bindParam(6,$Precio);
            $statement2->bindParam(7,$RutaImagen);

            $statement2->execute();
            //una vez inserta la nueva fila redirecciona para que el usuario vea 
            //que se ha insertado con exito
            header("Location: mostrarBase.php");

        }else {
            echo "<h1>No envio nada</h1>";
            echo "<a href='insertar.php'>regresar</a>";
        }



    } catch (Exception $ex) {
        echo "Fallo en la conexion : " . $ex->getMessage();
    }finally{
        $dbh = null;//Cierro la conexion
        echo "<br>conexion cerrada";
    }