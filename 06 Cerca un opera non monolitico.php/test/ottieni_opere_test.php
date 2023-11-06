<?php 
require_once("../vendor/fetch_opere_services.php");

$path_json = "../resources/COLLEZIONI_GAM.json";
var_dump(file_exists($path_json));

$result = ottieni_opere($path_json);



var_dump($result);