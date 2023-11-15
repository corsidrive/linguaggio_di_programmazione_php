<?php 
require_once("../vendor/Validators.php");

$value = "non sono un link";

$expected = Validators::isUrl($value);
if($expected == false){
    echo "\n01 - non sono una link : '$value'"; 
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

var_dump("EXPECTED",$expected);

if($expected === ""){
    echo "\n04 - Il link non è obbligatorio";
}

$value = "       ";
$expected = Validators::isUrl($value, true);

if($expected === false){
    echo "\n05 - il link è obbligatorio";
}

