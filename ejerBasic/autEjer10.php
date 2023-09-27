<?php
/*
    10. Repite el ejercicio 8 creando un array asociativo. Cada posición se llamará: base, escolta, alero, 
    alapivot, pivot. Muestra el resultado con un foreach (clave => valor).
*/

if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){

    $array = $_POST["nombre"];
    //var_dump($array); <--- Esto indica tambien la posicion y el tipo mientras que el 
    //forEach muestro solo el numero del nombre y el nombre en si.
    
    
    foreach($array as $posicion => $nombre) {
        echo "<center><h2>" . $posicion . " = " . $nombre . "</h2><br></center><hr>";
    }

    
       
}