<?php
require_once("config.php");
require_once "./vendor/search_services.php";
require_once "./vendor/fetch_opere_services.php";
require_once "./vendor/opere_views.php";



$page['slug'] = 'cerca';
$page['page__title'] = "Ricerca Museo";
$page['page__header'] = "Fondazione Torino Musei";
$page['page__section'] = "Cerca nei nostri musei";
?>

<?php get_header($page); ?>

<form action="risultato_ricerca_opera.php" method="GET">
  <div class="mb-3">
    <label for="search_word" class="form-label">Cerca un opera</label>
    <input id="search_word" type="text" class="form-control" name="search_word">
  </div>

  <button class="btn btn-primary">Cerca un opera</button>

</form>


<?php get_footer($page); ?>