<?php
include_once __DIR__ . "/lib/usefull.php";

spl_autoload_register(function ($class_name) {
   
    $val =BaseConvert(substr($class_name,8),"QWERTYUIOPASDFGHJKLZXCVBNM","0123456789");
    $dir = BaseConvert(round(($val/50)+5000),"0123456789","QWERTYUIOPASDFGHJKLZXCVBNM");  
    include_once __DIR__."/lib/encoders/$dir/".substr($class_name,8)."/$class_name".".php";
   
    
});
function proceedEncoding() {
    $C = "encoder_" . BaseConvert(rand(0, 1000), "0123456789", "QWERTYUIOPASDFGHJKLZXCVBNM");
    $c = new $C();
    echo $c->encode($_POST["txt"]);
}

proceedEncoding();
