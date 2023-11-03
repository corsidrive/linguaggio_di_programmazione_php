<?php 
require_once "./vendor/Import/ImportFromJSON.php";
require_once "./vendor/fetch_opere_services.php";
# fetch_opere_services.php
# simula l'operzione di ottenere un museo dal database
$museo = new stdClass;
$museo->url = "https://gestione.fondazionetorinomusei.it/media/opendata/COLLEZIONI_MAO.jos.json";
$museo->id = 2; 

# creo un istanza e uso il metodo execute
// $import = new ImportFromJSON($museo);
// $import->execute();

#  Metodo statico
ImportFromJSON::execute($museo);

// $conn->query("sel");
// Opere::find();