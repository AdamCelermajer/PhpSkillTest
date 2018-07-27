<?php
class Encoders {    
    public function encode($txt){
       return get_class($this).base64_encode($txt); 
    }
}