<?php

function seculoAno($ano)
{
    $seculo = $ano / 100 + 1;  //Faz o cálculo para termos o número do século (a principio em números decimais)

    $array = explode(".", $seculo); //Transformarmos o resultado obtido em um array, usando a virgula do número decimal como separador

    echo ("Ano: " . $ano . " = Século: " . $array[0] . " "); //Pegamos o primeiro item do array, pois ele informará exatamente qual século o ano informado como parâmetro na nossa função
}

echo (seculoAno(1905)); //modifique o parametro da função para buscar outro ano e seu respectivo século
