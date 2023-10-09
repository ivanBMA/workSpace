<?php
    if(isset($_POST["circulo"]) && !empty($_POST["circulo"])){
        echo "<p>area circulo</p>";
    }
    if(isset($_POST["triangulo"]) && !empty($_POST["triangulo"])){
        echo "<p>area triangulo</p>";  
    }
    if(isset($_POST["cuadrado"]) && !empty($_POST["cuadrado"])){
        echo "<p>area cuadrado</p>";
    }