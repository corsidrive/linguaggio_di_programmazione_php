<?php 
class Validators {


    public static function required($value) {
        # Sanitize 
        $value = strip_tags($value);
        $value = trim($value); 

        # Validazione
        if(strlen($value) === 0){
            return false;
        }else{
            return $value;
        };      
    }

    public static function isUrl($value,$is_required = false) {
        
        $value = strip_tags($value);
        $value = trim($value);
        
        // $is_required = true
        if($is_required && strlen($value) === 0 ){
            return false;
        }else{
           return filter_var($value, FILTER_VALIDATE_URL);   
        }; 

           
    
    }
}