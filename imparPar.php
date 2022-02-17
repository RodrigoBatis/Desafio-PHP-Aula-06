<?php

    require_once("./Msg.Config/config.php");
    require_once("./modulo_ImparPar/criaOptions.php");
    require_once("./modulo_ImparPar/Calculos.php");

    $numeroInicial = (int) 0;
    $numeroFinal   = (int) 0;
    $arrayVerificador = [];

    if (isset($_POST["btnVerificar"])){

        if($_POST["sltInicio"] == "" || $_POST["sltFinal"]){
            echo(ERRO_MSG_CAIXA_VAZIA);
        }else{
            $numeroInicial = $_POST["sltInicio"];
            $numeroFinal   = $_POST["sltFinal"];
    
            if( $numeroInicial > $numeroFinal){
                echo(ERRO_MSG_INICIAL_MAIOR_FINAL);
            }else{
                $arrayVerificador = verificarNumeros($numeroInicial, $numeroFinal);
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
    <link rel="stylesheet" href="./css.imparPar/header.css">
    <link rel="stylesheet" href="./css.imparPar/main.css">
    <link rel="stylesheet" href="./css.imparPar/reset.css">
    <link rel="stylesheet" href="./css.imparPar/style.css">
    <title>Impar-Par</title>
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
               <h1> Pares e Impar</h1>
            </div>
            <form action="frmImparPar" method="POST" action="imparPar.php"></form>
            <br>
            <div id="formInicial">
                N° Inicial: 
                <select name="sltInicio" id="nInicial">
                    <option value="">Por favor selecione um número</option>
                    <?= CriarOption(0 , 500, $numeroInicial)?>
                </select>
                
            </div>
            <br>
            <div id="formFinal">
                N° Inicial: 
                <select name="sltFinal" id="nFinal">
                <option value="">Por favor selecione um número</option>
                <?= CriarOption(100, 1000, $numeroFinal)?>
                </select>
            </div>
            <div id="btnVerificar">
                <input type="submit" name="btnVerificar" value="Verificar"><br/>
            </div>

            <fieldset id="fieldPares">
            <legend>N° Pares</legend>
            <div id="nPares">
                <?= count($arrayVerificador) != 0 ? imprimeArray($arrayVerificador["Pares"]) : null ?>
            </div>
            <span class="quantidadePares">Quantidade de Pares: <b><?= count($arrayVerificador) != 0 ? count($arrayVerificador["Pares"]) : null; ?></b></span>
            </fieldset>
            
            <br>
            <br>
            <fieldset id="fieldImpares">
            <legend>N° Impares</legend>
            <div id="nImpares">
                <?= count($arrayVerificador) != 0 ? imprimeArray($arrayVerificador["Impares"]) : null ?>
            </div>
            <span class="quantidadeImpares">Quantidade de Impares: <b><?= count($arrayVerificador) != 0 ? count($arrayVerificador['Impares']) : null; ?></b></span>
          </fieldset>
          
        </div>
    </main>
</body>
</html>