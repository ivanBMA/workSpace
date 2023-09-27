<?php
    /*
        11. Construye un array con el nombre de 4 países. Por cada país debes almacenar su moneda y 
        número de habitantes. Muéstralo por pantalla.
    */ 
    session_start();
    $_SESSION["contador"]++;
    $contadorA = $_SESSION["contador"];
    $_SESSION["paises"] = "";
    
    

    if(isset($_POST["pais"]) && !empty($_POST["pais"])){
        if(isset($_POST["moneda"]) && !empty($_POST["moneda"])){
            if(isset($_POST["abitantes"]) && !empty($_POST["abitantes"])){
                
                $arrayPaises = [];
                $pais = $_POST["pais"];
                array_push($arrayPaises, $pais);
                array_push($_SESSION["paises"], $arrayPaises);
                //$_SESSION["paises"] = $_SESSION["paises"] + $_POST["pais"];

                var_dump( $_SESSION["paises"]);
                //$_SESSION["paises"] = array("España", "china", "rusia");
                $_SESSION["monedas"] = $_POST["moneda"];
               // $_SESSION["monedas"] = array("euro", "yeng", "rublo");
                $_SESSION["abitantesS"] = $_POST["abitantes"];
                //$_SESSION["abitantesS"] = array("3000", "4000", "5000");


                if($contadorA > 2){
                   /* for ($i=0; $i < 1; $i++) { 
                        echo $_SESSION["paises"] . " tiene " . $_SESSION["monedas"] 
                        . " los usan " . $_SESSION["abitantesS"] . "<br><hr>";
                    }*/
                    
                    session_destroy();
                }else{
                    $contadorA++;
                    header("Location: http://127.0.0.1/workSpace/ejerBasic/ejer11.php");
                }
            }
        }
    }