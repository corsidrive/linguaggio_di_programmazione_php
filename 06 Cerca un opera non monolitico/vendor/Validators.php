<?php 
class Validators {


    public static function required($value) {
        # sanitize 
        $value = strip_tags($value);
        $value = trim($value); 
        if(strlen($value) === 0){
            return false;
        }else{
            return $value;
        };      
    }
}