<?php 
require_once "../vendor/Import/ImportFromJSON.php";
require_once "../vendor/fetch_opere_services.php";
require_once "../vendor/crud/OperaCRUD.php";


# Creo un istanza del crud delle opere
$crud = new OperaCRUD();
$result = $crud->readOne(10);

# 1
// print_r($result);

// # 2
// var_dump($result);

// # 3 
// $titolo = $result[0]['titolo'];
// echo "Quest' opera ha come titolo: $titolo";

if($titolo !=="Mahākāla"){
    echo "Test è fallito";
}
