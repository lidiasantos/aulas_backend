<?php

require_once "../conexao.php";

//verifica se foi enviado o param id pela URL
if(isset($_GET['codigo']))
{

//pega o valor do id que foi enviado pela URL
$id = $_GET['codigo'];

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `filmes` WHERE  `codigo`= ? ; ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("i", $id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();

//pegar a primeira linha de resultado
$filme = $resultado->fetch_assoc();

}
