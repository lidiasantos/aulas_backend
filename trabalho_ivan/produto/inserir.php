<?php

if(isset ($_POST["codigo"]) && isset($_POST["titulo"]) && isset($_POST["sinopse"]) && isset($_POST["anolancamento"]) && isset($_POST["diretor"])  )
{



$codigo = $_POST ["codigo"];
$titulo =$_POST ["titulo"];
$sinopse =$_POST ["sinopse"];
$anolancameto =$_POST ["anolancamento"];
$diretor =$_POST ["diretor"];


$sql = "INSERT INTO `produto` (`codigo`, `titulo`, `sinopse`, `sinopse`, `anolancamento`, `diretor`)
 VALUES (?, ?, ?, ?, ?, ?);";
echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("sssss", $codigo ,$titulo, $sinopse, $anolancameto, $diretor );

$comando->execute();
}
//abre o arquivo fotm.php
header("Location: index.php");