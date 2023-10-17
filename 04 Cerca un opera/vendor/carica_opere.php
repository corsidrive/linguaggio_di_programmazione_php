<?php

function carica_opere($url):array {
    return json_decode(file_get_contents($url),true);
}