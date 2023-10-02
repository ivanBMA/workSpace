<?php

    session_start();
    $contadorA = $_SESSION["contador"];
    $_SESSION["nombres"];

    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        $_SESSION["nombres"] = $_SESSION["nombres"]. $_POST["nombre"] . ",";
        
        if($contadorA == 5){
            echo $_SESSION["nombres"];
            $nombres = explode(",", $_SESSION["nombres"]);
            foreach ($nombres as $value) {
               echo "<br>nombre " . $value;
            }
            session_destroy();
        }else{
            $contadorA++;
            header("Location: http://127.0.0.1/workSpace/ejerBasic/ejer9.php");
        }
           
    }
    