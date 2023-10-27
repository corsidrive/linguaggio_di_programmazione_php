<?php

/** DICHIARAZIONE */
function cerca_opera($titolo_opera_da_cercare, $tutte_le_opere){

    $risultato = [];
    foreach ($tutte_le_opere as $opera) {
        
        $titolo = strtolower($opera['Titolo']);
        $titolo_opera_da_cercare = trim(strtolower($titolo_opera_da_cercare));

        if( $titolo === $titolo_opera_da_cercare){
            $risultato[] = $opera;  
        };
    }
    return $risultato;
}