<?php 

require_once "./vendor/search_services.php";
require_once "./vendor/fetch_opere_services.php"; 
require_once "./vendor/opere_views.php"; 

$opere = ottieni_opere("./resources/COLLEZIONI_GAM.json");

$page['page__title'] = "Opere della GAM (Galleria d'arte moderna)";
$page['page__header'] = "Fondazione Torino Musei";
$page['page__section'] = $page['page__title'];

get_header($page);
opere_table($opere);
get_footer($page);
?>


