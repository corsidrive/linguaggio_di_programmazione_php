<?php 

function cerca_opera($search,$opere) {
    $result = [];
    foreach ($opere as $opera) {
        if(trim(strtolower($opera['Titolo'])) === strtolower(trim($search))){
            $result[] = $opera; 
        }       
    }
    return $result;
}

