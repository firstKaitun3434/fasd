<?php
    $hwids = array(
        "Hwid",
    );
    $sub = $_GET["hwid"];
    if (in_array($sub,$hwids,TRUE)) {
        echo "Script"; 
    }
?>