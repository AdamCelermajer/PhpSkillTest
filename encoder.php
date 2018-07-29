<?php
include_once __DIR__ . "/lib/usefull.php";

/* proceedEncoding Can not be modified */
function proceedEncoding() {
    $C = "encoder_" . BaseConvert(rand(0, 1000), "0123456789", "QWERTYUIOPASDFGHJKLZXCVBNM");
    // Tip the folder contening the encoder_XXX is equal to round((XXX/50)+5000) 
    $c = new $C();
    echo $c->encode("Text to Encode:".$_POST["txt"]);
}

proceedEncoding();
