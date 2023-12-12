<?php 
require_once("../config.php");
require_once(SITE_DIR."/vendor/opere_views.php");
require_once(SITE_DIR."/vendor/crud/OperaCRUD.php");
require_once(SITE_DIR."/vendor/crud/MuseoCRUD.php");
require_once(SITE_DIR."/vendor/Validators.php");
require_once(SITE_DIR."/vendor/file/uploads.php");



# Valore predefinito
$operaObj = new stdClass();
$operaObj->autore = "";
$operaObj->immagine = "";
$operaObj->tecnica = "";
$operaObj->titolo = "";
$operaObj->datazione  = "";
$operaObj->dimensioni = "";
$operaObj->museo_id = "";
$operaObj->opera_id = "";


if($_SERVER['REQUEST_METHOD']=="POST"){
    
    $opera = $_POST["opera"]; // Dal Form
    
    $operaObj = Validators::publishOpera($opera);
    # risultato della validazione utilizzo per  sapere se posso salvare o no l'opera
    if($operaObj->titolo !== false && $operaObj->autore !== false){
        
        $immagine_opera_folder = '/uploads/immagini_opere';
        $immagine_opera_nome = upload_file('Immagine',$immagine_opera_folder);
        
        if($immagine_opera_nome){
            // print_r($opera);
            $opera['Immagine'] = $immagine_opera_nome;
            $operaObj->immagine = $immagine_opera_nome;
        
            $operaCrud = new OperaCRUD();
            $operaCrud->create($opera);
        }


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
