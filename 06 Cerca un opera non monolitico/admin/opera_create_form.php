<?php 
require_once("../config.php");
require_once(SITE_DIR."/vendor/opere_views.php");
require_once(SITE_DIR."/vendor/crud/OperaCRUD.php");
require_once(SITE_DIR."/vendor/Validators.php");

$operaObj = new stdClass();
# Valore predefinito
$operaObj->titolo = "";
$operaObj->autore = "";
$operaObj->immagine = "";
$operaObj->datatazione = "";


if($_SERVER['REQUEST_METHOD']=="POST"){
    
    $opera = $_POST["opera"]; // Dal Form
    
    $operaObj->titolo = Validators::required($opera['Titolo']);
    // $autore = Validators::required($opera["Autore"]);
    $operaObj->immagine = Validators::isUrl($opera["Immagine"]);
    $operaObj->datatazione = Validators::cleanData($opera['Datazione']);

    # risultato della validazione utilizzo per  sapere se posso salvare o no l'opera
    if($operaObj->titolo !== false && $operaObj->autore !== false && $operaObj->immagine !== false){
        $operaCrud = new OperaCRUD();
        $operaCrud->create($opera);
    }

}

$page["slug"] = "opera_create";
$page["page__title"] = "Aggiungi un opera";
$page['page__header'] = "Fondazione Torino Musei";
$page['page__section'] = $page["page__title"];

$page['page__action'] = SITE_URL.'/admin/opera_create_form.php';

# ----------------------------------------------
# VIEW
# ----------------------------------------------

get_header($page);
get_opera_form($page,$operaObj);
get_footer($page);
?>
