<?php

if(isset($_POST["deportes"]) && !empty($_POST["deportes"])){
    echo "<p>Tu deporte faborito es el :". $_POST["deportes"] ."</p>";
    echo "<a href='ejer4.html'>Regresar</a>";
}else {
    echo "<a href='ejer4.html'>Regresar</a>";
}