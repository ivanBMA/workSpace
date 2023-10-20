<?php
/*
Index (index). Presentación de la App y enlaces.
    Fibonacci (fibonacci). Muestra la serie de Fibonacci. Debe mostrar todos los términos menores a un 
        millón.
    Potencias de 2 (potencias2). Debe mostrar los valores de las potencias de 2 hasta 2 
        elevado a 24 (nº de colores True Color, por ejemplo).
    Factorial (factoriales). Debe mostar los factoriales desde 1 hasta n de tal manera que el último 
        término sea el más próximo cercano al millón.
    Nº. primos (primos). Debe encontrar los números primos entre 1 y 10.000.
*/
    class App{
        function __construct(){
        }

        function run(){
            if (isset($_GET['method'])) {
                $method = $_GET['method'];
              } else {
                $method = 'index';
              }
              $this->$method();
        }

        function index(){
            //Bienvenida ala aplicacion
            //echo "<br>Aqui pondriamos la bienvenida";
            include "vistas/index.php";

        }

        function fibonachi(){
            $valor1 = 0;
            $valor2 = 1;
            echo $valor1 . '<br>';
            
            for ($i=0; $i < 100000; $i++) {  
                $temp = $valor1;

                $valor1 = $valor2;
                
                $valor2 = $temp + $valor1;
            
                if ($valor1 < 1000000) {
                    echo $valor1 . '<br>';
                }else {
                    break;
                }
            }
        }

        function factoriales(){
            for ($i=0; $i < 20; $i++) { 
                if ($i % 2 == 0) {
                    echo "<br>factorial de 2 : " . $i;
                }
            }
        }

        function esPrimo($params) {
            $resultado = true;
            if ($params == 1) {
                $resultado =  false;
            }else{
                for ($i = 2; $i < $params; $i++) {
                    if ($params % $i === 0) {
                        return $resultado =  false;
                    }
                }
            }
           

            return $resultado;
        }

        function primos(){
            $numerosPrimos = array();

            for ($i=0;$i < 10000; $i++){
                //-----------------------------------
                $resultado = true;
                if ($i == 1) {
                    $resultado =  false;
                }else{
                    for ($i = 2; $i < $i; $i++) {
                        if ($i % $i === 0) {
                            return $resultado =  false;
                        }
                    }
                }
                //-----------------------------------
                if ($resultado == true) {
                    array_push($numerosPrimos,$i);
                }
            }

            foreach ($numerosPrimos as $value) {
                echo "<br>Es primo " . $value;
            }
        }

        function login(){
            //Mostrar pantalla de login
            echo "<br>Aqui pondriamos el Login";
        }
    }
    