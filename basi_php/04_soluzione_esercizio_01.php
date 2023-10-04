<?php
// CIAO
# Controller organizza  le informazioni
$allievi = [
    [
        "nome"=>"Mario",
        "cognome"=>"Gialli",
        "passatempi"=>  ["Motomodiale","Tennis","Cinema"]
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
        <!-- inzia parte da ripetere  -->
        <?php foreach ($allievi as $allievo) { ?>
            <div class="card-allievo">  
                <p>
                    <strong>nome</strong> <br>
                    <strong>cognoe</strong> <br>
                </p>
            </div>
        <?php } ?>
        <!-- finisce parte da ripetere  -->
</body>
</html>