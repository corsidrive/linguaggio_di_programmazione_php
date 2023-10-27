<?php 

function ottieni_opere($source){
    # Procurami l'elenco delle opere

    /** TODO: gestire file mancante */
    $opere_string = file_get_contents($source);
    $opere_array = json_decode($opere_string,true);

    return $opere_array;
}
