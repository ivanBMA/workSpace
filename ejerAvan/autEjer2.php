<?php
   
    if(isset($_POST["numeroA"]) && !empty($_POST["numeroA"])){
        if(isset($_POST["numeroB"]) && !empty($_POST["numeroB"])){

            $numeroA = $_POST["numeroA"];
            $numeroB = $_POST["numeroB"];
            if($numeroA == 1 ){
                echo "no se puede realizar la operación,introduzca otro numero diferente";
            }else {
                echo $numeroA . " / " . $numeroB . " = " . ($numeroA / $numeroB);
            }
        }   
    }