<?php
/***************************************************************************
 * Objetivo: Arquivo responsavel por reunir todas as Mensagens de Erro
 * que serão ultilizadas em todo o projeto
 * Autor: Rodrigo
 * Data: 11/02/2022
 * Versão: 1.0
*****************************************************************************/

define("ERRO_MSG_CAIXA_VAZIA", "<script>window.alert('Todas as caixas devem ser preenchidas!!!');</script>");

define("ERRO_MSG_CARACTER_INVALIDO_TEXTO", "<script> alert('Não é permitido utilizar letras!!!');</script>");

define("ERRO_MSG_DIVISAO_ZERO", "<script> alert('Não é possivel fazer uma divisão por 0!!!');</script>");

define("ERRO_MSG_OPERACAO_CALCULO", "<script>window.alert('Favor escolher uma operação válida!!!');</script>");

define("ERRO_MSG_INICIAL_MAIOR_FINAL", "<script>window.alert('Para que a Verificação aconteça coloque o valor inicial menor que o final')</script>")
?>