<?php 

error_reporting(E_ALL);

require "funzione_cerca.php";


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


/** se Il risultato non è un array  */


if(!is_array(cerca_allievo("Martino",$allievi))){
    echo "1.il risultato è non un array<br>";
    echo "ho trovatou un ".gettype(cerca_allievo("Martino",$allievi));
}


// test / spec
if(count(cerca_allievo("Martino",$allievi)) !== 2) {
    echo "2.mi aspettavo  2  Martino<br>";
    echo "ma ho trovato ". count(cerca_allievo("Martino",$allievi));
};



if(count(cerca_allievo("martino",$allievi)) !== 2) {
    echo "3.mi aspettavo  2  martino<br>";
    echo "ma ho trovato " . count(cerca_allievo("martino",$allievi)) . "<br>";
};



if(count(cerca_allievo("ino",$allievi)) !== 0) {
    echo "4.mi aspettavo di trovare 0<br>";
    echo "ho trovato  " . count(cerca_allievo("ino",$allievi)) . "<br>";
};


if(count(cerca_allievo("martino  ",$allievi)) !== 2) {
    echo "5.mi aspettavo  2  martino <br>";
    echo "ma ho trovato " . count(cerca_allievo("martino",$allievi)) . "<br>";
};


if(count(cerca_allievo("MArTino",$allievi)) !== 2) {
    echo "6.mi aspettavo  2  martino <br>";
    echo "ma ho trovato " . count(cerca_allievo("martino",$allievi)) . "<br>";
};


// function cerca_allievo(string $search,$allievi_locale) : array {
//     $risultato = [];
//     foreach ($allievi_locale as  $allievo) {
//         if($allievo['nome'] === $search){
//             $risultato[] = $allievo;
//         };
//     }


//     return $risultato;
// }

// cerca_allievo("Mario");
// cerca_allievo("Italo");
