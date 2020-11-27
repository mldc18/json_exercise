<?php
    $strJsonFileContents = file_get_contents("products.json");
    // Convert to array 
    $array = json_decode($strJsonFileContents, true);
    // echo($array[0]["name"]);
    ?>
