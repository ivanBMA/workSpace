<?php
    if(isset($_POST["numero"]) && !empty($_POST["numero"])){
        $numero = $_POST["numero"];
        for($i = 0 ;$i <= 10;$i++){
            echo "<br>" . $numero . " x " . $i . " = " . $numero*$i;
        }
    }