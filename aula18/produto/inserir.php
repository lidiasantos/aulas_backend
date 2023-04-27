<?php
require_once "../conexao.php";

$nome = $_POST ["nome"];
$descricao =$_POST ["descricao"];
$preco =$_POST ["preco"];


$sql = "INSERT INTO `produto` (`nome`, `descricao`, `preco`, `foto`) VALUES ('$nome', '$descricao', '$preco', 'semfoto.png');";
echo $sql;

$comando = $conexao->multi_query($sql);

//$comando->bind_param("ssd", "a", "b", "1");

//$comando->execute();

//abre o arquivo fotm.php
//header("Location: form.php");