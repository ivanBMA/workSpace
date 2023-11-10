<?php
    
    require "../bdcon.php";
    echo "<h2>Bbbdd con PHP</h2>";


    try {
        $dbh = new PDO(DSN,USERNAME,PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//<-----

        //consultaEjercicio
        $sqlA = "SELECT * FROM testclient ";
        echo "<h2>consulta Ejercicio 1</h2>";
        $registersA = $dbh->query($sqlA);
        $contador = 0;
        foreach ($registersA as $row) {
            echo "ID :" . $row["ID"];
            echo "| name :" . $row["Name"];
            echo "| Adress " . $row["Adress"];//
            echo "| age " . $row["age"];
            echo "| telephone " . $row["telephone"] . "<br><hr>";
            $contador++; 
        }
        
        echo "<h2>Filas devueltas ".$contador." </h2>";
        
        $sqlInsertar = "INSERT INTO `testclient` (`ID`, `Name`, `Adress`, `age`, `telephone`)  VALUES (null, 'jacinto', 'jacinto@gmail.com', '87', '14896554')";
        //$stmt = $dbh->prepare($sqlInsertar);
        //$stmt->execute();
        $dbh->exec($sqlInsertar);

    }catch (Exception $ex) {
        echo "Fallo en la conexion : " . $ex->getMessage();
    }finally{
        $dbh = null;//Cierro la conexion
        echo "<br>conexion cerrada";
    }
    