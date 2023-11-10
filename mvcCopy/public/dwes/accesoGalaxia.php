<?php
    namespace Dwes;
    
    require "galaxia.php";
    require "gaEn/gaEn.php";

    echo "NameSpace ACTUAL: " . __NAMESPACE__;

    echo "<h2>Acceso Sin cualificar</h2>";//Clases del mismo paquete
    obserbar("Via Lactea");
    echo "<br>El radio es " . RADIO;
    $gl = new galaxia();    
    galaxia::muerte();

    echo "<h2>Acceso cualificado</h2>";//Absoluto desde mu ubicacion
    Galaxiaenana\obserbar("Los 3 Pilares");
    echo "<br>El radio es " . Galaxiaenana\RADIO;
    $gl = new Galaxiaenana\galaxia();    
    Galaxiaenana\galaxia::muerte();

    echo "<h2>Acceso totalmente cualificado</h2>";//Absoluto desde mu ubicacion
    \Dwes\Galaxiaenana\obserbar("Los 3 Pilares");
    echo "<br>El radio es " . \Dwes\Galaxiaenana\RADIO;
    $gl = new \Dwes\Galaxiaenana\galaxia();    
    \Dwes\Galaxiaenana\galaxia::muerte();

    //importar la clase : comando use
    echo "<h2>Importa con use</h2>";
    use function \Dwes\Galaxiaenana\obserbar;
    use const \Dwes\Galaxiaenana\RADIO;
    obserbar("<br><hr>Otra galaxia" . RADIO);
    
    echo "<h2>Apodar / alias namespace</h2>";
    use function \Dwes\Galaxiaenana\obserbar as mirar;
    mirar("Cometa halley");

    echo "<h2>NameSpace global</h2>";
    echo "Hora actual : " . time();
    echo "<hr>Hora actual : " . \time();


