
<?php

require_once "../conexao.php";

if(isset($_POST["titulo"])  && isset($_POST["sinopse"]) 
&& isset($_POST["ano_lancamento"]) && isset($_POST["diretor"]))
{



$titulo = $_POST["titulo"];
$sinopse = $_POST["sinopse"];
$ano_lancamento = $_POST["ano_lancamento"];
$diretor = $_POST["diretor"];


//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `filmes`(`titulo`, `sinopse`, `ano_lancamento`, `diretor`) 
        VALUES (?, ?, ?, ?);";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssss", $titulo, $sinopse, $ano_lancamento, $diretor);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");
