# Spiegare  la differnza tra  == e ===


# Corso php

## 10/11 Ottobre (12h)

### Form

<!-- Variabili superglobali  -->

- [Variabili superglobali](https://www.w3schools.com/php/php_superglobals.asp)
    - [POST](https://www.w3schools.com/php/php_superglobals_post.asp)
    - [GET](https://www.w3schools.com/php/php_superglobals_get.asp)

- [Usare i form in PHP](https://www.w3schools.com/php/php_forms.asp)
- [Sintassi dei form in HTML](https://www.w3schools.com/html/html_form_elements.asp)

## 4 Ottobre (4h)

### Index Array e Associative Array

[Documentazione ufficiale Array](https://www.php.net/manual/en/language.types.array.php)
[W3schools Array](https://www.w3schools.com/php/php_arrays.asp)

```php 

<?php
# Se 
Array(
        [nome] => Mario 
        [cognome] => Gialli 
        [passatempi] => Array ( 
            [0] => Motomodiale 
            [1] => Tennis 
            [2] => Cinema 
            )
)

Pre accedere  ai valori contenuti in un array **associativo** devo usare le chiavi **associative** (stringhe)

$allievo['nome']
$allievo['cognome'] 
$allievo['passatempi']

