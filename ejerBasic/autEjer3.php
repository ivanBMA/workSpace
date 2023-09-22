<?php
    if(isset($_POST["numero"]) && !empty($_POST["numero"])){
        $euros = $_POST["numero"];
        $pesetas = $euros * 20;
        echo "<h1>" . $euros . " € son " . $pesetas . " pesetas </h1>";
    }