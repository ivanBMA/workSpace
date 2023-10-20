<?php
//$_COKKIE['cokieName'];Saca el nombre de la cookie
//mktime().tim()60*60*14*30;tiempo que dura
//$_SERVER['HTTPS'];
// no mostrar nada por echo antes que la cookies
    $animales = [
        "mamifero" => "perro",
        "oviparo" => "pato",
        "reptil" => "serpiente"
    ];

        $datosEncoded = json_encode($animales);

    if (!isset($_COOKIE["datos"])) {
        setcookie("datos",$datosEncoded,time()+3600*24, "/");//Inicializar cookie, tiempo en segundos,
    }else {
        $dataDecoded = $_COOKIE["datos"];
        //$datos = json_decode($dataDecoded);
        $datos = json_decode($dataDecoded,true);//El parametro [true -> array asociatibo] [false -> objeto].
        echo "<br>El valor de cookie es " . $datos["reptil"];
        //echo "<br>El valor de cookie es " . $datos->{"reptil"};false
    }


/*
sleep(10);//Espera los segundos indicado y borra la cookie
setcookie("datos","23",time()-9200*24, "/");
*/
