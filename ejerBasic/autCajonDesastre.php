<?php
echo "<h2>Resulado encuestas</h2>";
if(isset($_POST["envio"]) && !empty($_POST["envio"])){

    //Chequeo de radio button.
    if(isset($_POST["lprog"]) && !empty($_POST["lprog"])){
        echo "<p> Tu lenguaje preferido es:" . $_POST["lprog"] ."</p>";
    }

    if(isset($_POST["nTrans"]) && !empty($_POST["nTrans"])){
        $transportes = $_POST["nTrans"];
        echo "<p> Tus transportes preferidos son:" ;

        foreach ($transportes as $key => $value) {
            echo $value . " ";
        }
    }else {
        echo "<p>No has seleccionado ningun trnasporte</p>";
    }

    if(isset($_POST["sFutbol"]) && !empty($_POST["sFutbol"])){
        echo "<p> Tu eqipo preferido es:" . $_POST["sFutbol"] ."</p>";
    }
}