<?php 

function opere_list($opere) { ?>
    
    <p class="opere--description">
        Sono presenti: <?= count($opere) ?> opere.
    </p>
    <ul>
        <?php foreach ($opere as $opera) { ?>
            <li>          
            <a data-lightbox="mao" href="<?= $opera['Immagine'] ?>"><?= $opera['Titolo'] ?> </a>(<?= $opera['Datazione'] ?>) 
            </li>
        <?php } ?>
    </ul>  

<?php } ?>