<?php
    //http://127.0.0.1/phpmyadmin/
    //dataSourceName -> dsn : driver + host; dbname
    $dsn = "mysql:host=db;dbname=demo";
    $username = "root";
    $password = "password";
    try {
        $dbh = new PDO();
    } catch (\Throwable $th) {
        
    }