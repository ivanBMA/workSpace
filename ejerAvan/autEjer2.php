<?php
   
    if(isset($_POST["envio"]) && !empty($_POST["envio"])){
            $numeroA = $_POST["numeroA"];
            $numeroB = $_POST["numeroB"];
        /*
            echo "no se puede realizar la operacion,introduzca otro numero diferente";
            }else {
                echo $numeroA . " / " . $numeroB . " = " . ($numeroA / $numeroB);
            } */

            try{
                throw new Exception("El divisor es cero");

            }catch(Exception $e){
                echo "Se ha producido una excepcion " . $e->getMessage();
            }finally{
                echo "<br>Esto siempre se ejecuta.";
            }
    }