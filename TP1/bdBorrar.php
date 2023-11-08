<?php
    require "bdcon.php";

    try {
        $dbh = new PDO(DSN,USERNAME,PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


        if(isset($_POST["envio"]) && !empty($_POST["envio"])){
            $ID = $_POST["ID"];

            //Esto esta mirando a demo no a cerbezaTown por que lo estaba haciendo en clase.
            $sql2 = "DELETE FROM testclient WHERE ID = $ID;";
            $statement2 = $dbh->prepare($sql2);


            $statement2->execute();
            echo "<h1>Se elimino Correctamente</h1>";
            echo "<a href='ejercicioClientes1.html'>regresar</a>";
        }else {
            echo "<h1>No envio nada</h1>";
            echo "<a href='ejercicioClientes1.html'>regresar</a>";
        }



    } catch (Exception $ex) {
        echo "Fallo en la conexion : " . $ex->getMessage();
    }finally{
        $dbh = null;//Cierro la conexion
        echo "<br>conexion cerrada";
    }