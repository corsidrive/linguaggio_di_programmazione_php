<?php 

require_once "./vendor/search_services.php";
require_once "./vendor/fetch_opere_services.php"; 
require_once "./vendor/opere_views.php"; 

$opere = ottieni_opere("https://gestione.fondazionetorinomusei.it/media/opendata/COLLEZIONI_MAO.jos.json");
$opera_da_cercare = $_REQUEST['search_word'];

$opere_trovate = cerca_opera($opera_da_cercare,$opere);
$page['slug'] = "cerca";
$page['page__title'] = "Ricerca Museo";
$page['page__header'] = "Fondazione Torino Musei";
$page['page__section'] = "hai cercato: <strong>$opera_da_cercare</strong>";

get_header($page);
opere_table($opere_trovate);
get_footer($page);
?>


