<?php

?>
<!DOCTYPE html>
<html lang="it">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Galleria MAO Elenco delle opere</title>
        <link href="./dist/css/lightbox.min.css" rel="stylesheet" />
</head>

<body>
    <h1 class="opere--header"> Elenco delle opere del MAO </h1>

    <p class="opere--description"><a href="http://" target="_blank" rel="noopener noreferrer"></a>
        Sono presenti:
        <?= count($opere_array) ?> opere.
    </p>
    <ul>
        <?php foreach ($opere_array as $opera) { ?>
            <li> (
                <?= $opera['Datazione'] ?>)
                </a>
            </li>
        <?php } ?>
    </ul>

    <script src="./dist/js/lightbox-plus-jquery.min.js"> </script>
</body>

</html>