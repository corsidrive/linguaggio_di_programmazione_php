<?php 
require_once "../vendor/Import/ImportFromJSON.php";
require_once "../vendor/fetch_opere_services.php";
require_once "../vendor/crud/OperaCRUD.php";


# Creo un istanza del crud delle opere
$opera_id = 44;
$crud = new OperaCRUD();
$opera = $crud->readOne($opera_id);

print_r($opera);

$opera["autore"] = "Giovanni";

$id_e_una_stringa = $crud->update($opera);

$opera = $crud->readOne($opera_id);

if(!($opera['autore'] == "Giovanni")){
    echo("\n----------------------------------------\n");
    echo("😥😣 Mi aspettavo di trovare GIOVANNI come autore");
    echo("\n----------------------------------------\n");
}

print_r($opera);
