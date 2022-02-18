<?php

require_once("modulo_Media/funcoesMedia.php");
require_once("./Msg.Config/config.php");

// DECLARAÇÃO DAS VAREAVEIS

$nota1 = (double) 0;
$nota2 = (double) 0;
$nota3 = (double) 0;
$nota4 = (double) 0;
$media = (double) 0;
$resultado = "";

if(isset($_POST["btnCalc"])){

    // RECUPERANDO O VALOR DAS NOTAS QUE ESTÃO NAS VAREAVEIS

    $nota1 = $_POST["txtn1"];
    $nota2 = $_POST["txtn2"];
    $nota3 = $_POST["txtn3"];
    $nota4 = $_POST["txtn4"];


// tratamendto de erro para validar caixa vazia
    if ($_POST["txtn1"] == "" || $_POST["txtn2"] == "" || $_POST["txtn3"] == "" || $_POST["txtn4"] == "" ){
        echo(ERRO_MSG_CAIXA_VAZIA);
    }else{

        //Tratamento de erro para caracteres não numericos
        if(!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)){
            echo(ERRO_MSG_CARACTER_INVALIDO_TEXTO);

        }else{
            // FAZENDO O CALCULO DA MEDIA

            $resultado= calculoMedia($nota1,$nota2,$nota3,$nota4,$media);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
       <link rel="stylesheet" type="text/css" href="./css.media/style.css">
       <link rel="stylesheet" href="./css.media/header.css">
        <meta charset="utf-8">
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
                Calculo de Médias
            </div>

            <div id="form">
                <form name="frmMedia" method="post" action="media.php">
                    <div>
                        <label>Nota 1:</label>
                        <input type="text" name="txtn1" value="<?php echo($nota1)?>"  > 
                    </div>
                    
                    <div>
                        <label>Nota 2:</label>
                        <input type="text" name="txtn2" value="<?php echo($nota2)?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 3:</label>
                        <input type="text" name="txtn3" value="<?php echo($nota3)?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 4:</label>
                        <input type="text" name="txtn4" value="<?php echo($nota4)?>" >
                    </div>
                    <div>
                        <input type="submit" name="btnCalc" value ="Calcular" >
                        <div id="botaoReset">
                            <a href="media.php">
                                Novo Cálculo
                            </a>    
                        </div>
                    </div>
                </form>

            </div>
            <footer id="resultado">
                A média é: <?php echo($resultado);?>
            </footer>
        </div>
        
		
	</body>

</html>