<?php 
require_once "../vendor/Import/ImportFromJSON.php";
require_once "../vendor/fetch_opere_services.php";
require_once "../vendor/crud/OperaCRUD.php";


# Creo un istanza del crud delle opere
$crud = new OperaCRUD();
$opera = $crud->readOne(10);
// $result[0]['Titolo'] 

$titolo = $opera['titolo'];
if($titolo !=="Mahākāla"){
    echo "Test è fallito, MI ASPETTAVO DI TROVARE Mahākāla";
}


$opera_che_non_esiste = $crud->readOne(1000000000);
if(!($opera_che_non_esiste === false)){
    echo "MI ASPETTAVO DI TROVARE FAlSE";
}


$id_e_una_stringa = $crud->readOne("ciccio");
var_dump($id_e_una_stringa);
$opera_che_non_esiste = $crud->readOne(";DROP TABLE opera;");