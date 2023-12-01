<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST["enviar"]) && !empty($_POST["enviar"])) {

            if ($_POST["nombre"] == "borra") {
                session_destroy();
                echo "Se ha destruido la sesion.";
            }
            else{
                session_start();

                $item = $_POST["nombre"];
                $_SESSION["nombres"][] = $item;

                foreach ( $_SESSION["nombres"] as  $value) {
                    echo "esto " . $value . "<hr><br>";
                }
            }
        }
    }