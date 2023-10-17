<?php 

function opere_list($opere) { ?>
    
    <p class="opere--description">
        Sono presenti: <?= count($opere) ?> opere.
    </p>
    <ul>
        <?php foreach ($opere as $opera) { ?>
            <li>          (<?= $opera['Datazione'] ?>) 
                </a>
            </li>
        <?php } ?>
    </ul>  

<?php } ?>