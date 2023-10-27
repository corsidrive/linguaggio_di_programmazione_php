<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CERCA UN OPERA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <header id="page__header" class="bg-primary px-2 py-5">
        <h1>Museo</h1>
    </header>
    <section id="page__section" class="px-2">
        <p>Pagina di ricerca</p>
    </section>
    <main>
        <div class="container">
            <form action="risultato_ricerca_opera.php" method="GET">
                <div class="mb-3">
                    <label for="search_word" class="form-label">Cerca un opera</label>
                    <input  id="search_word" 
                            type="text" 
                            class="form-control" 
                            name="search_word"
                            >
                </div>

                <button class="btn btn-primary">Cerca un opera</button>

            </form>

        </div>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>