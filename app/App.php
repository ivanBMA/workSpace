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

        function potencias(){
            $array = array();
            for ($i=0; $i <= 11 ; $i++) { 
                $array[] = 2**$i;
            }
            //$this->mostrarArray($array);
            $this->mostrarArrayA($array,"potencias2");

        }

        function mostrarArray($arrayMostrar){
            foreach ($arrayMostrar as $value) {
                echo $value . "<br>";
            }
        }

        function mostrarArrayA($arrayMostrar,$nombreFuncion){
            include "vistas/matematicas.php";
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

        function version(){
            session_start();
            include('vistas/sesion.php');
            /*
            echo "Ver contenido de las cookies<br>";
            echo "<pre>";
            var_dump($_COOKIE);
            echo "<pre>";

            echo "<hr>";

            echo "Ver contenido de la sesion<br>";
            echo "<pre>";
            var_dump($_SESSION);
            echo "<pre>";
        */
        }
        
        function guardarSesion(){
            session_start();
            $lista = $_SESSION['deseos'];
            $lista[] = $_POST['deseoA'];
            $_SESSION['deseos'] = $lista;
            header('Location: http://127.0.0.1/workSpace/App/?method=version');
            /*
            $deseo = $_POST['deseoA'];
            $_SESSION['deseo'] = $_POST['deseoA'];
            echo "sesion " . $_SESSION['deseo'];
            echo "<hr>post  " . $deseo;

            if(isset($_SESSION['deseos'])){
                $deseos = $_SESSION['deseos'];
            }else {
                $deseos = array();
            }
            */
            //$deseos[] = $_POST['deseo'];
            //header('Location: http://127.0.0.1/workSpace/App/?method=version');
        }

        function borrarSesion(){
            sesion_start();
            if (!empty($_SESSION['deseos'])) {
            $datos = json_encode($_SESSION['deseos']);
            setcookie(session_name(),$datos,time()-720000);//Caduco la cookie asociada a la sesion
            unset($_SESSION);//Elimina los datos asociados a la sesion
            session_destroy();//Elimina toda la informacion de sesion del servidor
            header('Location: http://127.0.0.1/workSpace/App/?method=version');
            }else {
                header('Location: http://127.0.0.1/workSpace/App/?method=version');
            }
        }

        function eliminar(){
            session_start();
            $identificador = $_GET["id"];
            unset($_SESSION['deseo'][$identificador]);
            //header('Location: http://127.0.0.1/workSpace/App/?method=version');

        }
    }
    