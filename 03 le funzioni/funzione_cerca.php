<?php

function cerca_allievo(string $search,array $allievi):array {

    $result = [];

    foreach ($allievi as  $allievo) {
        if($allievo['nome'] === $search){
            // array_push($result, $allievo);
            $result[] = $allievo;
        }
    }

    return $result;
}