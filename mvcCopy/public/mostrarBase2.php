<?php
    echo "<h2>BBDD core user</h2>";
    
    
    try {
        require "../core/Model.php";
        Core\Model::db();
        

    }catch (Exception $ex) {
        echo "Fallo en la conexion : " . $ex->getMessage();
    }finally{
        $dbh = null;//Cierro la conexion
        echo "<br>conexion cerrada";
    }
    