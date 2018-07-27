<?php
include_once  __DIR__."/lib/usefull.php";
$C="encoder_".BaseConvert(rand(0,1000),"0123456789","QWERTYUIOPASDFGHJKLZXCVBNM");
include __DIR__.'/lib/encoders/10/c10.php';
$c= new $C();
echo $c->encode($_POST["txt"]);