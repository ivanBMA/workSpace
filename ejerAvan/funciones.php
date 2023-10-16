<?php

echo "<h2>Funciones php</h2>";

function sumar($numA, $numB){
    $suma = $numA + $numB;

    static $contador = 0;//Se guarda la variable aunque la funcion alla finalizado.
    echo "<br> Contador vale " . ++$contador;
    global $varGlobal;//La variable global funciona para poder cambiar el valor
    $varGlobal = 123456;// de la variable en el main estando en la funcion.

    return $suma;
}



echo "<p>Funcion suma</p>";
$dato = sumar(4,6);//Puedes poner muchos mas valores de los que pide pero los ignorara.
echo "<p>Resulado suma $dato </p><hr>";

$dato = sumar(5,6);//Puedes poner muchos mas valores de los que pide pero los ignorara.
echo "<p>Resulado suma $dato </p><hr>";

$dato = sumar(7,6);
echo "<p>Resulado suma $dato </p><hr>";

//No cambia el valor 
$varGlobal = 1;
echo "<p>Resulado varGlobal pre funcion $varGlobal </p>";
$dato = sumar(4,5);
echo "<p>Resulado varGlobal pos funcion $varGlobal </p><hr>";

function aumentarSueldo(&$sueldoA){//el "&" funciona para que cambies la variable del main estando en la funcion
    $sueldoA *= 3;
}

$sueldo = 1000;
aumentarSueldo($sueldo);
echo "<p>El sueldo vale $sueldo </p>";