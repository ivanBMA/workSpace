<?php
    $cadenafech = "12/10/2022";
    $fecha = DateTime::createFromFormat('d/m/Y' ,$cadenafech);//y en mayusculas para que salgan 4 digitos
    echo "<br> Objeto fecha " ;
    var_dump($fecha); 
    $sFecha = $fecha->format('Y/m/d');
    $sFecha2 = $fecha->format('d/m/Y');

    echo "<br> cad fecha " . $sFecha;
    echo "<br> cad fecha 2" . $sFecha2;

   