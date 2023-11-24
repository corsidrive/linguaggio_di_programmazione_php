<?php 
class Validators {


    public static function required($value) {
        # Sanitize 
        $value = self::cleanData($value);

        # Validazione
        if(strlen($value) === 0){
            return false;
        }else{
            return $value;
        };      
    }

    public static function isUrl($value,$is_required = false) {
        
        $value = Validators::cleanData($value);
        
        // $is_required = true
        if($is_required && strlen($value) === 0 ){
            return false;
        }else{
           return $value == "" ? "" : filter_var($value, FILTER_VALIDATE_URL);   
        }; 
    }

    public static function cleanData($value) {
             # Sanitize 
             $value = strip_tags($value);
             $value = trim($value); 
             return $value;
             
    }
}