<?php
    require "bdcon.php";
    require "buscarParaActualizar.php";

    try {
        $dbh = new PDO(DSN,USERNAME,PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        /*
            se reciben los datos a cambiar despues con el id recibido se busca
            la fila existente se recogen los datos anteriores y se actualizan con solo los
            datos nuevos y si no se reciven datos nuevos en algun valor se queda como estaba.
        */

        if(isset($_POST["envio"]) && !empty($_POST["envio"])){
            $id = $_POST["ID"];
            $registrosAnteriores =  debolverFila($id);

            foreach ($registrosAnteriores as $row) {
                
                $nombre =  $row["Nombre"]; 
                $Tipo = $row["Tipo"];
                $GraduacionAlco =  $row["GraduacionAlco"];
                $Pais = $row["Pais"]; 
                $Precio = $row["Precio"]; 
                $RutaImagen = $row["RutaImagen"];
            }

            //Compruebo que no esten vacios antes de reasignar.
            if (!empty($_POST["Nombre"])) {
                $nombre = $_POST["Nombre"];
            }
            if (!empty($_POST["Tipo"])) {
                $Tipo = $_POST["Tipo"];
            }
            if (!empty($_POST["GraduacionAlco"])) {
                $GraduacionAlco = $_POST["GraduacionAlco"];
            }
            if (!empty($_POST["Pais"])) {
                $Pais = $_POST["Pais"];
            }
            if (!empty($_POST["Precio"])) {
                $Precio = $_POST["Precio"];
            }
            if (!empty($_POST["RutaImagen"])) {
                $RutaImagen = "img/" . $_POST["RutaImagen"];
            }

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