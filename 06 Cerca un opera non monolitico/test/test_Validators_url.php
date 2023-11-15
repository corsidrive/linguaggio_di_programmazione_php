<?php 
require_once("../vendor/Validators.php");

$value = "non sono un link";

$expected = Validators::isUrl($value);
if($expected == false){
    echo "\n01 - non sono una link : '$value'"; 
}

$value = "http://ciccio.it";

$expected = Validators::isUrl($value);
if($expected == "http://ciccio.it"){
    echo "\n01b - caso ciccio : '$value'"; 
}

$value = "http://www.ciccio.it";
$expected = Validators::isUrl($value);
if($expected === $value){
    echo "\n02 - $value è un link valido";
}

$value = "    http://www.ciccio.it   ";
$expected = Validators::isUrl($value);

if($expected === trim($value)){
    echo "\n03 - $value è un link valido";
}

$value = "       ";
$expected = Validators::isUrl($value);


if($expected === ""){
    echo "\n04 - Il link non è obbligatorio";
}

$value = "       ";
$expected = Validators::isUrl($value, true);

if($expected === false){
    echo "\n05 - il link è obbligatorio";
}

$value = "<h2> ciccio       ";
$expected = Validators::isUrl($value, true);

if($expected === false){
    echo "\n06 - il link è obbligatorio o formato errato";
}

$value = "<h2>";
$expected = Validators::isUrl($value, true);

if($expected === false){
    echo "\n07 - il link è obbligatorio o formato errato";
}

$value = "<h2>";
$expected = Validators::isUrl($value);

if($expected === ""){
    echo "\n08 - il formato errato";
}



