<?php
    // Imprimir los 10 primeros números de la sucesión Fibonacci. La sucesión comienza con los 
    //números 0 y 1; a partir de estos cada término es la suma de los dos anteriores.

    $valor1 = 0;
    $valor2 = 1;
    echo $valor1 . '<br>';
    
    for ($i=0; $i < 10; $i++) {  
        $temp = $valor1;

        $valor1 = $valor2;
        
        $valor2 = $temp + $valor1;
    
        echo $valor1 . '<br>';
    }