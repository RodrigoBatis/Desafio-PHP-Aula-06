<?php

function verificarNumeros ( $numInicial, $numFinal){

    $array = [
        "Pares" => [],
        "Impares" => []
    ];

    foreach(range($numInicial, $numFinal) as $numero){
        $numero % 2 == 0 ? array_push($array["Pares"], $numero) : array_push($array["Impares"], $numero);
    }
    return $array;

}

?>