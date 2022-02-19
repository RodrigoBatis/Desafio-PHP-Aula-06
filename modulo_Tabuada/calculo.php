<?php
/********************************************************************************
 * Obetivo: arquivo para realizar os calculos para a tabuada
 * Altor: Rodrigo
 * Data: 04/02/2022
 * Versão: 1.0
*********************************************************************************/

function calcularMultiplicacao($numero1, $numero2, $resultadoMultiplicacao, $contador)
{

    $num1 = (double) $numero1;
    $num2 = (double) $numero2;
    $result = (double) 0;
    $i = (double) 0;

    for($i; $i<= $num2; $i++) {
        if($num2 == 0 ){
            echo (ERRO_MSM_MULTIPLICACAO_ZERO);
          }else{
        $result = $num1 * $i;

         echo($num1 . " X " . $i . " = " . $result."<br>");
        
    }
}
}



?>