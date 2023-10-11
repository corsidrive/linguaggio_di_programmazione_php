<?php 
/**
 * Incanpsulato saluta.
 * 
 * 1. dichiarazione della funzione.
 * 2. chiamata della funzione
 */
function saluta_per_nome($nome):void{
    echo "Ciao $nome come va ? <br>";   
}

/** $nome = "Marco" */
saluta_per_nome("Marco");
saluta_per_nome("Mario");


$nome_alunno = "Luigi";

saluta_per_nome($nome_alunno);

$allievi = ["Sabrina","Maria"];

saluta_per_nome($allievi[1]);

/**
 * Dichiarazione
 */
function somma_numeri(array $numeri):float{

    $risultato = 0;
    foreach ($numeri as $numero) {
        $risultato = $risultato + $numero;
    }

    return $risultato;

}
$prima = somma_numeri([10,"5"]);

echo "prima: $prima <br>";
/** chiamata */
$r = somma_numeri([4,5,1]) * 10 + $prima ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "il risultato è $r" ?></title>
</head>
<body>
    <h1>il risultato è <?= $r ?></h1>
</body>
</html>



