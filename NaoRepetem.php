<?php

$array = [];

for ($i = 1; $i <= 20; $i++) {

    $numrandom = rand(1, 10); //gerar 20 numeros aleatorios entre 1 e 10 pro nosso array

    $array[] = $numrandom;
}


echo ("Array [");

foreach ($array as $numero) {
    echo $numero . ",";  //formatar e exibir o array
}

echo ("] <br>");

$verifica = array_unique($array); //verifica quais os itens duplicados do array

$duplicados = array_diff_key($array, $verifica); // mostra a diferença do array usando as keys para comparar

foreach ($duplicados as $key => $value) {
    foreach ($array as $key2 => $value2) {
        if ($value == $value2) {
            unset($array[$key2]); //remove todos os itens repetidos do array
        }
    }
}

echo ("Números que não se repetem: [");

foreach ($array as $naorepete) {
    echo $naorepete . ",";
}

echo ("]");
