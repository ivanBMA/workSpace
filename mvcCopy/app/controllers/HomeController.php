<?php
 namespace App\Controllers;
    class HomeController {
         function __construct(){

            echo "<br>Contruyebdi Home controller ....";
        }
        static function index(){
            require "../views/home/header.html";

            echo "<br> En el INDEX de Home";
        }

        function show(){
            echo "<br> En el show Home";
        }
    }
    