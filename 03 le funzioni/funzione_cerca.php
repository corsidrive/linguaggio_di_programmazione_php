<?php

function cerca_allievo(string $search,array $allievi):array {

    $result = [];

    foreach ($allievi as  $allievo) {
        // martino    ===  martino

        //  $nome = $allievo['nome'];
        //  $nome_lower = strtolower($nome);

        //  $search_lower = strtolower($search);
        //  $search_trim = trim($search_lower);
        //  if($nome_lower === $search_trim) {};

        if(strtolower($allievo['nome']) === trim(strtolower($search))){
            // array_push($result, $allievo);
            $result[] = $allievo;
        }
    }

    return $result;
}