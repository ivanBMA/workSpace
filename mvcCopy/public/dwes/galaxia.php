<?php
    namespace Dwes;

    const RADIO = 126.88;//millones de Km

    function obserbar($nombre){
        echo "<br>Observando la galaxia: $nombre";
    }

    function time(){
        echo "Me quedan 6546546546543654354 años de vida";
    }

    class galaxia {
        function __construct(){
            $this->nacer();
        }

        function nacer(){
            echo "<br>Hola! , soy una nueva Galaxia!";
        }

        static function muerte(){
            echo "<br> Me estoy muriendo ...";
        }

        
    }//fin_clase
    