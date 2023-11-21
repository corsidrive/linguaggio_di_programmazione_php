<?php 
require_once("../config.php");
require_once(SITE_DIR."/vendor/opere_views.php");
require_once(SITE_DIR."/vendor/crud/OperaCRUD.php");
require_once(SITE_DIR."/vendor/Validators.php");
/**
 * TODO: RIFARE IMPORTAZIONE
 */

$opera_id = filter_input(INPUT_GET,'opera_id',FILTER_SANITIZE_NUMBER_INT);

/** Premo sul bottone modifica via GET  */
if(isset($opera_id) && $_SERVER['REQUEST_METHOD'] === 'GET'){
    // echo "modifica";
    $operaCRUD = new OperaCRUD();
    $opera = $operaCRUD->readOne($opera_id);

    /* Opera che arriva dal database */
    # Valore predefiniti
    $titolo = $opera['Titolo'];
    $autore = $opera['Autore'];
    $immagine = $opera['Immagine'];
    $tecnica = $opera['Tecnica'];

}


if($_SERVER['REQUEST_METHOD'] === 'POST'){

    /**
     * Informazioni che arrivano dal form
     */
    $opera = $_POST["opera"];

    $autore = $opera['Autore'];
    $immagine = $opera['Immagine'];
    $tecnica = $opera['Tecnica'];
    $titolo = $opera['Titolo'];

    $titolo = Validators::required($opera['Titolo']);
    // $autore = Validators::required($opera["Autore"]);
    $immagine = Validators::isUrl($opera["Immagine"]);

    if($titolo !== false && $autore !== false && $immagine !== false){
        $operaCrud = new OperaCRUD();
        $operaCrud->update($opera);
    }


}

$page["slug"] = "opera_edit";
$page["page__title"] = "Modifica: " . ($titolo !== "" ? $titolo : "un opera");
$page['page__header'] = "Fondazione Torino Musei";
$page['page__section'] = $page["page__title"];



# ----------------------------------------
# VIEW
# ----------------------------------------

get_header($page);
?>
<pre><?php print_r($opera) ?></pre>
<form action="<?= SITE_URL.'/admin/opera_edit_form.php'  ?>" method="post">
<div class="mb-3">
    <input type="hidden" name="opera[opera_id]" value="<?= $opera['opera_id'] ?? "" ?>" >
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
    <input type="text" value="<?= $tecnica ?>" class="form-control" name="opera[Tecnica]" id="tecnica">
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
            <option value="3">GAM</option>
    </select>
</div>

<button type="submit">alva</button>

</form>