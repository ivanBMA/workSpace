<?php
    session_start();
    echo "Hola ->";
    
        if ($_SESSION["nombreS"] == "admin") {
            echo "Hola senor admin ";
        }else {
            echo "Hola senor " . $_SESSION["nombreS"];
        } 
    
    
    