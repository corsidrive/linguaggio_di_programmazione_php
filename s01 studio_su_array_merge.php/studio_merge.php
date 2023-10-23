<?php
$allievi_1 = [
    [
        "nome" => "Mario",
        "cognome" => "Gialli",
        "passatempi" => ["Motomodiale", "Tennis", "Cinema"]
    ],
    [
        "nome" => "Giovanni",
        "cognome" => "Senzaterra",
        "passatempi" => ["usurpatore di troni"]
    ],
    [
        "nome" => "Martino",
        "cognome" => "Sovramonte",
        "passatempi" => ["Cinema", "Sport", "Leggere", "Teatro", "Cucinare"]
    ],
    [
        "nome" => "Martino",
        "cognome" => "Campanaro Fra (bro)",
        "passatempi" => ["Cinema", "Sport", "Leggere", "Teatro", "Cucinare"]
    ]
];

$allievi_2 = [
    [
        "nome" => "Giovanni",
        "cognome" => "Senzaterra",
        "passatempi" => ["usurpatore di troni"]
    ],
    [
        "nome" => "Martino",
        "cognome" => "Sovramonte",
        "passatempi" => ["Cinema", "Sport", "Leggere", "Teatro", "Cucinare"]
    ],
    [
        "nome" => "Martino",
        "cognome" => "Campanaro Fra (bro)",
        "passatempi" => ["Cinema", "Sport", "Leggere", "Teatro", "Cucinare"]
    ]
    ];


$merge = array_merge_recursive($allievi_1,$allievi_2);

print_r($merge);
