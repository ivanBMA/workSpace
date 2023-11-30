<?php
    var_dump($_SERVER);
    echo "<h1> direccion del fichero: " . $_SERVER['PHP_SELF'] . "</h1>";
    if($_SERVER["REQUEST_METHOD"] == "POST"){}