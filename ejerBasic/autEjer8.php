<?php
    //Dado un número constante, por ejemplo el 169 o 193, mostrar la lista de todos sus divisores. Si 
    //no los hay decir que el número es primo.
    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){

        $array = $_POST["nombre"];
        //var_dump($array); <--- Esto indica tambien la posicion y el tipo mientras que el 
        //forEach muestro solo el numero del nombre y el nombre en si.
        
        $contador = 1;
        foreach ($array as $val) {
            
            echo "nombre ". $contador .": " . $val . "<br><hr>";
            $contador++;
        }
           
    }