<?php
include_once __DIR__.'/../usefull.php';
for ($i=0;$i<1000;$i++){
 $dir = BaseConvert(round(($i/50)+5000),"0123456789","QWERTYUIOPASDFGHJKLZXCVBNM");   
 $class = "encoder_".BaseConvert($i,"0123456789","QWERTYUIOPASDFGHJKLZXCVBNM");
 echo "$dir\n";
 mkdir(__DIR__."/$dir/",true); 
 file_put_contents(__DIR__."/$dir/$class".".php","<?php include_once __DIR__.'/../encoders.php'; class $class extends Encoders {}");
 
}
