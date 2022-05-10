<?php


//funçao para verificar se a matriz é crescente
function crescente($array)
{
    foreach ($array as $key => $valor) {
        $tot = $array;

        unset($tot[$key]);

        $tot = array_values($tot);

        $count = 0;

        for ($i = 0; $i < (count($tot) - 1); $i++) {

            if ($tot[$i] < $tot[$i + 1]) {

                $count++;
            }
        }

        if ($count == count($tot) - 1) {

            return true;
        }
    }
    return false;
}

function teste($array) //função para testar as matrizes
{

    echo " [" . implode(",", $array) . "] ";

    if (crescente($array)) {

        echo "True";
    } else {

        echo "False";
    }

    echo "<br>";
}

teste([1, 3, 2, 1]);
teste([1, 3, 2]);
teste([1, 2, 1, 2]);
teste([3, 6, 5, 8, 10, 20, 15]);
teste([1, 1, 2, 3, 4, 4]);
teste([1, 4, 10, 4, 2]);
teste([10, 1, 2, 3, 4, 5]);
teste([1, 1, 1, 2, 3]);
teste([0, -2, 5, 6]);
teste([1, 2, 3, 4, 5, 3, 5, 6]);
teste([40, 50, 60, 10, 20, 30]);
teste([1, 1]);
teste([1, 2, 5, 3, 5]);
teste([1, 2, 5, 5, 5]);
teste([10, 1, 2, 3, 4, 5, 6, 1]);
teste([1, 2, 3, 4, 3, 6]);
teste([1, 2, 3, 4, 99, 5, 6]);
teste([123, -17, -5, 1, 2, 3, 12, 43, 45]);
teste([3, 5, 67, 98, 3]);
