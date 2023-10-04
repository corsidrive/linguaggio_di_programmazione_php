<?php 
/**
 * Scrivere un elenco non ordinato (ul/li)  dei titoòi dell opere in grassetto
 * autore subito dopo tra parentesi 
 * <strong>Giconda</strong> (500)
 * 
 */
# Client
$opere_string = file_get_contents("https://gestione.fondazionetorinomusei.it/media/opendata/COLLEZIONI_MAO.jos.json");

$opere_json = json_decode($opere_string,true);

echo count($opere_json);
echo "<br>";
print_r($opere_json[3]);
?>

<img src="http://93.62.170.226/foto/mao/878_Hb20.jpg">