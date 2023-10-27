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



