<?php
   
    if(isset($_GET["numeroA"]) && !empty($_GET["numeroA"])){
        $numeroA = $_GET["numeroA"];
        $numeroB = $_GET["numeroB"];
        echo $numeroA . " + " . $numeroB . " = " . ($numeroA + $numeroB);    
    }