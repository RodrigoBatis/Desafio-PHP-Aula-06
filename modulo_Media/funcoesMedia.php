<?php
/************************************************************************************
 * Obetivo: arquivo de funções matematicas que poderá ser utilizado dentro do projeto
 * Altor: Rodrigo
 * Data: 11/02/2022
 * Versão: 1.0
************************************************************************************/

//calculando a média dentro da função 
function calculoMedia($n1,$n2,$n3,$n4,$calcMedia){


    //declarando as variáveis que receberam valor da chave.
    $nota1 = (double) $n1;
    $nota2 = (double) $n2;
    $nota3 = (double) $n3;
    $nota4 = (double) $n4;
    $media = (double) $calcMedia;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    $resultado = $media;

    //toda função precisa retornar algo.
    return $resultado;
}



?>