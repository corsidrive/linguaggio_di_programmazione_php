<?php 

function ottieni_opere($source){
   
  /** TODO: gestire file mancante */
      $opere_string = file_get_contents($source);
    //   print_r($opere_string);
      $opere_array = json_decode($opere_string,true);
  
      if(json_last_error() != JSON_ERROR_NONE){
        echo json_last_error_msg();
      }
  
      return $opere_array;
  
    # Procurami l'elenco delle opere


}

