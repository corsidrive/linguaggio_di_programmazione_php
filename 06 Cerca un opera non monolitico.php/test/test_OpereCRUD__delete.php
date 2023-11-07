<?php 
require_once "../vendor/Import/ImportFromJSON.php";
require_once "../vendor/fetch_opere_services.php";
require_once "../vendor/crud/OperaCRUD.php";


# Creo un istanza del crud delle opere
$opera_id = 11;
$crud = new OperaCRUD();
$opera = $crud->readOne($opera_id);
print_r($opera);

$id_e_una_stringa = $crud->delete($opera_id);
$opera = $crud->readOne($opera_id);

var_dump($opera);
