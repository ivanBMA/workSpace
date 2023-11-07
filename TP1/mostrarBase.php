<?php
    require "bdcon.php";
    echo "<h2>Bbbdd con PHP</h2>";


    try {
        $dbh = new PDO(DSN,USERNAME,PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//<-----
        $sqlA = "SELECT * FROM cerveza ";
        echo "<h2>consulta Ejercicio 1</h2>";
        $registersA = $dbh->query($sqlA);
        $contador = 0;
        foreach ($registersA as $row) {
            echo "ID :" . $row["ID"];
            echo "| Nombre :" . $row["Nombre"];
            echo "| GraduacionAlcohol " . $row["GraduacionAlco"];
            echo "| Pais " . $row["Pais"];
            echo "| Pais " . $row["RutaImagen"];
            echo "| Precio " . $row["Precio"] . "<br><hr>";
            $contador++; 
        }
        
        echo "<h2>Filas devueltas ".$contador." </h2>";
        echo "<a href='ejercicioClientes1.html'>regresar</a>";
        

    }catch (Exception $ex) {
        echo "Fallo en la conexion : " . $ex->getMessage();
    }finally{
        $dbh = null;//Cierro la conexion
        echo "<br>conexion cerrada";
    }
    