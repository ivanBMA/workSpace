<?php
    class User {
        const USERS = [
            array(1,"pedro"),
            array(7,"elena"),
            array(3,"francisco"),
            array(4,"blanca")
        ];

        //@retur Array con los datos de los usuarios
        public static function all(){
            return User::USERS;
        }//all

        //@retudn Un usuario en particular
        //@param $id
        public static function find($id){
            return User::USERS[$id - 1];
        }//find
    }