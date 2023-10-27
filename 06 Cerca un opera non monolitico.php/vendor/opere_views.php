<?php 
function get_header($data) { ?>
    <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?= $data['page__title'] ?></title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        </head>
    <body>
    <header id="page__header" class="bg-primary px-2 py-5">
        <h1><?= $data['page__header'] ?></h1>
    </header>
    
    
    
    <section id="page__section" class="container">
        <h2 class="h4 py-4"><?= $data['page__section'] ?></h2>
    </section>



    <main>
        <div class="container">
        

<?php } ?>


<?php 
function opere_table($opere){ ?>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Autore</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($opere as $opera) :  ?>

        <tr>
            <td> <?= $opera["Titolo"] ? $opera["Titolo"] : "sconosciuto" ?> </td>
            <td> <?= $opera["Autore"] ? $opera["Autore"] : "sconosciuto" ?> </td>
        </tr>
            
        <?php endforeach; ?>

    </tbody>


    </table>

<?php } ?>

<?php function get_footer($data) { ?>
    </div>
 </main>
 <footer>

 </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>
<?php } ?>


