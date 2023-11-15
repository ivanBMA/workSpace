<?php
 namespace App\Controllers;

    class UserController {
         function __construct(){
            echo "<br>Contruyebdi USER controller ....";
        }
        static function index(){
            require "../views/indexUser.php";

        }

        function show(){
            echo "<br> En el show USER";
        }
    }
    