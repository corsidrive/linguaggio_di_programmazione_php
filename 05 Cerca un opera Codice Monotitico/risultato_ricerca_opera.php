<?php 
require "./vendor/search_services.php";
# Prendere informazioni dal form
$search_word = $_REQUEST['search_word']; // $_GET $_POST 

# Procurami l'elenco delle opere
/** TODO: gestire file mancante */
$opere_string = file_get_contents("https://gestione.fondazionetorinomusei.it/media/opendata/COLLEZIONI_MAO.jos.json");
$opere_array = json_decode($opere_string,true);

# Filtrare le opere che  corrispondono alla ricerca
$opere_trovate = cerca_opera($search_word,$opere_array);

print_r($opere_trovate);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Risultato di ricerca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <header id="page__header" class="bg-primary px-2 py-5">
        <h1>Museo</h1>
    </header>
    <section id="page__section" class="px-2">
        <p>Risutati ricerca per: <strong><?= $search_word  ?></strong></p>
    </section>
    <main>
        <div class="container">

            <!-- Visualizzare i risultati   -->  
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Autore</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($opere_trovate as $opera_trovata) :  ?>

                    <tr>
                        <td> <?= $opera_trovata["Titolo"] ? $opera_trovata["Titolo"] : "sconosciuto" ?> </td>
                        <td> <?= $opera_trovata["Autore"] ? $opera_trovata["Autore"] : "sconosciuto" ?> </td>
                    </tr>
                        
                    <?php endforeach; ?>

                </tbody>


            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>