<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array associativi</title>
</head>
<body>
    <?php
    $classe = ["Marco","Gianni",'Rita']; // Index Array o Numeric Array
    $nome_di_marco = $classe[0];
    echo "trovare il nome di marco: $classe[0] $nome_di_marco<br>";
    // Array Associative
    $alunno = [
        'nome' => 'Mario',
        'cognome' => 'Rossi',
        "eta" => 30,
        "passatempi" => ['Tennis','Teatro']
    ];

    $nome_alunno = $alunno['nome'];
    $per_trovare_teatro = $alunno['passatempi'][1];

    echo "dovrebbe stampare \"Mario\": $nome_alunno, secondo passatempo $per_trovare_teatro<br>";
    ?>
</body>
</html>