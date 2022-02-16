<?php

require_once("modulo_Tabuada/calculo.php");
require_once("./Msg.Config/config.php");

/* Declaração das variáveis */

$valor1         = (float) 0;
$valor2         = (float) 0;
$resultado      = (float) 0;
$contadorVoltas = (float) 0;

//Validação se o botão foi clicado
if (isset($_POST["btnCalc"])) {
  $valor1 = $_POST["txtn1"];
  $valor2 = $_POST["txtn2"];

  if ($_POST["txtn1"] == "" || $_POST["txtn2"] == "") {
    echo (ERRO_MSG_CAIXA_VAZIA);
  } else {
    if (!is_numeric($valor1) || !is_numeric($valor2)) {
      echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
    } else {
      
    }
  }
}



?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css.tabuada/reset.css">
  <link rel="stylesheet" href="./css.tabuada/style.css">
  <link rel="stylesheet" href="./css.tabuada/header.css">
  <link rel="stylesheet" href="./css.tabuada/main.css">
  <title>Tabuada</title>
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
  <main>
    <div id="conteudo">
      <div id="titulo">
        Tabuada-PHP
      </div>

      <div id="form">
        <form name="frmTabuada" method="post" action="tabuada.php">
          Tabuada:<input type="text" name="txtn1" value=<?= $valor1?> /><br />
          Contador:<input type="text" name="txtn2" value=<?= $valor2?> /><br />
          <div id="container_opcoes">
            <br />
            <input type="submit" name="btnCalc" value="Calcular" />

          </div>
          <fieldset>
            <legend>Resultado</legend>
            <div id="resultado">
              <?php $resultado = calcularMultiplicacao($valor1, $valor2, $resultado, $contadorVoltas);?>
            </div>
          </fieldset>
        </form>
      </div>
  </main>
</body>

</html>