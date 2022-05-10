<?php

//Para um número ser primo ele deve cumprir 1 requisito: ter 2 divisores naturais(inteiros e não negativos):
//1 e ele mesmo 
//Exemplo = 13, só pode ser divido por 13 e por 1, de forma natural.

function verifica($num)
{

    if ($num == 1) {

        return 0; // A função ja retorna false, pois 1 só tem 1 divisor, logo não cumpre o requisito para ser primo
    }

    for ($i = 2; $i <= sqrt($num); $i++) { //loop para realizar os calculos de divisao para descobrir se um número é primo 

        if ($num % $i == 0)  //se o resto da divisão for 0 ja sabemos que o numero tem outros divisores alem de 1 e ele mesmo

            return 0; //então retornamos falso

    }

    return 1;  //do contrario, sabendo que ele pode ser divido apenaspor ele mesmo e um, o código retorna que temos um número primo



}




function primos($inicial, $final)
{

    $array = [];

    for ($i = $inicial + 1; $i < $final; $i++) {
        if (verifica($i) == 1) {
            array_push($array, $i);
        }
    }

    echo ("Números primos entre " . $inicial . " e " . $final . " <br>");

    //Formatando a saída para o formato pedido na questão

    echo ("Array [");

    foreach ($array as $primo) {
        echo $primo . ",";
    }

    echo ("]");
}

print_r(primos(10, 29));
