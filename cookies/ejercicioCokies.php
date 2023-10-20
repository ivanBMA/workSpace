<?php
    //crear una guep para que selecciones tu idoma preferido y en funcion lo eleguido te saque el mensaje
    //de ese idioma.

    if(isset($_POST["idioma"]) && !empty($_POST["idioma"])){
        echo $_POST["idioma"];
        $idiomaElegido = $_POST["idioma"];

        if (!isset($_COOKIE["idiomaA"])) {
            setcookie("idiomaA",$idiomaElegido,time()+5, "/");//Inicializar cookie, tiempo en segundos,
        }else {
            $dataDecoded = $_COOKIE["idiomaA"];
            echo "<br>El valor de cookie es " . $dataDecoded;
            switch ($dataDecoded) {
                case 'español':
                    echo "<h1>Buenos dias</h1>";
                    break;
                case 'ingles':
                    echo "<h1>Good morning</h1>";
                    break;
                case 'aleman':
                    echo "<h1>kartofen</h1>";
                    break;
                case 'frances':
                    echo "<h1>Bonjour</h1>";
                    break;
                
                default:
                    echo "<h1>Buenos dias</h1>";
                    break;
            }
        }
    }