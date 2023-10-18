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
function find_by_key($search,$key,$array) {
    $result = [];
    foreach ($array as $value) {
        if(trim(strtolower($value[$key])) === strtolower(trim($search))){
            $result[] = $value; 
        }       
    }
    return $result;
}

