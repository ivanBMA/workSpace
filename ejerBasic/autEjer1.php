<?php
    
    //Escribe un programa que utilice las variables $x y $y. Asígnales los valores 144 y 999 
    //respectivamente. A continuación, muestra por pantalla el valor de cada variable, la suma, la 
    //resta, la división y la multiplicación.
    
    $x = 144;
    $y = 999;

    echo "X = " . $x . "<br>";
    echo "Y = " . $y . "<br>";
    echo "<hr>";

    $suma = $x + $y;
    $resta = $x - $y;

    echo "X + Y = " . $suma . "<br>";
    echo "X - Y = " . $resta . "<br>";
    echo "X * Y = " . $x * $y . "<br>";
    echo "X / Y = " . $x / $y . "<br>";
