<?php
class Encoders {    
    public function encode($txt){
       return base64_encode($txt); 
    }
}