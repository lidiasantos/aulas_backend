<?php

require_once "../conexao.php";

 $titulo = $_POST["titulo"];
 $sinopse = $_POST["sinopse"];
 $ano_lancamento = $_POST["ano_lancamento"];
 $diretor = $_POST["diretor"];
 $codigo = $_POST ["codigo"];
 
 //string com o comendo sql para ser executoado no db
 $sql = "UPDATE filmes SET `titulo`=?, `sinopse`=?, `ano_lancamento`=?, `diretor`=? WHERE  `codigo`=?;";
 //prepara o slq para ser executado no banco de dados
 $comando=$conexao->prepare($sql);
 //adiciona os valores nos parametros

$comando->bind_param("ssssi", $titulo, $sinopse, $ano_lancamento, $diretor, $codigo);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//abre o arquivo form.php
header("Location: index.php");