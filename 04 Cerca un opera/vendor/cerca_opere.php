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
function cerca_chiave($search,$key,$opere) {
    $result = [];
    foreach ($opere as $opera) {
        if(trim(strtolower($opera[$key])) === strtolower(trim($search))){
            $result[] = $opera; 
        }       
    }
    return $result;
}

