<?php
    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        if($_POST["nombre"] == "admin"){
            echo "Hola senor admin " . $_POST["nombre"];
        }else {
            header("Location: http://127.0.0.1/workSpace/ejerBasic/ejercicioAdmin.html");
        }
    }