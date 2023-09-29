<?php
    if(isset($_POST["cadena"]) && !empty($_POST["cadena"])){
        $cadena = $_POST["cadena"];
        $arrayA;
        $arrayB;
        for ($i=0; $i < strlen($cadena); $i++) { 
            $arrayA[$i] = $cadena[$i];
        }
        print_r($arrayA);
        echo "<br>";
        for ($i=strlen($cadena) -1; $i >= 0; $i--) { 
            $arrayB[$i] = $cadena[$i];
        }
        print_r($arrayB);

        $contador = 0;
        for ($i=0; $i < strlen($cadena); $i++) { 
            for ($e = strlen($cadena) -1; $e >= 0; $e--) { 
                if(strcmp($arrayA[$i], $arrayB[$e]) == 0){
                    $contador++;
                }
            }
            break;
        }

        echo "<br><hr>";
        if($contador == strlen($cadena)){
            echo "<h4>la pabra '" . $cadena . "' es palindroma.<h4>";
        }else {
            echo "<h4>La pabra " . $cadena . " no es palindroma.<h4>";
        }

    }