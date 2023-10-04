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
        "cognome"=> "Campanaro Fra (bro)",
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
body {
    font-family: arial;    display: flex;
    justify-content: center;
    /* padding: 1rem; */
}

html,body,li,ul {
    margin: 0;
    padding: 0;

   
}


.card-allievo {
    border: 1px solid #607d8b00;
    padding: 1em;
    box-shadow: 1px 1px 6px 1px #0000001c;
    background-color: white;
    margin: 7px;
    border-radius: 1px 1px 5px 1px;
    line-height: 110%;
}
.container {
    min-width: 900px;
    width: 95%;
    
}
.p-2{
    padding: 0.25rem;

}
    </style>
</head>
<body>
        <section class="allievi-list container">
        <h1 class="allievi-list--header p-2">Elenco Allievi</h1>
        <!-- inzia parte da ripetere  -->
        <?php foreach ($allievi as $allievo) { ?>
            <div class="card-allievo">  
                <!-- <?php // print_r($allievo['passatempi']) ?> -->
                <p>
                    <strong>nome</strong> <?php echo $allievo['nome']; ?> <br>
                    <strong>cognome</strong> <?= $allievo['cognome']; ?> <br>
                </p>
                <ul class="card-passatempi">
                    <?php foreach ($allievo['passatempi'] as $passatempo) {
                        echo "<li>$passatempo</li>";
                        // <li>Tennis</li>
                    }
                ?>
                </ul>
            </div>
        <?php } ?>
        </section>
        <!-- finisce parte da ripetere  -->
</body>
</html>