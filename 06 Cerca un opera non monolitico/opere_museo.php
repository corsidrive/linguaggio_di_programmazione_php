<?php 
require_once("config.php");
require_once "./vendor/search_services.php";
require_once "./vendor/fetch_opere_services.php"; 
require_once "./vendor/opere_views.php"; 
require_once SITE_DIR."/vendor/crud/OperaCRUD.php";
require_once SITE_DIR."/vendor/crud/MuseoCRUD.php";

$operaCRUD = new OperaCRUD();
$museoCRUD = new MuseoCRUD();
// $opere = $operaCRUD->readAll(10);
$museo_id = filter_input(INPUT_GET,'museo_id',FILTER_VALIDATE_INT);
$opere = $operaCRUD->readByMuseoId($museo_id,10);
$museo = $museoCRUD->readOne($museo_id);
// $opere = ottieni_opere("https://gestione.fondazionetorinomusei.it/media/opendata/COLLEZIONI_MAO.jos.json");
// print_r($museo);
$page['slug'] = $museo['slug'];
$page['page__title'] = $museo['nome'];
$page['page__header'] = "Fondazione Torino Musei";
$page['page__section'] = $page['page__title'];
// $page['page__musei'] = $museoCRUD->readAll();

get_header($page);
opere_table($opere);
get_footer($page);
?>


