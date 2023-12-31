<?php
    namespace App\Models;
    require "../core/Model.php";
    use Core\Model;
    use PDO;
    use DateTime;

    class User extends Model {

        public function __construct(){
            $this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate);

        }

        //@retur Array con los datos de los usuarios
        public static function all(){
            
            $sql = "SELECT * FROM users";
            $dbh = User::db();//self::db();

            $statement = $dbh->query($sql);
            $statement->setFetchMode(PDO::FETCH_CLASS,User::class);
            $users = $statement->fetchAll(PDO::FETCH_CLASS,User::class);

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

        public function insert(){
            $dbh = self::db();//self::db();
            $sql2 = "INSERT INTO `users` (`id`, `name`, `surname`, `email`, `birthdate`, `password`, `active`, `admin`) 
            VALUES(?,?,?,?,?,?,?,?)";
            $statement2 = $dbh->prepare($sql2);
            $nulo = null;

            $statement2->bindParam(1,$nulo);            
            $statement2->bindParam(2,$this->name);
            $statement2->bindParam(3,$this->surname);
            $statement2->bindParam(4,$this->email);
            $statement2->bindParam(5,$this->birthdate);
            $statement2->bindParam(6,$this->password);
            $statement2->bindParam(7,$this->active);
            $statement2->bindParam(8,$this->admin);
            
            return $statement2->execute();
        }//find

        public function save(){
            $dbh = self::db();//self::db();
            $sql2 = "UPDATE  users SET name = ?,surname = ?, email = ?, birthdate = ?, password = ?, active = ?, admin = ? 
            WHERE ID = ?";
            $statement2 = $dbh->prepare($sql2);
            $nulo = null;

            $statement2->bindParam(1,$this->name);
            $statement2->bindParam(2,$this->surname);
            $statement2->bindParam(3,$this->email);
            $statement2->bindParam(4,$this->birthdate);
            $statement2->bindParam(5,$this->password);
            $statement2->bindParam(6,$this->active);
            $statement2->bindParam(7,$this->admin);
            $statement2->bindParam(8,$this->id);

            
            return $statement2->execute();

        }//find

        public function delete(){
            $dbh = self::db();//self::db();
            $sql2 = "DELETE FROM users WHERE ID = ?";
            $statement2 = $dbh->prepare($sql2);

            $statement2->bindParam(1,$this->id);
            
            return $statement2->execute();
        }//find

        public function setPassword($password){
            $dbh = self::db();//self::db();
            $password = password_hash($password,PASSWORD_BCRYPT);

            $sql2 = "UPDATE users SET password = ? WHERE id = ?";
            $statement2 = $dbh->prepare($sql2);

            $statement2->bindParam(1,$password);
            $statement2->bindParam(2,$this->id);

            
            return $statement2->execute();
        }//find

        public function passwordVerify($password,$user){
            return password_verify($password, $user->password);
        }//find

        
    }//Fin clase