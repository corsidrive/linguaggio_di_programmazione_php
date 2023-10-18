<?php 
require "vendor/carica_opere.php";
require "vendor/cerca_opera.php";
require "vendor/visualizza_opere.php";

$search = filter_input(INPUT_GET,'search');
$opere  = carica_opere("https://gestione.fondazionetorinomusei.it/media/opendata/COLLEZIONI_MAO.jos.json");

$search_result = cerca_opera($search,$opere);


?>
<!DOCTYPE html>
<html lang="it">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Galleria MAO Elenco delle opere</title>
        <link href="./dist/css/lightbox.min.css" rel="stylesheet" />
</head>

<body>
    <h1 class="opere--header"> Elenco delle opere del MAO </h1>


    <?php opere_list($search_result) ?>
   

    <script src="./dist/js/lightbox-plus-jquery.min.js"> </script>
</body>

</html>