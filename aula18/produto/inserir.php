<?php
require_once "../conexao.php";

if(isset ($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["preco"]))
{

    //SALVAR O ARWUIVO FOTO
    require_once "salvar_foto.php";

$nome = $_POST ["nome"];
$descricao =$_POST ["descricao"];
$preco =$_POST ["preco"];
$foto = $nome_arquivo;


$sql = "INSERT INTO `produto` (`nome`, `descricao`, `preco`, `foto`)
 VALUES (?, ?, ?, ?);";
echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("ssds", $nome,$descricao, $preco,$foto );

$comando->execute();
}
//abre o arquivo fotm.php
header("Location: produtos.php");