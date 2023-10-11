<?php

    echo "Tenia una n";
    echo "Tu deportes faboritos son : " ;

    foreach ($_POST["deportes"] as  $value) {
        echo " " . $value;
    }