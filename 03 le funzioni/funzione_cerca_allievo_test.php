<?php 

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
        "cognome"=> "Campanaro Fra (bro)",
        "passatempi" => ["Cinema","Sport","Leggere","Teatro","Cucinare"]
    ]
];


/** il  */
if(is_array(cerca_allievo("Martino",$allievi))){
    echo "ok il risultato è un array<br>";
}


if(count(cerca_allievo("Martino",$allievi)) === 2) {
    echo "ok ci sono 2  Martino<br>";
};


function cerca_allievo(string $search,$allievi_locale) : array {
    
    $risultato = [];
    foreach ($allievi_locale as  $allievo) {
        if($allievo['nome'] === $search){
            $risultato[] = $allievo;
        };
    }


    return $risultato;
}

// cerca_allievo("Mario");
// cerca_allievo("Italo");
