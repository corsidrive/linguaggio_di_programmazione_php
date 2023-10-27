<?php 

require_once "./vendor/search_services.php";
require_once "./vendor/fetch_opere_services.php"; 
require_once "./vendor/opere_views.php"; 


$opere = ottieni_opere("https://gestione.fondazionetorinomusei.it/media/opendata/COLLEZIONI_MAO.jos.json");

// print_r($opere);

opere_table($opere);



