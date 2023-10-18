<?php
    var $numerosPrimos = [];

    public function esPrimo($numero){
        $resultado = true;
        if ($numero % 2 != 0) {
            $resultado = false;
        }

        return $resultado;
    }

    for ($i=0;$i < 10000; $i++){ 
        if (esPrimo($i)) {
            array_push($numerosPrimos,$i);
        }
    }

    foreach ($numerosPrimos as $value) {
        echo "Es primo " . $value;
    }