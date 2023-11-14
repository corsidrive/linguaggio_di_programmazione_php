<?php 
require_once("../vendor/Validators.php");

 $s = "<p>Cattivo  ";

$titolo = Validators::required($s);

if($titolo == 'Cattivo'){
    echo "\nok Cattivo"; 
}


$titolo = Validators::required("  ");

if($titolo === false){
    echo "\nIl campo deve essere obbligatorio";
}
