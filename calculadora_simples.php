<?php

/*    Ambos são comandos de importe no PHP// com o '_once' não deixa ser importado o msm arquivo mais de uma vez
include()
include_once()   
require()
require_once()
*/

// importe do arquivo funções para o calculos matematicos
require_once("modulo_Calculadora/calculos.php");
require_once("./Msg.Config/config.php");

/* Declaração de variáveis */
$valor1    = (float) 0;
$valor2    = (float) 0;
$resultado = (float) 0;
$opcao     = (string) null;


/* Validação para verificar se o botão foi clicado */
if (isset($_POST["btncalc"])) {
  $valor1 = $_POST["txtn1"];
  $valor2 = $_POST["txtn2"];

  if ($_POST["txtn1"] == "" || $_POST["txtn2"] == "") {
    echo (ERRO_MSG_CAIXA_VAZIA);
  } elseif (!isset($_POST["rdocalc"])) {
    echo (ERRO_MSG_OPERACAO_CALCULO);
  } else {

    if (!is_numeric($valor1) || !is_numeric($valor2)) {
      echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
    } else {

      $opcao  = strtoupper($_POST["rdocalc"]);

      // chamada da função dos calculos, passamos os valores e o 
      // tipo da opreração recebemos o valor de resultado

      $resultado = calcular($valor1, $valor2, $opcao);
    }
  }
}
?>

<html>

<head>
  <title>Calculadora - Simples</title>
  <link rel="stylesheet" type="text/css" href="./css.calculadora/style.css">
  <link rel="stylesheet" href="css.calculadora/header.css">
</head>

<body>
  <header>
            <nav class="menu">
            <ul class="dropdown-menu">
                Menu:
                <li><a href="./index.html">Tela Inicial</a></li>
                <li><a href="./media.php">Média</a></li>
                <li><a href="./calculadora_simples.php">Calculadora</a></li>
                <li><a href="./tabuada.php">Tabuada</a></li>
                <li><a href="./imparPar.php">Pares e Impar</a></li>
            </ul>
        </nav>
            </header>
  <div id="conteudo">
    <div id="titulo">
      Calculadora - Simples
    </div>

    <div id="form">
      <form name="frmcalculadora" method="post" action="calculadora_simples.php">
        Valor 1:<input type="text" name="txtn1" value="<?= $valor1; ?>" /><br />
        Valor 2:<input type="text" name="txtn2" value="<?= $valor2; ?>" /><br />
        <div id="container_opcoes">
          <input type="radio" id="somar" name="rdocalc" value="somar" <?= $opcao == "SOMAR" ? "checked" : null; ?> />
          <label for="somar">Somar</label>
          <br />
          <input type="radio" id="subtrair" name="rdocalc" value="subtrair" <?= $opcao == "SUBTRAIR" ? "checked" : null; ?> />
          <label for="subtrair">Subtrair</label>
          <br />
          <input type="radio" id="multiplicar" name="rdocalc" value="multiplicar" <?= $opcao == "MULTIPLICAR" ? "checked" : null; ?> />
          <label for="multiplicar">Multiplicar</label>
          <br />
          <input type="radio" id="dividir" name="rdocalc" value="dividir" <?= $opcao == "DIVIDIR" ? "checked" : null; ?> />
          <label for="dividir">Dividir</label>
          <br />
          <input type="submit" name="btncalc" value="Calcular" />

        </div>
        <fieldset>
          <legend>Resultado</legend>
          <div id="resultado">
            <p><?= $resultado ?></p>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</body>

</html>