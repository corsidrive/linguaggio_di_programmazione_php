<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Variabili</title>
</head>
<body>
   DENTRO 


<?php 

#http://localhost/linguaggio_di_programmazione_php/basi_php/le_variabili.php

$nome = 'Mario'; // string
$cognome = "Rossi";

$frase = "Ciao $nome $cognome, come va ?<br>";
echo $frase; 
$frase = 'Ciao $nome $cognome, come va ?<br>';
echo $frase;

$eta = 33;
$peso = 95.7;

//               0       1      2
$colori = array('red',"green",'blue');
// sinstassi alternativa $colori = ['red','red','blue'];

foreach ($colori as $chiave => $colore) {
    echo "$chiave -> $colore <br>";
}

# background-kolor

$colore_verde = $colori[1];  
$frase = "ho trovato il $colore_verde <br>";
echo $frase;

# Aggiungere un colore alla lista

$colori[] = 'magenta';
$colori[] = 'yellow';

echo "<pre>";
print_r($colori);
echo "</pre>";

$colori[3] = 'rebeccapurple';

echo "<pre>";
print_r($colori);
echo "</pre>";

/**
 <?php ......... ?>
 * 
 */

?> 
<!-- finito php -->
</body>
</html>