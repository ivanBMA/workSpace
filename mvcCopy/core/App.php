<?php
/*
http://mvc.local/user/index
http://mvc.local/index.php?url=user/index
la peticion get:
    http://mvc.local/controlador/medodo/arg1/arg
    http://mvc.local/user/show/1

*/
    class App {
        function __construct(){
            isset($_GET["url"]) ? $url = $_GET["url"] : $url = "home";
            //trim --> Quita el caracter al principio y al final
            //explode es como split, te hace un array de las cadenas entre los caracteres '/' por ejmeplo
            $arguments = explode('/',trim($url,'/'));

            //Obtener controlador
            $controllerName = array_shift($arguments);//array_shift -> quita el primer elemento del array
            $controllerName = ucwords($controllerName) . "Controller"; //pone la primeta letra en mayusculas
            
            //Tranformacion para el metodos
            conunt($arguments) ? $method = array_shift($arguments) : $method = "index";//lo mismo
            //$method = conunt($arguments) ?  array_shift($arguments) : $method = "index";//lo mismo
            //$edad = rand(1,99);numero aleatorio
            //echo $edad >= 17 ? "adulto" : "menor";

            //importar el controlador
            $file = "../app/controllers/$controllerName" . ".php";
            if (file_exists($file)) {
                require "$file";
            }else {
                http_response_code(404);
                echo "REcurso no encontrado.";
                die("AdiossSsSSssS");
            }
            //Crear instancia del controlador  y llamar al metodo
            $controllerObject = new $controllerName;
            //Verificar si existe el metodo de la peticion
            if (method_exists($controllerObject,$method)) {
                //Invocamos
                $controllerObject->$method($arguments);
            } 
            else {
                http_response_code(404);
                echo "Funcoin no encontrada.";
                die("AdiossSsSSssS");
            }
        }//Fin_construc
    }//Fin_Clase
    