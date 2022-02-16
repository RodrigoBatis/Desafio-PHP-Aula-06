<?php

function CriarOption($nInical, $nFinal, $selecionado){
    $acumulacao = (string) null;

    
    for($i = $nInical; $i <= $nFinal; $i++){
        $selected = $selecionado == $i && $selecionado != 0 ? 'selected' : null;

        $acumulacao .='<option value="'. $i .'"' . $selected  .'>'. $i .'</option>';
    }
    return $acumulacao;   
}

function imprimeArray($array){
    $acumulacao = (string) null;

    foreach($array as $number){
        $acumulacao.= '<span>'. $number .'</span><br>';
    }

    return $acumulacao;
}

?>