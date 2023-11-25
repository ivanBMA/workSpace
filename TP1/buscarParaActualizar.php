<?php

    
    function debolverFila($id){
        try {
            $dbh = new PDO(DSN,USERNAME,PASSWORD);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//<-----
            $sqlA = "SELECT * FROM cerveza WHERE ID = $id";
            $registersB = $dbh->query($sqlA);
            $contador = 0;
                
            return $registersB;
    
        }catch (Exception $ex) {
            echo "Fallo en la conexion : " . $ex->getMessage();
        }finally{
            $dbh = null;//Cierro la conexion
        }
    }
    
