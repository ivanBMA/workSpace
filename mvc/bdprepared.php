<?php
    require "bdcon.php";
    echo "<h2>BBDD Sentencias</h2>";
    /*
    1- Preparar la sentencia -> prepare :
        - named placeHolder : :nomVariable
        - quiestion mark placeHolder : ?
    2-  Vincular valores a las variables
        - BindParam
        - bindValue
    3- Ejcutar la sentencia -> execute
    */
    try {
        $dbh = new PDO(DSN,USERNAME,PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //$sqlInsertar = "INSERT INTO `testclient` (`ID`, `Name`, `Adress`, `age`, `telephone`)  VALUES (null, 'jacinto', 'jacinto@gmail.com', '87', '14896554')";
        //Fomra A NAME PLACEHOLDER
        $sql = "INSERT INTO `testclient` (`ID`, `Name`, `Adress`, `age`, `telephone`) 
            VALUES(:ID,:Name,:Adress,:age,:telephone)";
        //Forma B QUIESTIN MARK
        $sql2 = "INSERT INTO `testclient` (`ID`, `Name`, `Adress`, `age`, `telephone`) 
            VALUES(?,?,?,?,?)";

        $statement = $dbh->prepare($sql);
        $statement2 = $dbh->prepare($sql2);
        //Opcion 1: bindParam -> variable que es una referencia.
        
        $id = null;
        $nombre = "Paco";
        $direccion = "Avenida Navarra";
        $edad = 20;
        $telefono = 976487526;
        //con QUIETIOn Mark PLACEHOLDER
        $statement2->bindParam(1,$id);
        $statement2->bindParam(2,$nombre);
        $statement2->bindParam(3,$direccion);
        $statement2->bindParam(4,$edad);
        $statement2->bindParam(5,$telefono);

        $statement2->execute();

        //Tiene que llamarse igual que en values
        /*
        $statement->bindParam(":ID",$id);
        $statement->bindParam(":Name",$nombre);
        $statement->bindParam(":Adress",$direccion);
        $statement->bindParam(":age",$edad);
        $statement->bindParam(":telephone",$telefono);
        //Opcion 2
        $statement2->bindValue(":ID",$id);
        $statement2->bindValue(":Name",$nombre);
        $statement2->bindValue(":Adress",$direccion);
        $statement2->bindValue(":age",$edad);
        $statement2->bindValue(":telephone",$telefono);
        //opcion 3
        $statement2->bindValue(1,$id);
        $statement2->bindValue(2,$nombre);
        $statement2->bindValue(3,$direccion);
        $statement2->bindValue(4,$edad);
        $statement2->bindValue(5,$telefono);
        */
        
        //$statement2->execute();

        echo "<h2>Se inserto correctamente</h2>";

    } catch (Exception $ex) {
        echo "Fallo en la conexion : " . $ex->getMessage();
    }finally{
        $dbh = null;//Cierro la conexion
        echo "<br>conexion cerrada";
    }