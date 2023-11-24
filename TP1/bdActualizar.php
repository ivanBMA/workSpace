<?php
    require "bdcon.php";

    try {
        $dbh = new PDO(DSN,USERNAME,PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        

        if(isset($_POST["envio"]) && !empty($_POST["envio"])){
            $id = $_POST["ID"];
            $nombre = $_POST["Nombre"];
            $Tipo = $_POST["Tipo"];
            $GraduacionAlco = $_POST["GraduacionAlco"];
            $Pais = $_POST["Pais"];
            $Precio = $_POST["Precio"];
            $RutaImagen = "img/" . $_POST["RutaImagen"];

            $sql2 = "UPDATE  cerveza SET Nombre = ?,Tipo = ?, GraduacionAlco = ?, Pais = ?, Precio = ?, RutaImagen = ? WHERE ID = ?";
            $statement2 = $dbh->prepare($sql2);


            $statement2->bindParam(1,$nombre);
            $statement2->bindParam(2,$Tipo);
            $statement2->bindParam(3,$GraduacionAlco);
            $statement2->bindParam(4,$Pais);
            $statement2->bindParam(5,$Precio);
            $statement2->bindParam(6,$RutaImagen);
            $statement2->bindParam(7,$id);

            $statement2->execute();
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