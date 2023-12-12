
Scrivere  la funzione nel file:

> 06 Cerca un opera non monolitico\vendor\file\uploads.php


```php

$options = [
    'ext' => ['jpeg','jpg','png']
];

upload_file('Immagine',SITE_DIR.'/uploads/immagini_opere',$options);
upload_file('foto_museo',SITE_DIR.'/uploads/musei',$options);

```
- name (input[name])
- tipo file (jpeg,pdf,ecc)
- destinazione














# Da FARE 

Nel menu di navigazione 

- [ ] Generare elenco dei musei disponibili nella nav bar
        MuseiCRUD::readAll()
        usare lo slug come etichetta 
  
- [ ] 😀 creare il controller **SITE_URL.opere_museo.php** accetta un parametro via get **museo_id**   

```html

<ul class="navbar-nav text-uppercase">

            <!-- <li class="nav-item active"><a class="nav-link" href="#">Home</a></li> -->
            <li class="nav-item">
                <a class="nav-link " href="HTTP://sito.it/opere_museo.php?museo_id=1">
                    <?= $museo['slug'] ?><
                /a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="HTTP://sito.it/opere_museo.php?museo_id=2">MAO</a>
            </li>

            <li class="nav-item"><a class="nav-link active" href="http://localhost/linguaggio_di_programmazione_php/06%20Cerca%20un%20opera%20non%20monolitico/opere_mao.php">MAO</a>
            </li>





<li class="nav-item"><a class="nav-link " href="http://localhost/linguaggio_di_programmazione_php/06%20Cerca%20un%20opera%20non%20monolitico/admin/opera_create_form.php">Aggiungi un opera</a></li>
        
        </ul>

```



// $museiCrud->readAll();

<a href="museo.it/opera_search?museo_id=;DROP%20TABLE%20opere;">Mao</a>
<a href="museo.it/opera_search?museo_id=3">GAM</a>
<a href="museo.it/opera_search?museo_id=5">Gabino</a>


<a href="museo.it/opera_search?museo_id=2&page=5">Gabino</a>


<a href="museo.it/opera_edit_form?opera_id=2">Modifica</a>

OpereCrud->readByMuseoId(2);



Opere::search([
    "museo_id" => 1,
    "titlo" => "C"
])

SELECT ...
... where museo_id = :museo_id // 2