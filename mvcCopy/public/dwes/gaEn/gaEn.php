<?php
    namespace Dwes\Galaxiaenana;

    const RADIO = 35;//millones de Km

    function obserbar($nombre){
        echo "<br>mirando la galaxia Enana: $nombre";
    }

    class galaxia {
        function __construct(){
            $this->nacer();
        }

        function nacer(){
            echo "<br>Hola! , soy una nueva Galaxia Enana! ";
        }

        static function muerte(){
            echo "<br> Galaxia destruyendose ...";
        }
    }//fin_clase
    