<?php
    function test() {
        $foo = "variable local";

        echo '$foo en el ámbito global: ' . $GLOBALS["plata"] . "<br>";
        echo '$foo en el ámbito global: ' . $GLOBALS["foo"] . "<br>";
        echo '$foo en el ámbito simple: ' . $foo . "<br>";
    }
    
    $foo = "Contenido de ejemplo";
    $plata = "plasta es una mierda aplastada.";
    $carnaza = "la carnaza es carne de caza.";
    test();

    print_r($GLOBALS);


    
