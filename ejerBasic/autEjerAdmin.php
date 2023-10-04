<?php
    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        if($_POST["nombre"] == "admin"){
            echo "Hola señor admin " . $_POST["nombre"];
        }else {
            echo "Hola señor usuario " . $_POST["nombre"];
        }
    }