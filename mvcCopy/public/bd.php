<?php
    //http://127.0.0.1/phpmyadmin/
    //dataSourceName -> dsn : driver + host; dbname
    //print_r(PDO::getAvailableDrivers());Esto es para ver el driver que esta usando
    /*
        Crear una base de datos de nombre testclient
        crear una tabla clients con 
            ID -> Autoincremental(Primary KEY)
            Name
            Adress
            age
            telephone
            
        crear 10 filas en la tabla

        Recuperar la informacion de la tabla
        Mostrar el numero de filas devueltas por la consulta de recuperacion
        insertar un fila -> averiguar el ultimo id insertado en la bbdd
    */
    require "../bdcon.php";
    echo "<h2>Bbbdd con PHP</h2>";


    try {
        $dbh = new PDO(DSN,USERNAME,PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//<-----
        $sql = "SELECT * FROM city ";

        //consultaEjercicio
        $sqlA = "SELECT * FROM testclient ";
        echo "<h2>consulta Ejercicio 1</h2>";
        $registersA = $dbh->query($sqlA);
        $contador = 0;
        foreach ($registersA as $row) {
            echo "ID :" . $row["ID"];
            echo "| name :" . $row["Name"];
            echo "| Adress " . $row["Adress"];
            echo "| age " . $row["age"];
            echo "| telephone " . $row["telephone"] . "<br><hr>";
            $contador++; 
        }
        
        echo "<h2>Filas devueltas ".$contador." </h2>";
        
       
        echo "Ultimo id " . $dbh->lastInsertId();

        //Forma 1 query
        echo "<h2>Forma 1</h2>";
        $register = $dbh->query($sql);
        foreach ($register as $row) {
            echo "ID :" . $row["ID"];
            echo "| name :" . $row["name"];
            echo "| district " . $row["district"];
            echo "| Population " . $row["Population"] . "<br><hr>";
            
        }

        //Forma 2: PREPARE + EXECUTE
        echo "<h2>Forma 2</h2>";
        $stmnt = $dbh->prepare($sql);
        $stmnt->execute();
            //recojer resultados
            echo "<h3>opcion A</h3>";
            //OPCION A: fetchAll como un array asociativo
            /*
            $registers = $stmnt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($registers as $row) {
                echo "ID :" . $row["ID"];
                echo "| name :" . $row["name"];
                echo "| district " . $row["district"];
                echo "| Population " . $row["Population"] . "<br><hr>";
                
            }
            */
            echo "<h3>opcion B</h3>";
            //OPCION V: fetchAll como un objeto
            $registers = $stmnt->fetchAll(PDO::FETCH_OBJ);
            foreach ($registers as $row) {
                echo "ID :" . $row->ID;
                echo "| name :" . $row->name;
                echo "| district " . $row->district;
                echo "| Population " . $row->Population . "<br><hr>";
                
            }

    }catch (Exception $ex) {
        echo "Fallo en la conexion : " . $ex->getMessage();
    }finally{
        $dbh = null;//Cierro la conexion
        echo "<br>conexion cerrada";
    }
    