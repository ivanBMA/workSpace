<?php
    if(isset($_POST["cadena"]) && !empty($_POST["cadena"])){
        $cadena = $_POST["cadena"];
        $arrayA;
        $arrayB;
        //relleno el vector normal.
        for ($i=0; $i < strlen($cadena); $i++) { 
            $arrayA[$i] = $cadena[$i];
        }
        print_r($arrayA);
        echo "<br>";


        //relleno el vector inverso
        for ($i=strlen($cadena) -1; $i >= 0; $i--) { 
            $arrayB[$i] = $cadena[$i];
        }
        print_r($arrayB);


        //comparo el contenido y la posicion de los distintos vectores
        $contador = 0;
        $longitud = strlen($cadena);
        $longitud = $longitud - 1;
        for ($i=0; $i < strlen($cadena); $i++) { 
            if($contador == strlen($cadena)){
                break;
            }
            if(strcmp($arrayA[$i], $arrayB[$longitud - $i]) === 0){
                $contador++;
            }
            
        }


        //Mustro el resultado.
        echo "<br><hr>";
        if($contador == strlen($cadena)){
            echo "<h4 tyle=\"color:blue\">la pabra '" . $cadena . "' es palindroma.<h4>";
        }else {
            echo "<h4 style=\"color:red\">La pabra " . $cadena . " no es palindroma.<h4>";
        }

    }