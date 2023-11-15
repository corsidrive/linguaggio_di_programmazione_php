<?php 
require_once("../config.php");
require_once(SITE_DIR."/vendor/opere_views.php");
require_once(SITE_DIR."/vendor/crud/OperaCRUD.php");
require_once(SITE_DIR."/vendor/Validators.php");

print_r($_POST);
# Valore predefinito
$titolo = "";
$autore = "";
$immagine = "";
if($_SERVER['REQUEST_METHOD']=="POST"){
    
    $opera = $_POST["opera"];
    $titolo = $opera['Titolo'];


    $titolo = Validators::required($titolo);
    $autore = Validators::required($opera["Autore"]);
    $immagine = Validators::isUrl($opera["Immagine"]);


    # risultato della validazione utilizzo per  sapere se posso salvare o no l'opera
    if($titolo !== false && $autore !== false && $immagine !== false){
        $operaCrud = new OperaCRUD();
        $operaCrud->create($opera);
    }

}


// echo SITE_DIR."/vendor/opere_views.php";
# Form per creare un opera
$page["slug"] = "opera_create";
$page["page__title"] = "Aggiungi un opera";
$page['page__header'] = "Fondazione Torino Musei";
$page['page__section'] = $page["page__title"];

get_header($page);
?>
<form action="<?= SITE_URL.'/admin/opera_create_form.php'  ?>" method="post">
<div class="mb-3">
    <label for="titolo"  class="form-label">Titolo dell'opera</label>
    <input type="text"  value="<?= $titolo ?>" class="form-control" name="opera[Titolo]" id="titolo">
    <?php 
    if($titolo === false) {
        echo "<strong class='text-danger'>Il titolo è obbligatorio</strong>";
    } 
    ?> 
</div>
<div class="mb-3">
    <label for="autore" class="form-label">Autore dell'opera</label>
    <input type="text" value="<?php echo $autore ?>" class="form-control" name="opera[Autore]" id="autore">
    <?= $autore === false ?  "<strong class='text-danger'>L'autore è obbligatorio</strong>" : "" ?>
</div>
<div class="mb-3">
    <label for="datazione" class="form-label">datazione dell'opera</label>
    <input type="text" class="form-control" name="opera[Datazione]" id="datazione">
</div>
<div class="mb-3">
    <label for="tecnica" class="form-label">Tecnica</label>
    <input type="text" class="form-control" name="opera[Tecnica]" id="tecnica">
</div>
<div class="mb-3">
    <label for="immagine" class="form-label">Immagine</label>
    <input type="text" value="<?= $immagine ?>" class="form-control" name="opera[Immagine]" id="immagine">
    <?= $immagine === false ? "<strong class='text-danger'>L'url dell' immagine è sbagliata </strong>":"" ?>
</div>
<div class="mb-3">
    <label for="dimensioni" class="form-label">Dimensioni</label>
    <input type="text" class="form-control" name="opera[Dimensioni]" id="dimensioni">
</div>

<div class="mb-3">
    <label for="museo" class="form-label">Museo</label>
    <select name="opera[museo_id]">
            <option value="2" >MAO</option>
            <option value="3">GAM </option>
    </select>
</div>

<button type="submit">salva</button>

</form>


<?php
get_footer($page);
?>
