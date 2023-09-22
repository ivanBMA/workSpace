<?php
    //Dado un número constante, por ejemplo el 169 o 193, mostrar la lista de todos sus divisores. Si 
    //no los hay decir que el número es primo.
    if(isset($_POST["numero"]) && !empty($_POST["numero"])){
        $contador = 0;
        $numero = $_POST["numero"];
        for ($i = $numero; $i > 0; $i--) {  
            if($numero % $i == 0){
                echo $i . '<br>';
                $contador++;
            }
        }
        if($contador == 2){
            echo $numero . ' <p> es primo</p> <br>';
        }
    }