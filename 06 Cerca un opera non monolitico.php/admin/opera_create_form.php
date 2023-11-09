<?php 
require_once("../config.php");
require_once(SITE_DIR."/vendor/opere_views.php");

// echo SITE_DIR."/vendor/opere_views.php";
# Form per creare un opera
$page["slug"] = "opera_create";
$page["page__title"] = "Aggiungi un opera";
$page['page__header'] = "Fondazione Torino Musei";
$page['page__section'] = $page["page__title"];

get_header($page);
?>
<p> qui mettero il form </p>
<?php
get_footer($page);
?>
