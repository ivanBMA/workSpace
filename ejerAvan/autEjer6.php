<?php
    /*
    6 - Muestra en una página web la siguiente información:
    -   X Directorio raiz del documento donde se está ejecutando la página actual. X
    -   X Protocolo a través del cual la página está siendo solicitada.
    -   X Nombre del servidor (host) donde está alojada la página web. X
    -   X Tipo de petición HTTP que se ha ejecutado para acceder a la página.
    -   X Dirección ip del usuario que está visitando la página X
    */

    echo "<br><hr> Directorio raiz del documento -->  " . $_SERVER ['DOCUMENT_ROOT'];
    echo "<br><hr> Protocolo de la paguina -->  " . $_SERVER['SERVER_PROTOCOL'];
    echo "<br><hr> Nombre del servidor (host) -->  " . $_SERVER ['HTTP_HOST'] ;
    echo "<br><hr> Tipo de peticion -->  " . $_SERVER ['REQUEST_METHOD'] ;
    echo "<br><hr> Direccion ip del usuario-->  " . $_SERVER['REMOTE_ADDR'];