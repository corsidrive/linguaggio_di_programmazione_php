<?php 
# Controller organizza  le informazioni
$allievi = [
    [
        "nome"=>"Mario",
        "cognome"=>"Gialli",
        "passatempi"=> ["Motomodiale","Tennis","Cinema"]
    ],
    [
        "nome"=>"Giovanni",
        "cognome"=> "Senzaterra",
        "passatempi" => ["usurpatore di troni"]
    ],
    [
        "nome"=>"Martino",
        "cognome"=> "Sovramonte",
        "passatempi" => ["Cinema","Sport","Leggere","Teatro","Cucinare"]
    ],
    [
        "nome"=>"Martino",
        "cognome"=> "Sovramonte",
        "passatempi" => ["Cinema","Sport","Leggere","Teatro","Cucinare"]
    ]
];
?>
<!-- View | Visualizzare le informazioni   -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card-allievo {
            border: 1px solid red;
            padding: 1em;
        }
    </style>
</head>
<body>
<?php foreach ($allievi as $allievo) { ?>
    <div class="card-allievo">
        <p>
            <strong>nome:</strong> Mario <br>
            <strong>cognome:</strong> Rossi <br>
        </p>
        <ul class="card-passatempi">
            <li>Tennis</li>
            <li>Calcio</li>
            <li>Cinema</li>
        </ul>
    </div>

<?php } ?> 



</body>
</html>