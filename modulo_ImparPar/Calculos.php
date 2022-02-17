<?php

function verificarNumeros ( $numInicial, $numFinal){

    $array = [
        'Pares' => [],
        'Impares' => []
    ];

    // Laço que permite a classificação dos valores
    foreach(range($numInicial, $numFinal) as $numero){
        $numero % 2 == 0 ? array_push($array['Pares'], $numero) : array_push($array['Impares'], $numero) ;
    }
    // retorna o array com os números devidamente classificados 
    return $array;

}

?>