<?php

    session_start();
    $_SESSION["contador"]++;
    $contadorA = $_SESSION["contador"];
    $_SESSION["nombres"] = [];

    

    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        
        array_push($_SESSION["nombres"], $_POST["nombre"]);

        if($contadorA >= 5){
            var_dump($_SESSION["nombres"]);
            
            $contador = 1;
            foreach ($_SESSION["nombres"] as $val) {
                
                echo "nombre ". $contador .": " . $val . "<br><hr>";
                $contador++;
            }

        }else{
            $contadorA++;
            header("Location: http://127.0.0.1/workSpace/ejerBasic/ejer9.php");
        }
           
    }