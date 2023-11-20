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

            $user->id = null;
            $user->name = $_REQUEST["name"];
            $user->surname = $_REQUEST["surname"];
            $user->email = $_REQUEST["email"];
            $user->birthdate = $_REQUEST["birthdate"];
            $user->password = $_REQUEST["password"];
            $user->active = $_REQUEST["active"];
            $user->admin = $_REQUEST["admin"];

            User::insert($user);
        }
    }
    