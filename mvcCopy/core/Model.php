<?php
    namespace Core;
    require "../config/db.php";
    use PDO;
    use PDOException;
    use const DSN;
    use const USUARIO;
    use const PASSWORD;

    //#[\AllowDynamicProperties];
    class Model {
        static function db(){
        
            try {
                $dbh = new PDO(DSN,USUARIO,PASSWORD);
                $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $ex) {
                echo "Fallo en la conexion : " . $ex.getMessage();
            }

            return $dbh;//devuelvo la conexion a BbDd <- Base de datos
        }//fin_db
        
    }