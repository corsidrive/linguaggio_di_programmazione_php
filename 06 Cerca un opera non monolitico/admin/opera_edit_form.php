<?php 
require_once("../config.php");
require_once(SITE_DIR."/vendor/opere_views.php");
require_once(SITE_DIR."/vendor/crud/OperaCRUD.php");
require_once(SITE_DIR."/vendor/crud/MuseoCRUD.php");
require_once(SITE_DIR."/vendor/Validators.php");
/**
 * TODO: RIFARE IMPORTAZIONE
 */

// $opera_id = $_GET['opera_id'];
$opera_id = filter_input(INPUT_GET,'opera_id',FILTER_SANITIZE_NUMBER_INT);

/** Premo sul bottone modifica via GET  */
if(isset($opera_id) && $_SERVER['REQUEST_METHOD'] === 'GET'){
    // echo "modifica";
    $operaCRUD = new OperaCRUD();
    $opera = $operaCRUD->readOne($opera_id);

    /* Opera che arriva dal database */
    # Valore predefiniti
    $operaObj = new stdClass();
    $operaObj->titolo = $opera['Titolo'];
    $operaObj->autore = $opera['Autore'];
    $operaObj->immagine = $opera['Immagine'];
    $operaObj->tecnica = $opera['Tecnica'];
    $operaObj->datazione = $opera['Datazione'];
    $operaObj->dimensioni = $opera['Dimensioni'];
    $operaObj->museo_id = $opera['museo_id'];
    $operaObj->opera_id = $opera['opera_id'];
}


if($_SERVER['REQUEST_METHOD'] === 'POST'){

    /**
     * Informazioni che arrivano dal form
     */
    
    $opera = $_POST["opera"];

    $operaObj = new stdClass();
    $operaObj->autore = $opera['Autore'];
    $operaObj->immagine = $opera['Immagine'];
    $operaObj->tecnica = $opera['Tecnica'];
    $operaObj->titolo = $opera['Titolo'];
    $operaObj->datazione = $opera['Datazione'];
    $operaObj->dimensioni = $opera['Dimensioni'];
    $operaObj->museo_id = $opera['museo_id'];
    $operaObj->opera_id = $opera['opera_id'];

    $operaObj->titolo = Validators::required($opera['Titolo']);
    // $autore = Validators::required($opera["Autore"]);
    $operaObj->immagine = Validators::isUrl($opera["Immagine"]);

    if($operaObj->titolo !== false && $operaObj->autore !== false && $operaObj->immagine !== false){

        $operaCrud = new OperaCRUD();
        $operaCrud->update($opera);
    }


}

$page["slug"] = "opera_edit";
$page["page__title"] = "Modifica: " . ($operaObj->titolo !== "" ? $operaObj->titolo : "un opera");
$page['page__header'] = "Fondazione Torino Musei";
$page['page__section'] = $page["page__title"];

$page['page__action'] = SITE_URL.'/admin/opera_edit_form.php';

# ----------------------------------------
# VIEW
# ----------------------------------------

get_header($page);
get_opera_form($page,$operaObj);
get_footer($page);
?>
