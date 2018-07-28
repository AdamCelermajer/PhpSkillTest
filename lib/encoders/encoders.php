<?php
class Encoders {    
    public function encode($txt){
        /* pseudo encoding */
       return get_class($this).base64_encode($txt); 
    }
}