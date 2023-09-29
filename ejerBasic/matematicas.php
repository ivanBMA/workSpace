<?php
/*
 Almacena la función anterior en el fichero matemáticas.php. Crea un fichero que la incluya y la 
utilice.
*/
class MATEMATICAS{
    static function ecuacionesSegundoGrado($array){
        $rd = 4;
        $valorA = $array[0];
        $valorB = $array[1] * -1;
        $valorC = $array[2];
    
        $valorD = 4 * ($valorA * $valorB);
        $valorE = $array[1]^2 - $valorD;
        $raiz = sqrt($valorE);
        $dosA = 2* $valorA;
    
        $resultadoA = round(($valorB + $raiz) / $dosA, $rd);
        $resultadoB = round(($valorB - $raiz) / $dosA, $rd);
        $resultados = array($resultadoA, $resultadoB);
    
        return $resultados;
    }
}
  
