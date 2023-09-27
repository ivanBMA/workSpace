<?php

    session_start();
    $_SESSION["contador"]++;
    $contadorA = $_SESSION["contador"];

    $_SESSION[$array];
    

    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        $_SESSION[$array[ $contadorA]] = $_POST["nombre"];


        if($contadorA >= 5){
            var_dump($_SESSION[$array]);
            session_destroy();
        }else{
            $contadorA++;
            header("Location: http://127.0.0.1/workSpace/ejerBasic/ejer9.php");
        }
           
    }