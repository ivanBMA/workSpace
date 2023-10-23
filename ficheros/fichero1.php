<?php
    echo "<h1>Utilizar ficheros</h1>";
    echo "<h2>lectura fichero</h2>";
    $nombreFichero = "miFich.txt";
    $fp = fopen($nombreFichero,"r");//Lectura y apertura de fichero

    while(!feof($fp)){//Siempre que exista una linea
        //Linea a linea
        //$linea = fgets($fp);//Asigna la linea.
        //echo $linea . "<br>";
        $caracter = fgetc($fp);
        echo $caracter;
        if ($caracter == "\n") {
            echo "<br>";
        }
    }

    fclose($fp);//Cerrar fichero

    echo "<h2>Escritura fichero</h2>";
    $fp = fopen($nombreFichero,"a");//Lectura y apertura de fichero
    if (!$fp) {
        die("No se puede abrir el fichero");
    }else {
        fwrite($fp,"soy otra cadena " . PHP_EOL);
        fwrite($fp,"Cadena escrita en ". time() . PHP_EOL);
    }
    


    fclose($fp);//Cerrar fichero
