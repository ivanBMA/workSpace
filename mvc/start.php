<?php
    require_once "Controller.php";
    $app = new Controller();
    //http://mvc.local?method=[index|show]&id?[id_usuario]
    if(isset($_GET["method"])){
        $method = $_GET["method"];
    }else {
        $method = "index";
    }

    try {
        if (method_exists($app,$method)) {   
            $app->$method();
        }else {
            throw new Exception();
        } 
    } catch (Exception $ex) {
        http_response_code(404);
        echo "No se ha encontrado el metodo solicitado.";
    }


    /*
    echo "<h2>Prueba recuperacion</h2>";
    var_dump( User::all());
    echo "<hr>";
    var_dump( User::find(3));
    */
    
    
