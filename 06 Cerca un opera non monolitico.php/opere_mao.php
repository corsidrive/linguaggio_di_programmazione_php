<?php 

require_once "./vendor/search_services.php";
require_once "./vendor/fetch_opere_services.php"; 
require_once "./vendor/opere_views.php"; 

$opere = ottieni_opere("https://gestione.fondazionetorinomusei.it/media/opendata/COLLEZIONI_MAO.jos.json");

$page['slug'] = 'mao';
$page['page__title'] = "Opere del MAO (Museo D'arte Orientale)";
$page['page__header'] = "Fondazione Torino Musei";
$page['page__section'] = $page['page__title'];

get_header($page);
opere_table($opere);
get_footer($page);
?>


