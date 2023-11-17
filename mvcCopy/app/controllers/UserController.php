<?php
    namespace App\Controllers;
    require "../app/models/User.php";
    use App\Models\User;

    class UserController {
         function __construct(){
            echo "<br>Contruyebdi USER controller ....";
        }
        static function index(){
            $users = User::all();
            require "../views/indexUser.php";

        }

        function show(){
            echo "<br> En el show USER";
        }
    }
    