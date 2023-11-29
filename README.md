# Da FARE 

// $museiCrud->readAll();

<a href="museo.it/opera_search?museo_id=;DROP%20TABLE%20opere;">Mao</a>
<a href="museo.it/opera_search?museo_id=3">GAM</a>
<a href="museo.it/opera_search?museo_id=5">Gabino</a>


<a href="museo.it/opera_edit_form?opera_id=2">Modifica</a>

OpereCrud->readByMuseoId(2);



Opere::search([
    "museo_id" => 1,
    "titlo" => "C"
])

SELECT ...
... where museo_id = :museo_id // 2