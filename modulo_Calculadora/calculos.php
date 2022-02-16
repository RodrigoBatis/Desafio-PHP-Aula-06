<?php
/********************************************************************************
 * Obetivo: arquivo de funções matematicas que poderá ser utilizado dentro do projeto
 * Altor: Rodrigo
 * Data: 04/02/2022
 * Versão: 1.0
*********************************************************************************/

function calcular($numero1, $numero2, $operacao)
{
  /*eclaração de vareaveis locais da função (todas as vareaveis recebem os dados do parametros da função)*/
  $num1  = (float) $numero1;
  $num2  = (float) $numero2;
  $sinal = (string) $operacao;
  $result = (float) 0;

  switch ($sinal) {
    case "SOMAR":
      $result = ($num1 + $num2);
      break;
    case "SUBTRAIR":
      $result = ($num1 - $num2);
      break;
    case "MULTIPLICAR":
      $result = ($num1 * $num2);
      break;
    default:
      if ($num2 == 0) {
        echo (ERRO_MSG_DIVISAO_ZERO);
      } else {
        $result = ($num1 / $num2);
      }
      break;
  }
  // round usado para não deixar muitas casas decimais 
  $result = round($result, 2);

  return $result;
}


?>