<?php
   
    if(isset($_POST["numeroA"]) && !empty($_POST["numeroA"])){
        $numeroA = $_POST["numeroA"];
        $numeroB = $_POST["numeroB"];
        echo $numeroA . " + " . $numeroB . " = " . ($numeroA + $numeroB);    
    }