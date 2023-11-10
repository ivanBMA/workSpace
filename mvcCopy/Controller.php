<?php
    require_once "User.php";
    class Controller {
        //Recupera todos los usuarios.
        //Invoca a vista con todos los usuarios.
        public static function index(){
            $arrayUser = User::all();
            require "views/index.php";
        }

        public static function show(){
            $id = $_GET["id"];
            $user = User::find($id);

            require "views/show.php";
        }
    }