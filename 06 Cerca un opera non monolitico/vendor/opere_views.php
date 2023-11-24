<?php 
function get_header($data) { 
// echo __FUNCTION__.": ".SITE_DIR;
    ?>
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
        <div class="container"><h1><?= $data['page__header'] ?></h1></div>
    </header>
    <nav class="navbar navbar-expand-sm bg-light">

    <section class="container">
        <ul class="navbar-nav text-uppercase">

            <!-- <li class="nav-item active"><a class="nav-link" href="#">Home</a></li> -->
            <li class="nav-item"><a class="nav-link <?= $data['slug']=='cerca' ? 'active':'' ?>" 
                    href="<?php echo SITE_URL . '/index.php' ?>">Cerca</a></li>
            <li class="nav-item">
                <a class="nav-link <?= $data['slug']=='gam' ? 'active':'' ?>" 
                    href="<?= SITE_URL . '/opere_gam.php';?>">GAM</a></li>
            <li class="nav-item"><a class="nav-link <?= $data['slug']=='mao' ? 'active':'' ?>" 
                    href="<?= SITE_URL . '/opere_mao.php' ?>">MAO</a></li>
            <li class="nav-item"><a class="nav-link <?= $data['slug']=='opera_create' ? 'active':'' ?>" 
                    href="<?= SITE_URL . '/admin/opera_create_form.php' ?>">Aggiungi un opera</a></li>
        
        </ul>
    </section>
    
</nav>
    
    
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
         
            <td>
            <a class="btn btn-primary" href="<?= SITE_URL.'/admin/opera_edit_form.php?opera_id='.$opera['opera_id'] ?>">  modifica </a> </td>
        </tr>
            
        <?php endforeach; ?>

    </tbody>


    </table>

<?php } ?>

<?php function get_opera_form($page,stdClass $opera) { ?>

    
<form action="<?= $page['page__action']  ?>" method="post">
<div class="mb-3">

    <input type="hidden" name="opera[opera_id]" value="<?= $opera->opera_id ?? "" ?>" >
    
    <label for="titolo"  class="form-label">Titolo dell'opera</label>
    <input type="text"  value="<?= $opera->titolo ?>" class="form-control" name="opera[Titolo]" id="titolo">
    <?php 
    if($opera->titolo === false) {
        echo "<strong class='text-danger'>Il titolo è obbligatorio</strong>";
    } 
    ?> 
</div>
<div class="mb-3">
    <label for="autore" class="form-label">Autore dell'opera</label>
    <input type="text" value="<?php echo $opera->autore ?>" class="form-control" name="opera[Autore]" id="autore">
    <?= $opera->autore === false ?  "<strong class='text-danger'>L'autore è obbligatorio</strong>" : "" ?>
</div>


<div class="mb-3">
    <label for="datazione"  class="form-label">datazione dell'opera</label>
    <input type="text" 
    value="<?= $opera->datatazione  ?>"   
    class="form-control" name="opera[Datazione]" id="datazione">

</div>


<div class="mb-3">
    <label for="tecnica" class="form-label">Tecnica</label>
    <input type="text" value="<?= $opera->tecnica ?>" class="form-control" name="opera[Tecnica]" id="tecnica">
</div>
<div class="mb-3">
    <label for="immagine" class="form-label">Immagine</label>
    <input type="text" value="<?= $opera->immagine ?>" class="form-control" name="opera[Immagine]" id="immagine">
    <?= $opera->immagine === false ? "<strong class='text-danger'>L'url dell' immagine è sbagliata </strong>":"" ?>
</div>
<div class="mb-3">
    <label for="dimensioni" class="form-label">Dimensioni</label>
    <input type="text" class="form-control" name="opera[Dimensioni]" id="dimensioni">
</div>

<div class="mb-3">
    <label for="museo" class="form-label">Museo</label>
    <select name="opera[museo_id]">
            <option value="2" >MAO</option>
            <option value="3">GAM</option>
    </select>
</div>

<button type="submit">salva</button>

</form>
    

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





