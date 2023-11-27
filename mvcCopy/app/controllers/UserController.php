<?php
    namespace App\Controllers;
    require "../app/models/User.php";
    use App\Models\User;

    class UserController {
         function __construct(){
        }
        static function index(){
            $users = User::all();
            require "../views/indexUser.php";

        }

        function show($args){
            $id = (int)$args[0];
            $userA = User::find($id);
            require "../views/showUser.php";
        }

        function create(){
            require "../views/createUser.php";
        }

        function store(){
            $user = new User();

            $user->id = NULL;
            $user->name = $_REQUEST["name"];
            $user->surname = $_REQUEST["surname"];
            $user->email = $_REQUEST["email"];
            $user->birthdate = $_REQUEST["birthdate"];
            $user->password = $_REQUEST["password"];
            $user->active = $_REQUEST["active"];
            $user->admin = $_REQUEST["admin"];

            $user->insert();
            header("Location: /user");
        }

        function updateA(){
            require "../views/updateUser.php";
        }

        function updateB(){
            $user = new User();
            $id = $_REQUEST["id"];
            $user = User::find($id);
            
            $user->id = $_REQUEST["id"];
            if (!empty($_REQUEST["name"])) {
                $user->name = $_REQUEST["name"];
            }
            if (!empty($_REQUEST["surname"])) {
                $user->surname = $_REQUEST["surname"];
            }
            if (!empty($_REQUEST["email"])) {
                $user->email = $_REQUEST["email"];
            }
            if (!empty($_REQUEST["birthdate"])) {
                $user->birthdate = $_REQUEST["birthdate"];
            }
            if (!empty($_REQUEST["password"])) {
                $user->password = $_REQUEST["password"];
            }
            if (!empty($_REQUEST["active"])) {
                $user->active = $_REQUEST["active"];
            }
            if (!empty($_REQUEST["admin"])) {
                $user->admin = $_REQUEST["admin"];
            }

            $user->save();
            header("Location: /user");
        }

        function borrar($args){
            $id = (int)$args[0];
            $userA = new User();
            $userA->id = $id;
            $userA->delete();
            header("Location: /user");
        }

        function contraseñaDefault($args){
            $id = (int)$args[0];
            $userA = new User();
            $userA = User::find($id);
            //$userA->setPassword($userA->password);//hay que enviar la contraseña
            $userA->setPassword("paco");//hay que enviar la contraseña

            header("Location: /user");
        }

        function allContraseñaDefault(){
            $usuarios = User::all();
            $numeroUsuarios = count($usuarios);

            for ($i=0; $i <  $numeroUsuarios ; $i++) { 
                $user = User::find($usuarios[$i]->id);
                echo "esto "  . $user->password .  "<br><hr>";
                //$user->setPassword($user->password);
                $user->setPassword("juan");
            }

            header("Location: /user");
        }

    }
    