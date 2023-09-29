<?php


if(isset($_POST["valor"]) && !empty($_POST["valor"])){
    include("matematicas.php");
    $valores = $_POST["valor"];
    $resultado = MATEMATICAS::ecuacionesSegundoGrado($valores);

    if($resultado !=null){
        foreach ($resultado as $value) {
            echo $value . "<br><hr>";
        }
    }else{
        echo "El resultado es nulo.";
    }
    
}