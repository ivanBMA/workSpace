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
            $dbh = self::db();//self::db();
            $sql = "SELECT * FROM users WHERE id = :id";
            $statement = $dbh->prepare($sql);

            $statement->bindValue(":id",$id);
            $statement->execute();

            $statement->setFetchMode(PDO::FETCH_CLASS,User::class);
            $user = $statement->fetch(PDO::FETCH_CLASS);

            return $user;
        }//find

        public static function insert(){
            $dbh = self::db();//self::db();
            $sql2 = "INSERT INTO `users` (`id`, `name`, `surname`, `email `, `birthdate`, `password`, `active`, `admin`) 
            VALUES(?,?,?,?,?,?,?,?)";
            $statement2 = $dbh->prepare($sql2);

            $statement2->bindParam(1,$user->id);            
            $statement2->bindParam(2,$user->name);
            $statement2->bindParam(3,$user->surname);
            $statement2->bindParam(4,$user->email);
            $statement2->bindParam(5,$user->birthdate);
            $statement2->bindParam(6,$user->password);
            $statement2->bindParam(7,$user->active);
            $statement2->bindParam(8,$user->admin);
            
            return $statement2->execute();
        }//find

        public static function save($id){
            echo "<br>ACtualizo un registro";
        }//find

        public static function delete($id){
            echo "<br>Borrando un registro";
        }//find

        
    }//Fin clase