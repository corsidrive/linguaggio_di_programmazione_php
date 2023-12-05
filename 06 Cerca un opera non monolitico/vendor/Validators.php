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

    public  static function publishOpera(array $opera):stdClass {
        // $opera = $_POST["opera"];
        $operaObj = new stdClass;
        $operaObj->titolo = Validators::required($opera['Titolo']);
        $operaObj->autore = Validators::cleanData($opera["Autore"]);
        $operaObj->immagine = Validators::isUrl($opera["Immagine"]);
        $operaObj->datazione = Validators::cleanData($opera['Datazione']);
        $operaObj->tecnica = Validators::cleanData($opera['Tecnica']);
        $operaObj->dimensioni = Validators::cleanData($opera['Dimensioni']);
        $operaObj->museo_id = Validators::cleanData($opera['museo_id']);
        $operaObj->opera_id = Validators::cleanData($opera['opera_id']);
        
        return $operaObj;
    }
}