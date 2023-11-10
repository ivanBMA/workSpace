<?php
    require "bdcon.php";

    try {
        $dbh = new PDO(DSN,USERNAME,PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql2 = "INSERT INTO `testclient` (`ID`, `Name`, `Adress`, `age`, `telephone`) 
            VALUES(?,?,?,?,?)";

        $statement2 = $dbh->prepare($sql2);

        if(isset($_POST["envio"]) && !empty($_POST["envio"])){
            echo "Hola";
            $id = null;
            $nombre = $_POST["nombre"];
            $direccion = $_POST["direccion"];
            $edad = $_POST["años"];
            $telefono = $_POST["telefhono"];


            $statement2->bindParam(1,$id);
            $statement2->bindParam(2,$nombre);
            $statement2->bindParam(3,$direccion);
            $statement2->bindParam(4,$edad);
            $statement2->bindParam(5,$telefono);

            $statement2->execute();
            echo "<h1>Se inserto Correctamente</h1>";
            echo "<a href='public/ejercicioClientes1.html'>regresar</a>";
        }else {
            echo "<h1>No envio nada</h1>";
            echo "<a href='public/ejercicioClientes1.html'>regresar</a>";
        }



    } catch (Exception $ex) {
        echo "Fallo en la conexion : " . $ex->getMessage();
    }finally{
        $dbh = null;//Cierro la conexion
        echo "<br>conexion cerrada";
    }