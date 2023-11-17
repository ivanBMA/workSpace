<?php
    namespace App\Models;
    require "../core/Model.php";
    use Core\Model;
    use PDO;

    class User extends Model {

        //@retur Array con los datos de los usuarios
        public static function all(){
            
            $sql = "SELECT * FROM users";
            $dbh = User::db();//self::db();
            $statement = $dbh->query($sql);
            $statement->setFetchMode(PDO::FETCH_CLASS,User::class);

            $users = $statement->fetchAll(PDO::FETCH_CLASS);

            return $users;
            
        }//all

        //@retudn Un usuario en particular
        //@param $id
        public static function find($id){
            $sql = "SELECT * FROM users WHERE id = $id";
            $dbh = User::db();//self::db();
            $statement = $dbh->query($sql);
            return $statement;
        }//find

        public static function insert(){
            echo "<br>insertando un registro";
        }//find

        public static function save($id){
            echo "<br>ACtualizo un registro";
        }//find

        public static function delete($id){
            echo "<br>Borrando un registro";
        }//find

        
    }//Fin clase