<?php
include_once __DIR__ . "/lib/usefull.php";

spl_autoload_register(function ($class_name) {
    error_log(substr($class_name,8));
    $val =BaseConvert(substr($class_name,8),"QWERTYUIOPASDFGHJKLZXCVBNM","0123456789");
    $dir = BaseConvert(round(($val/50)+5000),"0123456789","QWERTYUIOPASDFGHJKLZXCVBNM");  
    include_once __DIR__."/lib/encoders/$dir/$class_name".".php";
   
    
});
function proceedEncoding() {
    $C = "encoder_" . BaseConvert(rand(0, 1000), "0123456789", "QWERTYUIOPASDFGHJKLZXCVBNM");
    $c = new $C();
    echo $c->encode("Text to Encode:".$_POST["txt"]);
}

proceedEncoding();
