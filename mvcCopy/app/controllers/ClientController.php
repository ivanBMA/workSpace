<?php
 namespace App\Controllers;

    class ClientController {
         function __construct(){
            echo "<br>Contruyebdi Client controller ....";
        }
        static function index(){
            echo "<br> En el INDEX de Client";
        }

        function show(){
            echo "<br> En el show Client";
        }
    }
    