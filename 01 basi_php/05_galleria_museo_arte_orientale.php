<?php 
/**
 * Scrivere un elenco non ordinato (ul/li)  dei titoòi dell opere in grassetto
 * autore subito dopo tra parentesi 
 * <strong>Giconda</strong> (500)
 */
# Client
$opere_string = file_get_contents("https://gestione.fondazionetorinomusei.it/media/opendata/COLLEZIONI_MAO.jos.json");

$opere_array = json_decode($opere_string,true);

// echo count($opere_array);
// echo "<br>";
// print_r($opere_array[3]);
?>
<!-- <img src="http://93.62.170.226/foto/mao/878_Hb20.jpg"> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galleria MAO Elenco delle opere</title>
    <link href="./dist/css/lightbox.min.css" rel="stylesheet" />
</head>
<body>
    <h1 class="opere--header"> Elenco delle opere del MAO </h1>

    <p class="opere--description">
        Sono presenti: <?= count($opere_array) ?> opere.
    </p>
    <ul>
        <?php foreach ($opere_array as $opera) { ?>
            <li> 
                <a data-lightbox="operamao"  href="<?= $opera['Immagine'] ?>" target="_blank" >
                <strong> <?= $opera['Titolo'] ?> </strong> 
                (<?= $opera['Datazione'] ?>) 
                </a>
            </li>
        <?php } ?>
    </ul>  
    
    <script src="./dist/js/lightbox-plus-jquery.min.js"> </script>
</body>
</html>
